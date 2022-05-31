<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_add_sub_user extends MY_Controller
{

	public function add_cms($id = '')
	{ 
		$editData = "";
        $editserData = "";
        $editcycData = "";
        $ediCycleImg = "";
        $Slist = [];
        if (!empty($id)) {
            $condition = array("UA_pkey" => $id);
            $fld =array('UA_pkey,UA_userType,userName,UA_Name,UA_state,UA_Address,UA_City,UA_email,UA_password,UA_mobile,UA_branch,UA_Image,UA_priviliges');

            $editData = $this->Md_database->getData('lottery_useradmin', '*', $condition);
            $editData = !empty($editData[0]) ? $editData[0] : '';
            $cycId = !empty($editData['txtCycle']) ? $editData['txtCycle'] : "";

            if (empty($editData)) {
                $this->session->set_flashdata('error', ' Something goes wrong.');
                redirect(base_url() . 'admin/sub-users/users');
            }
                        $data['test_id'] =$id;

        }
        $data['editData'] = $editData;
        $data['title'] = "Sub User";

		$this->adminBackend('admin/sub-users/add_sub_user', $data,true);
	}


 /*[START:: Add or Update subuser::]*/
    public function add_sub_action()
    {   
        
         $redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
      
        $id = !empty($this->input->post('test_id')) ? $this->input->post('test_id') : '';
        $txtName = !empty($this->input->post('txtName')) ? $this->input->post('txtName') : '';
        $txtEmail = !empty($this->input->post('txtEmail')) ? $this->input->post('txtEmail') : '';
        $txtMobile = !empty($this->input->post('txtMobile')) ? $this->input->post('txtMobile') : '';
        $txtAddress = !empty($this->input->post('txtAddress')) ? $this->input->post('txtAddress') : '';
         $city = !empty($this->input->post('city')) ? $this->input->post('city') : '';
          $txtPassword = !empty($this->input->post('txtPassword')) ? base64_encode($this->input->post('txtPassword')) : "";
           $Passwords = !empty($this->input->post('txtPassword')) ? $this->input->post('txtPassword') : "";
            $priviliges = !empty($this->input->post('priviliges')) ? implode(',', $this->input->post('priviliges')) : "";
           // print_r($priviliges);die();
           $txtstate = !empty($this->input->post('txtstate')) ? $this->input->post('txtstate') : '';
           // $txtarea = !empty($this->input->post('txtarea')) ? $this->input->post('txtarea') : '';
        $this->form_validation->set_rules('txtName', ' name', 'trim|required');
        $this->form_validation->set_rules('txtEmail', 'subuser  name', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if(!empty($id)){

                $photoDoc = "";
                        if (!empty($_FILES['profile_img']['name'])) {
                            $rename_name = uniqid(); //get file extension:
                            $arr_file_info = pathinfo($_FILES['profile_img']['name']);
                            $file_extension = $arr_file_info['extension'];
                            $photoDoc = $rename_name . '.' . $file_extension;
                            //
                            $old_name = $_FILES['profile_img']['name'];
                            $config = array();
                            $config['upload_path'] = FCPATH . 'AdminMedia/subuser/';
                            $config['overwrite'] = FALSE;
                            $config["allowed_types"] = 'jpg|png|jpeg';
                            $config["max_size"] = 100024;
                            $config["max_width"] = 1214225400;
                            $config["max_height"] = 1265446500;
                            $config['create_thumb'] = TRUE;
                            $config['maintain_ratio'] = FALSE;
                            $config['file_name'] = $photoDoc;
                            $this->upload->initialize($config);
                            //load image library:
                            if (!$this->upload->do_upload('profile_img')) {
                                $this->data['error'] = $this->upload->display_errors();
                                $error = $this->data['error'];
                                $sms = '<div class="alert alert-danger">
                                        <strong>Sorry!</strong> ' . $error . '.
                                    </div>';
                                $this->session->set_flashdata('error', $sms);
                            }
                            $this->upload->data();
                            if (!empty($this->input->post('fileold'))) {
                                unlink(FCPATH .  $this->input->post('fileold'));
                            }
                        }
                      
           
                $update_data =array(
                            'UA_email' => $txtEmail,
                            'UA_Name' => $txtName,
                            'UA_Address' => $txtAddress,
                            'UA_city' => $city,
                            'UA_state' => $txtstate,
                            'UA_mobile' => $txtMobile,
                            'UA_priviliges' => $priviliges,
                            'UA_updatedDate' => date('Y-m-d H:i:s'),
                            'UA_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );

                
                 $update_data['UA_Image'] = !empty($photoDoc) ? 'AdminMedia/subuser/'.$photoDoc : $this->input->post('fileold');
                        $result = $this->Md_database->updateData('lottery_useradmin',$update_data,array('UA_pkey'=>$id));
                         $this->system_log('lottery_useradmin','update',$update_data,array('id' => $result));
                        $actionMsg = 'updated';
            }else{

                
                 $photoDoc = "";
                        if (!empty($_FILES['profile_img']['name'])) {
                            $rename_name = uniqid(); //get file extension:
                            $arr_file_info = pathinfo($_FILES['profile_img']['name']);
                            $file_extension = $arr_file_info['extension'];
                            $photoDoc = $rename_name . '.' . $file_extension;
                            //
                            $old_name = $_FILES['profile_img']['name'];
                            $config = array();
                            $config['upload_path'] = FCPATH . 'AdminMedia/subuser/';
                            $config['overwrite'] = FALSE;
                            $config["allowed_types"] = 'jpg|png|jpeg';
                            $config["max_size"] = 100024;
                            $config["max_width"] = 1214225400;
                            $config["max_height"] = 1265446500;
                            $config['create_thumb'] = TRUE;
                            $config['maintain_ratio'] = FALSE;
                            $config['file_name'] = $photoDoc;
                            $this->upload->initialize($config);
                            //load image library:
                            if (!$this->upload->do_upload('profile_img')) {
                                $this->data['error'] = $this->upload->display_errors();
                                $error = $this->data['error'];
                                $sms = '<div class="alert alert-danger">
                                        <strong>Sorry!</strong> ' . $error . '.
                                    </div>';
                                $this->session->set_flashdata('error', $sms);
                            }
                            $this->upload->data();
                            if (!empty($this->input->post('fileold'))) {
                                unlink(FCPATH . $this->input->post('fileold'));
                            }
                        }
                      

                        $insert_data =array(
                            'UA_email' => $txtEmail,
                            'UA_Name' => $txtName,
                            'UA_Address' => $txtAddress,
                            'UA_city' => $city,
                            'UA_state' => $txtstate,
                            'UA_mobile' => $txtMobile,
                            'UA_password' => $txtPassword,
                             'UA_priviliges' => $priviliges,
                            'UA_createdDate' => date('Y-m-d H:i:s'),
                            'UA_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
                $insert_data['UA_Image'] = !empty($photoDoc) ? 'AdminMedia/subuser/'.$photoDoc : $this->input->post('fileold');
                

                $result = $this->Md_database->insertData('lottery_useradmin',$insert_data);
                $this->system_log('lottery_useradmin','insert',$insert_data,array('id' => $result));
                
                  $subject = 'Login Details';
                            $logoimglink ='AdminMedia/e6c8ea94d3a3be4c2ff675acce3c3c04.png';
                            $logo = base_url() . $logoimglink;
                            $htmls='';
                            $htmls = '<!DOCTYPE html>
                            <html>
                            <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                <title></title>
                                <style type="text/css">
                                    .main{
                                        max-width: 680px; 
                                        min-width: 500px; 
                                        border: 2px solid #23AA95; 
                                        border-radius:5px; 
                                        margin-top: 20px;
                                    }
                                    .outer-block{
                                        background-color: #F2F3F3; 
                                        /*border-top: thick double #cccccc; */
                                        text-align: left;
                                    }
                                    .header-block {
                                        padding: 10px;
                                    }
                                    .main-content{
                                        margin:0 30px;
                                        padding: 20px 0px;
                                    }
                                    .main-content p{
                                        margin-top: 0px;
                                    }
                                </style>
                            </head>
                                <body>
                                <div align="center">
                                     <div class="main" >
                                        <div class="header-block">   
                                            <div class="logo-img">';
                                            $htmls .='<img src='.$logo.' height="40" alt="mplussoft">';
                                 $htmls .='
                                                
                                            </div>
                                        </div> 
                                        <div class="outer-block">
                                            <div class="main-content" >
                                                <table style="text-align: left;">
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>: '; $htmls .=$txtEmail;$htmls .='</td>
                                                    </tr>
                                                     
                                                    <tr>
                                                        <th>Password</th>
                                                        <td>: '; $htmls .= $Passwords;$htmls .='</td>
                                                    </tr>
                                                   
                                                </table><br>  <br>
                                               
                                                   
                                                
                                            </div>
                                        </div>   
                                    </div>   
                                </div>
                                <center>';
                               $htmls .= date('Y');
                                $htmls.=' Copyright 2021 - Lottery Beauty. All rights reserved | Design By - Mplussoft</center>
                                </body>
                            </html>';       
                            $from = array(
                                "email" => 'support@kuvirabeauty.com',
                                "name" => 'Lottery'
                            );
                            $this->Md_database->sendEmail($txtEmail, $from, $subject, $htmls);
                
                $actionMsg = 'added';
            }


            if (!empty($result)) {
                $this->session->set_flashdata('success', "subuser $actionMsg successfully.");
                redirect(base_url('admin/sub-users/users'));      
               
            } else {
                $this->session->set_flashdata('error', "$actionMsg failed, please try again.");
               redirect(base_url('admin/sub-users/users'));
            }

        }
    }
    /*[END:: Add or Update subuser::]*/

     /*[START:: Make film status active or inactive::]*/
public function change_sub_status($id,$status) {
$redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
$data = array('UA_status' => $status);
$condition = array("UA_pkey" => $id);
$ret = $this->Md_database->updateData('lottery_useradmin', $data, $condition);
$this->system_log('lottery_useradmin','UA_status',$data,array('UA_pkey' => $ret));
if (!empty($ret)) {
$this->session->set_flashdata('success', "Status has been updated successfully.");
redirect($redirect_url);

} else {
$this->session->set_flashdata('error', "film change status action failed, please try again.");
redirect($redirect_url);

}
}
/*[END:: Make film  status active or inactive::]*/

/*[START:: Delete film::]*/
public function delete_game($user_id){
$redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
$data = array('UA_status' => '3');
$condition = array("UA_pkey" => $user_id);
$ret = $this->Md_database->updateData('lottery_useradmin', $data, $condition);
$this->system_log('lottery_useradmin','delete',$data,array('UA_pkey' => $ret));
if (!empty($ret)) {
$this->session->set_flashdata('success', "Sub user deleted successfully.");

redirect(base_url('admin/master/game_master'));

} else {
$this->session->set_flashdata('error', "film delete action failed, please try again.");
redirect(base_url('admin/master/game_master'));

}
}
/*[START:: Delete film::]*/
}