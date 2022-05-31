<?php
class Md_database extends CI_Model {

    function __construct() {
		parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

	#function for inserting data into database
    public function insertData($table, $data) {
        $this->db->insert($table, $data);
        $this->db->trans_complete();
        return $this->db->insert_id();
    }

	#function for delete data into database
    public function deleteData($table, $condition) {
        $this->db->where($condition);
        $this->db->delete($table);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
	
	#function inner join two tables
    public function inner_join($select,$table1,$table2,$id1,$id2,$condition) {
        $this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2,$table2.'.'.$id2.'='.$table1.'.'.$id1,'inner');
		$this->db->where($condition);
		$query=$this->db->get();
		return $query->result_array();
    }
	
	#function left join two tables
	public function left_join($select,$table1,$table2,$id1,$id2,$condition) {
        $this->db->select($select);
		$this->db->from($table1);
		$this->db->join($table2,$table2.'.'.$id2.'='.$table1.'.'.$id1,'left');
		$this->db->where($condition);
		$query=$this->db->get();
		return $query->result_array();
    }

	#function for  data fetching data from database
    public function getData($table, $fields = '', $condition = '', $order_by = '', $limit = '') {
        $str_sql = '';
        if (is_array($fields)) {
			#$fields passed as array
            $str_sql .= implode(",", $fields);
        } elseif ($fields != "") {
			#$fields passed as string
            $str_sql .= $fields;
        } else {
            $str_sql .= '*';  #$fields passed blank
        }
        $this->db->select($str_sql);
        if (is_array($condition)) {  #$condition passed as array
            if (count($condition) > 0) {
                foreach ($condition as $field_name => $field_value) {
                    if ($field_name != '' && $field_value != '') {
                        $this->db->where($field_name, $field_value);
                    }
                }
            }
        } else if ($condition != "") { #$condition passed as string
            $this->db->where($condition);
        }
        if ($limit != "")
            $this->db->limit($limit);#limit is not blank

        if (is_array($order_by)) {
            $this->db->order_by($order_by[0], $order_by[1]);  #$order_by is not blank
        } else if ($order_by != "") {
            $this->db->order_by($order_by);  #$order_by is not blank
        }
        $this->db->from($table);  #getting record from table name passed
        $query = $this->db->get();

        return $query->result_array();
    }

	#code to get data useing common function in object form
    public function getDataObject($table, $fields = '', $condition = '', $order_by = '', $limit = '') {
        $str_sql = '';
        if (is_array($fields)) {
		#$fields passed as array
            $str_sql .= implode(",", $fields);
        } elseif ($fields != "") {
		#$fields passed as string
            $str_sql .= $fields;
        } else {
            $str_sql .= '*';  #$fields passed blank
        }
        $this->db->select($str_sql);
        if (is_array($condition)) {  #$condition passed as array
            if (count($condition) > 0) {
                foreach ($condition as $field_name => $field_value) {
                    if ($field_name != '' && $field_value != '') {
                        $this->db->where($field_name, $field_value);
                    }
                }
            }
        } else if ($condition != "") { #$condition passed as string
            $this->db->where($condition);
        }
        if ($limit != "")
            $this->db->limit($limit);#limit is not blank

        if (is_array($order_by)) {
            $this->db->order_by($order_by[0], $order_by[1]);  #$order_by is not blank
        } else if ($order_by != "") {
            $this->db->order_by($order_by);  #$order_by is not blank
        }
        $this->db->from($table);  #getting record from table name passed
        $query = $this->db->get();

        return $query->num_rows() ? $query->result() : false;
    }


	#function for updating data into database
    public function updateData($table, $data, $condition) {
        $this->db->where($condition);
        $this->db->update($table, $data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

	#function core query
    public function coreQuery($query) {
        $res = $this->db->query("$query");
        return $res->result_array();
    }

	#function resize images
    public function do_resize($sorcePAth, $photoDoc, $tarPath, $height, $width) {
        $filename = $this->input->post('new_val');
        $source_path = FCPATH . $sorcePAth . $photoDoc;
        $target_path = FCPATH . $tarPath;
        $config_manip = array('image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'maintain_ratio' => TRUE,
            'create_thumb' => TRUE,
            'thumb_marker' => '_thumb',
            'width' => $width,
            'height' => $height);

        $newNAme = str_replace('.', '_thumb.', $photoDoc);
        $this->load->library('image_lib', $config_manip);
        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        } else {
            return $newNAme;
        }
        $this->image_lib->clear();
    }

    public function getEmailInfo($email_title, $reserved_words) {
		#gather information for database table
        $email_data = $this->getData('static_email_format', '', array("email_title" => $email_title));
        $content = !empty($email_data[0]['email_content']) ? $email_data[0]['email_content'] : "";
        $subject = !empty($email_data[0]['email_subject']) ? $email_data[0]['email_subject'] : "";
		#replace reserved words if any
        foreach ($reserved_words as $k => $v) {
            $content = str_replace($k, $v, $content);
        }
        return array("subject" => $subject, "content" => $content);
    }

    public function sendSMTPEmail($recipeinets, $from, $subject, $message) {
        $config['protocol'] = 'smtp';
        $config['wordwrap'] = FALSE;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['crlf'] = "\r\n";
        $config['smtp_host'] = SMTP_SERVER_NAME;
        $config['smtp_user'] = SMTP_USERNAME;
        $config['smtp_pass'] = SMTP_PASSWORD;
        $config['smtp_port'] = SMTP_PORT;
        $config['newline'] = "\r\n";
        $config['smtp_crypto'] = 'tls';
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($from['email'], $from['name']);
        $this->email->subject($subject);
        $this->email->to($recipeinets);
        $this->email->message($message);
        return $this->email->send();
    }

    public function download_pdf($name = 'download', $html = '') {
        $this->load->library('M_pdf');
        $mpdf = new mPDF();
        $mpdf->AddPage('P', // L - landscape, P - portrait
                '', '', '', '', 4, // margin_left
                4, // margin right
                4, // margin top
                4, // margin bottom
                4, // margin header
                4); // margin footer
        //            die;
        ob_clean();
        $mpdf->allow_charset_conversion = true;
//        $mpdf->charset_in = 'UTF-8';
//        $mpdf->charset_in = 'ISO-8859-2';
        $mpdf->SetDisplayMode('fullpage');

//        $mpdf->showWatermarkImage = true;
//        $mpdf->SetWatermarkImage(base_url() . 'AdminMedia/images/water-mark.png', 0.15, 'F');
        $mpdf->WriteHTML($html);

        $mpdf->Output("$name", 'D'); //D-download,I=View
    }
	
	public function primary_key($table)
	{
		$query="SHOW KEYS FROM ".$table." WHERE Key_name = 'PRIMARY'";
		$res = $this->db->query("$query");
        $result=$res->result_array();
		return $result[0]['Column_name'];
	}

 public function sendEmail($recipeinets, $from, $subject, $message, $bcc = '') {
        $config['protocol'] = 'mail';
        $config['wordwrap'] = FALSE;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $this->load->library('email', $config);
        $this->email->initialize($config);

// set the from address
        $this->email->from(stripslashes($from['email']), $from['name']);
// set the subject
        $this->email->subject($subject);
// set recipeinets
        $this->email->to($recipeinets);
//set bcc
        if (!empty($bcc)) {
            $this->email->bcc($bcc);
        }
// set mail message
        $this->email->message($message);

// return boolean value for email send
        return $this->email->send();
    }
    function getPriviliges()
    {
        $this->db->select('*');
        $this->db->from('lottery_useradmin');
        $this->db->where('UA_pkey', $this->session->userdata('UID'));
        $this->db->where('UA_status', '1');
        $role = $this->db->get()->result_array();
        $user_details = !empty($role[0]) ? $role[0]['UA_priviliges'] : '';
        $privilige = !empty($user_details) ? explode(',', $user_details) : [];

        if (empty($privilige)) {
            redirect(base_url() . 'admin/logout');
        }
        return $privilige;
        exit();
    }


}

?>
