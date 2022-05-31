<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_game_result extends MY_Controller
{

	public function index()
	{
		$data = array();
		$data['game_data'] = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('status'=>'1'),array('pk_id ','DESC'));
		$test_id = !empty($this->input->post('userid')) ? $this->input->post('userid') : '';
         
         if(!empty($test_id)){
            $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('pk_id '=>$test_id));
            $data['test_id'] =$test_id;
            $data['single_test_data'] = !empty($single_test_data) ? $single_test_data[0] : array();
        }
          $from_date = !empty($this->input->get('from_date')) ? trim($this->input->get('from_date')) : '';
           $to_date = !empty($this->input->get('to_date')) ? trim($this->input->get('to_date')) : '';
           $game_name = !empty($this->input->get('game_name')) ? trim($this->input->get('game_name')) : '';
           	//echo $fromdate;die();
           if (!empty($from_date)) {
        $this->db->where('date(c.created_date)>=', date('Y-m-d 00:00:00', strtotime($from_date)));
    }
    if (!empty($to_date)) {
        $this->db->where('date(c.created_date)<=', date('Y-m-d 00:00:00', strtotime($to_date)));
    }
     if (!empty($game_name)) {
        $this->db->where('game_id',$game_name);
    }

        $this->db->select('c.game_id,c.pk_id,c.game_time,c.open_time_result,c.close_time_result,c.open_time_result_two,c.close_time_result_two,c.status,c.created_date,c.added_on,b.game_name,b.open_time,b.close_time,b.text_color,b.result_color,b.back_color,b.status');
            $this->db->from('lottery_game_result as c');
            $this->db->join('lottery_game' .' b','b.pk_id=c.game_id');
            $this->db->where(array('c.status<>'=>'3')); 
           $this->db->order_by('c.pk_id','desc');
            $res = $this->db->get();
             $data['tests_data'] = $res->result_array();

		$this->adminBackend('admin/game_result',$data,true);
	}
	function game_change()
{
 error_reporting(0);
 $game_name=$this->input->post('game_name');
 $single_game_data = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('pk_id'=>$game_name),'');
  $data['open']= $single_game_data[0]['open_time'];
 $data['close']= $single_game_data[0]['close_time'];
