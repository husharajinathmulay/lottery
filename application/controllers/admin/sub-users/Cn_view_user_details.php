<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_view_user_details extends MY_Controller
{

	public function users($id=NULL)
	{
		 $condition = array("UA_pkey" => $id);
            $fld =array('UA_pkey,UA_userType,userName,UA_Name,UA_state,UA_Address,UA_City,UA_email,UA_password,UA_mobile,UA_branch,UA_Image,UA_priviliges,UA_userType');

            $editData = $this->Md_database->getData('lottery_useradmin', '*', $condition);
            $data['editData'] = !empty($editData[0]) ? $editData[0] : '';
		$this->adminBackend('admin/sub-users/view_user_details',$data,true);
	}
}