<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_forgot extends MY_Controller
{

	public function adminarea()
	{
		$this->adminBackend('admin/landing-page');
	}
	public function forgot_password()
	{
		$this->load->view('admin/vw_forgot_password');
	}
	public function otp()
	{
		$this->load->view('admin/otp');
	}
	public function reset_password()
	{
		$this->load->view('admin/reset-password');
	}
	public function dashboard()
	{
		$this->adminBackend('admin/dashboard');
	}
	public function change_password()
	{
		$this->adminBackend('admin/change-password');
	}

	 public function forgot_action()
    {
        $email_id = !empty($this->input->post('email_id')) ? $this->input->post('email_id') : '';
        $this->form_validation->set_rules('email_id', 'email id', 'trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
             redirect($_SERVER['HTTP_REFERER']);                 
        } 
        if (!empty($this->input->POST('email_id'))) {
            // SQL:: Get Admin User Details
            $table = "useradmin";

            $condition = array('UA_email' => $email_id,'UA_status' => '1');
            $condition = $this->security->xss_clean($condition);//xss_clean security
            $user_details = $this->Md_database->getData($table, 'UA_pkey,UA_name,UA_email', $condition, '', '');

            if (!empty($user_details)) {
                $recipeinets=$this->input->post('email_id');
                $otp = rand(1000,9999);
                
                //SQL:: Update db
                $table = 'useradmin';
                $data = array("UA_otp" => $otp);
                $condition = array('UA_email' => $email_id,'UA_status' => '1');
                $this->Md_database->updateData($table, $data, $condition);
                /* [start::send login details mail] */
                   $user_name=!empty($user_details[0]['UA_name']) ?$user_details[0]['UA_name']:'';
                // $from = array(
                //     "email" => SITE_MAIL,
                //     "name" => SITE_TITLE,
                // );
             
                // $reserved_words = array(
                //     "||USER_NAME||" => !empty($user_details[0]['UA_name']) ?$user_details[0]['UA_name']:'',
                //     "||SITE_TITLE||" => SITE_TITLE,
                //     "||OTP||" => $otp,
                //     "||YEAR||" => date('Y'),
                // );
                // $email_data = $this->Md_database->getEmailInfo('forgot_password_otp', $reserved_words);
                
                // $oldsubject = $email_data['subject'];
                // $subject = str_replace("||SITE_TITLE||", SITE_TITLE, $oldsubject);
                // $subject = !empty($subject) ? SITE_TITLE . '-' .$subject : "";
                
                // $ml = $this->Md_database->sendSMTPEmail($recipeinets, $from, $subject, $email_data['content']);
                
                 $subject = 'Forgot Password Otp';
                            $logoimglink ='assets/front/images/header/israni-logo.png';
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
                                                <p>
                                                    Dear '.$user_name.',</p>

                                                    <p> 
                                                    We have received OTP from .<br>
                                                </p>
                                                <table style="text-align: left;">
                                                    <tr>
                                                        <th>User Name</th>
                                                        <td>: '; $htmls .=$user_name;$htmls .='</td>
                                                    </tr>
                                                    <tr>
                                                        <th>OTP</th>
                                                        <td>: '; $htmls .=$otp;$htmls .='</td>
                                                    </tr>
                                                </table><br>  <br>
                                            </div>
                                        </div>   
                                    </div>   
                                </div>
                                <center>';
                               $htmls .= date('Y');
                                $htmls.=' Copyright © 2011-21 Mplussoft
                            Technologies. All Rights Reserved.</center>
                                </body>
                            </html>';       
                           // $to_id = strip_tags($mail);
                            $from = array(
                                "email" => 'mplussoftesting@gmai.com',
                                "name" => 'Forgot Password OTP'
                            );
                            $ml = $this->Md_database->sendEmail($recipeinets, $from, $subject, $htmls);
                /* [end::send forgot mail] */
                //SQL:: update your password:-
                /* @ Redirect */
                if (!empty($ml)) {
                    $this->session->set_flashdata('success', 'We have sent otp on your email id. Please verify otp.');
                    $data['user_email']=$recipeinets;

                    $this->load->view('admin/otp',$data);
                 } else {
                     $this->session->set_flashdata('error', "Something went wrong. Please try again.");
                     redirect(base_url() . 'admin/forgot-password');
                 }
            } else {
                //Email id or password not match:
                /* @ Redirect */
                $this->session->set_flashdata('error', 'Please enter correct email.');
                redirect(base_url() . 'admin/forgot-password');
            }
        } else {
            /* @ Redirect */
            $this->session->set_flashdata('error', 'We got wrong response to proceed your request.');
            redirect(base_url() . 'admin/forgot-password');
        }
    }
    public function otp_action()
    {
        $otp = !empty($this->input->post('otp')) ? $this->input->post('otp') : '';
        $email_id = !empty($this->input->post('email_id')) ? $this->input->post('email_id') : '';
        $this->form_validation->set_rules('otp', 'otp', 'trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
             redirect($_SERVER['HTTP_REFERER']);                 
        } 
        $table = "useradmin";

            $condition = array('UA_email' => $email_id,'UA_otp' => $otp,'UA_status' => '1');
            $condition = $this->security->xss_clean($condition);//xss_clean security
            $user_details = $this->Md_database->getData($table, 'UA_pkey,UA_name,UA_email', $condition, '', '');
            if(!empty($user_details)){
                $this->session->set_flashdata('success', 'Otp match successfully. Please reset your password.');
                    $data['user_email']=$email_id;

                    $this->load->view('admin/reset-password',$data);
            }else{
                $this->session->set_flashdata('error', 'Please enter correct otp.');
                redirect($_SERVER['HTTP_REFERER']);
            }
    }
    public function reset_password_action()
    {
        $email_id = !empty($this->input->post('email_id')) ? $this->input->post('email_id') : '';
        $new_password = !empty($this->input->post('new_password')) ? $this->input->post('new_password') : '';
        $confirm_password = !empty($this->input->post('confirm_password')) ? $this->input->post('confirm_password') : '';

        $this->form_validation->set_rules('new_password', 'new password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
             redirect($_SERVER['HTTP_REFERER']);                 
        } 
        if($new_password == $confirm_password){
            $table = 'useradmin';
            $data = array("UA_password" => base64_encode($new_password));
            $condition = array('UA_email' => $email_id,'UA_status' => '1');
            $res=$this->Md_database->updateData($table, $data, $condition);
            if($res){
                $this->session->set_flashdata('success', 'Password has been changed successfully.');
                redirect(base_url() . 'admin');
            }else{
                $this->session->set_flashdata('error', 'Something goes wrong. Please try again.');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            $this->session->set_flashdata('error', 'New password and confirm password should be same.');
                redirect($_SERVER['HTTP_REFERER']);
        }
    }
    public function check_email() {
        $email_id = $this->input->get('email_id');
        $condition['UA_email'] = $email_id;
        $condition['UA_status'] = 1;
        $edi = $this->Md_database->getData('lottery_useradmin', 'UA_pkey', $condition);
        if (!empty($edi)) {
            echo 'true';
        } else {
            echo 'false';
        }
        die;
    }
     public function check_otp() {

        $email_id = $this->input->get('email_id');
        $otp = $this->input->get('otp');

        $condition['UA_email'] = $email_id;
        $condition['UA_otp'] = $otp;
        $condition['UA_status'] = 1;
        $edi = $this->Md_database->getData('useradmin', 'UA_pkey', $condition);
        if (!empty($edi)) {
            echo 'true';
        } else {
            echo 'false';
        }
        die;
    }
}
