<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_users extends MY_Controller
{

	public function index()
	{
		$data['tests_data'] = $this->Md_database->getData('lottery_useradmin','UA_pkey,UA_userType,userName,UA_Name,UA_state,UA_Address,UA_City,UA_email,UA_password,UA_mobile,UA_branch,UA_Image,UA_status',array('UA_status<>'=>'3'),array('UA_pkey  ','DESC'));
		$this->adminBackend('admin/sub-users/users',$data,true);
	}
	/*[START:: Delete subuser::]*/
     public function check_unique(){
        
            $blog_category_name= trim($this->input->get('txtEmail'));
            $pk_id= $this->input->get('test_id');
            
            if(!empty($pk_id)){
                
                $this->db->where('UA_pkey!=', $pk_id);
                $this->db->where('UA_email', $blog_category_name);
                
                $this->db->where('UA_status!=', 3);
                $query = $this->db->get('useradmin');
                $res=$query->result_array();
                if (!empty($res)) {
                        echo "false";
                    } else {
                        echo "true";
                    }
            }else{
                $this->db->where('UA_email', $blog_category_name);
                $this->db->where('UA_status!=', 3);
                $query = $this->db->get('useradmin');
                $res=$query->result_array();
                if (!empty($res)) {
                        echo "false";
                    } else {
                        echo "true";
                    }
                }
        }
}