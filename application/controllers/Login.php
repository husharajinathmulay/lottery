<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//(empty($this->session->userdata['UID'])) ? '' : redirect(base_url() . 'admin/dashboard');
		if (function_exists('date_default_timezone_set')) {
			date_default_timezone_set("Asia/Kolkata");

		}
		$this->current_date_time = date('Y-m-d H:i:s');
	}
	/**
	 * This is view login page index function
	 * no perameter are required
	 * 
	 *
	 * @param   no perameter
	 * @package   application/Controller/Login/index
	 */
	public function index()
	{
		(empty($this->session->userdata['UID'])) ? '' : redirect(base_url() . 'admin/dashboard');
		$this->load->view('admin/login');
	}



	
public function login_action() {
// $this->load->library("security");

        if (!empty($this->input->post())) {

            //Post Data
            $user_email = ($this->input->POST('txtUserName'));
            $user_pw = ($this->input->POST('txtPassword'));
            $this->form_validation->set_rules('txtUserName', 'User Name', 'required|trim');
            $this->form_validation->set_rules('txtPassword', 'Password', 'required|trim');
            if ($this->form_validation->run() === FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url() . 'login');
                exit();
            } else {
                
                
         
                $condition = array('UA_email' => $user_email, 'UA_password' => base64_encode($user_pw), 'UA_status <>' => '3');
               
                $condition = $this->security->xss_clean($condition);//xss_clean security

                $user_details = $this->Md_database->getData('useradmin', '*', $condition, '', '');

                if (!empty($user_details)) {
                    $user_details = $user_details[0];

                    if ($user_details['UA_status'] == '1') {
                        $this->session->set_userdata('UID', $user_details['UA_pkey']);
                        $this->session->set_userdata('UPD', $user_pw);
                        $this->session->set_userdata('UNAME', $user_details['UA_Name']);
                        $this->session->set_userdata('UMAIL', $user_details['UA_email']);
                        $this->session->set_userdata('UTYPE', $user_details['UA_userType']);
             $this->session->set_userdata('UADMINPD', $user_pw);
                        $uid='';
                        $uid= !empty($this->session->userdata['UID'])?$this->session->userdata['UID']:'';
                        
                     
                            if ($this->input->POST('remember') == "yes") {
                                    setcookie('cok_Email', $user_email, time() + (86400 * 30));
                                    setcookie('cok_Password', $user_pw, time() + (86400 * 30));
                                } else {
                                    setcookie('cok_Email', $user_email, time() - (86400 * 30));
                                    setcookie('cok_Password', $user_pw, time() - (86400 * 30));
                                }

                                $this->session->set_flashdata('success', 'You are logged in successfully.');
                                redirect(base_url() . 'admin/dashboard');
                        

                        
                    } else if ($user_details['UA_status'] == '2') {
                        $this->session->set_flashdata('error', 'User inactive. Please contact admin.');
                        redirect(base_url() . 'admin');
                    }
                } else {
                    //Email id or password not match:
                    /* @ Redirect */
                    $this->session->set_flashdata('error', 'Please enter valid credentials to login.');
                    redirect(base_url() . 'admin');
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Something goes wrong.');
            redirect(base_url() . 'admin');
        }
        redirect(base_url() . 'admin');
    }

    public function logout() {
        $this->session->unset_userdata('UID');
        $this->session->unset_userdata('UPD');
        $this->session->unset_userdata('UNAME');
        $this->session->unset_userdata('UMAIL');
        $this->session->unset_userdata('UTYPE');
        $this->session->set_flashdata('success', 'You are logged out successfully.');
        redirect(base_url() . 'admin');
    }






	public function check_password_valid()
	{
		$old_pass = $this->input->get('old_pass');
		$admin_id = $this->session->userdata('id');
		$result = $this->Md_database->getData(USERADMIN, '*', array('id' => $admin_id));

		if ($old_pass == $this->encryption->decrypt($result[0]['password'])) {
			echo "true";
		} else {
			echo "false";
		}
	}

	public function change_password()
	{
		$where = array('id' => $this->session->userdata('id'));
		$dataArr = array('password' => $this->encryption->encrypt($this->input->post('password')));
		$affected_rows = $this->Md_database->updateData(SCROLLUP_USERADMIN, $dataArr, $where);
		if ($affected_rows == 1) {
			$this->session->set_flashdata('success', 'password changed successfully');
			redirect($this->agent->referrer(), 'location', 301);
		} else {
			$this->session->set_flashdata('error', 'unable to change password. try again');
			redirect($this->agent->referrer(), 'location', 301);
		}
	}

	public function check_account_exits()
	{
		$email = $this->input->get('email');
		if (!empty($email)) {
			$result = $this->Md_database->getData(SCROLLUP_USERADMIN, '*', array('email' => $email, 'status' => '1'));
			if (!empty($result)) {
				echo "true";
			} else {
				echo "false";
			}
		}
	}

	
}