echo json_encode($data);

}
	function game_results()
{
 error_reporting(0);
 $userid=$this->input->post('userid');
 $single_game_data = $this->Md_database->getData('lottery_game_result','*',array('pk_id'=>$userid),'');
   $game_id= $single_game_data[0]['game_id'];
    $single_games_dataes = $this->Md_database->getData('lottery_game','*',array('pk_id'=>$game_id),'');

$data['open']= $single_games_dataes[0]['open_time'];
 $data['close']= $single_games_dataes[0]['close_time'];
 $single_games_data = $this->Md_database->getData('lottery_game','*',array('status'=>'1'),'');

foreach ($single_games_data as $key => $value) { 
    $val="";

   $a=$value['game_name'];
   $b=$value['pk_id'];
    if ($game_id==$value['pk_id']) {

       $val="selected";

     } 
   //$data['game_id']= "<option value='$b' $val>$a</option>";
 }
 $data['game_id']=$game_id;
 $data['test_id']= $userid;
 $data['open_time_result']= $single_game_data[0]['open_time_result'];
  $data['close_time_result']= $single_game_data[0]['close_time_result'];
 $data['open_time_result_two']= $single_game_data[0]['open_time_result_two'];
 $data['close_time_result_two']= $single_game_data[0]['close_time_result_two'];
 $data['game_time']= $single_game_data[0]['game_time'];
echo json_encode($data);

}

  /*[START:: Add or Update film::]*/
    public function game_result_actions()
    {   
         $redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
        // $pageNo = !empty($this->input->post('pageNo')) ? $this->input->post('pageNo') : '';
        $test_id = !empty($this->input->post('test_id')) ? $this->input->post('test_id') : '';
      $game_id = !empty($this->input->post('game_name')) ? $this->input->post('game_name') : '';
        $flexRadioDefault = !empty($this->input->post('flexRadioDefault')) ? $this->input->post('flexRadioDefault') : '';
        $open_time_result = !empty($this->input->post('open_time_result')) ? $this->input->post('open_time_result') : '';
         $open_time_result_two = !empty($this->input->post('open_time_result_two')) ? $this->input->post('open_time_result_two') : '0';
         
         $close_time_result = !empty($this->input->post('close_time_result')) ? $this->input->post('close_time_result') : '';
          if(!empty($close_time_result)){
        $close_time_result_two = !empty($this->input->post('close_time_result_two')) ? $this->input->post('close_time_result_two') : '0';
             } 
        $this->form_validation->set_rules('game_name', 'game name', 'trim|required');
        $this->form_validation->set_rules('open_time_result', 'Open', 'trim|required');
       // $this->form_validation->set_rules('close_time_result_two', 'Close', 'trim|required');
        $this->form_validation->set_rules('open_time_result_two', 'Open', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if(!empty($test_id)){
                $update_data =array(
                            'game_id' => $game_id,
                            'game_time' => $flexRadioDefault,
                             'open_time_result' => $open_time_result,
                             'close_time_result_two' => $close_time_result_two,
                             'open_time_result_two' => $open_time_result_two,
                             'close_time_result' => $close_time_result,
                            'updated_by' => $this->session->userdata('UID'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
               
                        $result = $this->Md_database->updateData('lottery_game_result',$update_data,array('pk_id '=>$test_id));
                        $this->system_log('lottery_game_result', 'update', $update_data, array('id' => $result));
                        $actionMsg = 'edit';
            }else{
                
                $data = array('game_result_status' => '1');
                  $condition = array("pk_id" => $game_id);
$ret = $this->Md_database->updateData('lottery_game', $data, $condition);
                            $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_id),array('pk_id ','DESC'));
                           $test_ids= $single_test_data[0]['pk_id'];
                           $date= $single_test_data[0]['created_date'];
                          $stnDate = date("Y-m-d",strtotime($date));
                          $current_date= date('Y-m-d');
                          if($stnDate==$current_date){
                 $this->session->set_flashdata('success', "Game Result already exist.");
                 redirect(base_url('admin/game_result'));
                          }else{
                           $update_data =array(
                            'game_status' => '1',
                            );
                           $result = $this->Md_database->updateData('lottery_game_result',$update_data,array('pk_id '=>$test_ids));
                        $insert_data =array(
                            'game_id' => $game_id,
                            'game_time' => $flexRadioDefault,
                            'open_time_result' => $open_time_result,
                             // 'close_time_result_two' => $close_time_result_two,
                            'open_time_result_two' => $open_time_result_two,
                            // 'close_time_result' => $close_time_result,
                            'created_by' => $this->session->userdata('UID'),
                            'created_date' => date('Y-m-d H:i:s'),
                            'created_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
                    //    print_r($insert_data);die();
                $result = $this->Md_database->insertData('lottery_game_result',$insert_data);
                 $this->system_log('lottery_game_result', 'insert', $insert_data, array('id' => $result));
                $actionMsg = 'added';
            }
            }


            if (!empty($result)) {
                $this->session->set_flashdata('success', "Game Result $actionMsg successfully.");
                 redirect(base_url('admin/game_result'));         
               
            } else {
                $this->session->set_flashdata('error', "$actionMsg failed, please try again.");
               redirect(base_url('admin/game_result'));
            }
        }
    }
    /*[END:: Add or Update film::]*/
public function check_unique(){
        error_reporting(0);
            $game_name= trim($this->input->get('game_name'));
            $test_id= $this->input->get('test_id');
              $this->db->limit('1');
             $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_name),array('pk_id ','DESC'));
                           $test_ids= $single_test_data[0]['pk_id'];
                           $date= $single_test_data[0]['created_date'];
                          $stnDate = date("Y-m-d",strtotime($date));
                          $current_date= date('Y-m-d');

            if(!empty($test_id) || empty($single_test_data)){
                echo "true";
            }else{
                // $this->db->where('game_id', $game_name);
                // $this->db->where('status!=', 3);
                // $query = $this->db->get('lottery_game_result');
                // $res=$query->result_array();
                if ($stnDate==$current_date) {
                  
                        echo "false";
                    } else {
                        echo "true";
                    }
                }
        }
        
        
        /**
	 * ***************Function to get state table data **********
	 * @type : Function
	 * @function name : get_data_table_state
	 * @description : Get "state table data" admin interface
	 * @param : null
	 * @designer : Yogita Patil
	 * @author : hushar Mulay
	 * @return : null
	 ********************************************************* */
	public function get_data_table_result()
	{
		$draw 		= intval($this->input->post("draw"));
		$questions 	= $this->get_result_table_data($is_get_total_record = FALSE);
		$data 		= array();
		$start = intval($this->input->post("start"));



		foreach ($questions as $index => $rows) {

			$status_btn = false;

			$privilige = $this->Md_database->getPriviliges();
			if ((in_array('edit_result_master', $privilige))) {
				$edit_btn = '<a href="javascript:void(0);"><button type="button" class="btn btn-warning btn-xs btn-edit edit-record"  data-id="'.$rows->pk_id.'" data-toggle="modal" data-target="#exampleModal"
                                                                title="Edit"><i class="fa fa-pencil"></i></button></a>';
			} else {
				$edit_btn = '<button type="button" class="btn btn-warning btn-xs" title="Access denied" disabled=""><i class="fa fa-pencil"></i></button>';
			}
		
			$data[] = array(
				($start + 1),
				date('d-m-Y h:i A',strtotime($rows->created_date)),
				ucwords($rows->game_name),
				ucwords($rows->open_time),
				ucwords($rows->close_time),
				$rows->open_time_result. '-' . $rows->open_time_result_two. '' . $rows->close_time_result_two. '-' . $rows->close_time_result,
				 $edit_btn,
			);
			$start++;
		}

		$total_employees = $this->get_result_table_data(TRUE);
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $total_employees,
			"recordsFiltered" => $total_employees,
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}
		/**
	 * ***************Function to get state table data **********
	 * @type : Function
	 * @function name : get_state_table_data
	 * @description : Get "state table data" admin interface
	 * @param : is_get_total_record
	 * @designer : Yogita Patil
	 * @author : hushar Mulay
	 * @return : query result
	 ********************************************************* */
	public function get_result_table_data($is_get_total_record = FALSE)
	{
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));
		$order = $this->input->post("order");
		$search = $this->input->post("search");
		$search = $search['value'];
		// $search = str_replace(' ', '-', $search); // Replaces all spaces with hyphens.
		// $search = preg_replace('/[^A-Za-z0-9\-]/', '', $search); // Removes special chars.
		$valid_columns = array(
			0 => 'c.pk_id',
			1 => 'c.created_date',
			2 => 'b.game_name',
			3 => 'b.open_time',
			4 => 'b.close_time',
			5 => 'c.open_time_result',
		);

		if (!empty($search)) {
			$this->db->where("b.game_name LIKE '%" . $search . "%'");
			$this->db->or_where("b.open_time LIKE '%" . $search . "%'");
			$this->db->or_where("b.close_time LIKE '%" . $search . "%'");
		    $this->db->or_where("c.created_date LIKE '%" . $search . "%'");
		    $this->db->or_where("c.open_time_result_two LIKE '%" . $search . "%'");
		    $this->db->or_where("c.close_time_result LIKE '%" . $search . "%'");
		    $this->db->or_where("c.close_time_result_two LIKE '%" . $search . "%'");
		     $this->db->or_where("c.open_time_result LIKE '%" . $search . "%'");
		}
		   $from_date = !empty($this->input->get('from_date')) ? trim($this->input->get('from_date')) : '';
           $to_date = !empty($this->input->get('to_date')) ? trim($this->input->get('to_date')) : '';
           $game_name = !empty($this->input->get('game_name')) ? trim($this->input->get('game_name')) : '';
           	//echo $fromdate;die();
           if (!empty($from_date)) {

        $this->db->where('date(c.created_date)>=', date('Y-m-d 00:00:00', strtotime($from_date)));
    }
    if (!empty($to_date)) {
        $this->db->where('date(c.created_date)<=', date('Y-m-d 00:00:00', strtotime($to_date)));
       //  $this->db->where('c'.'.created_date >=',date('Y-m-d 00:00:01',strtotime($fromdate)));
          //  $this->db->where('c'.'.created_date <=',date('Y-m-d 23:59:59',strtotime($fromdate)));
        // $this->db->or_where("DATE_FORMAT(created_date,'%d-%m-%Y') LIKE '%$search_term%'");
    }
     if (!empty($game_name)) {
        $this->db->where('game_id',$game_name);
    }

		/*--start--*/
	  $this->db->select('c.game_id,c.pk_id,c.game_time,c.open_time_result,c.close_time_result,c.open_time_result_two,c.close_time_result_two,c.status,c.created_date,c.added_on,b.game_name,b.open_time,b.close_time,b.text_color,b.result_color,b.back_color,b.status');
            $this->db->from('lottery_game_result as c');
            $this->db->join('lottery_game' .' b','b.pk_id=c.game_id');
            $this->db->where(array('c.status<>'=>'3')); 
           $this->db->order_by('c.pk_id','desc');
		if ($is_get_total_record == TRUE) {
			return $this->db->get()->num_rows();
		} else {
			$this->db->limit($length, $start);
			return $this->db->get()->result();
		}
		/*--stop--*/
	}
}