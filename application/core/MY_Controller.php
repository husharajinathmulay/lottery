<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		header('Cache-Control: no-store,no-cache,must-revalidate');
		header('Cache-Control: post-check=0,pre-check=0', false);
		header('Pragma:no-cache');
		$this->current_date_time = date('Y-m-d H:i:s');
	}

	public function adminBackend($common, $data = array(), $return = FALSE)
	{
		// (!empty($this->session->userdata('UADMINID'))) ? '' : redirect('admin');
		if ($return) :
			#$data['priviliges'] = $this->Md_database->getPriviliges();			
			$this->load->view('admin/includes/head-files');
			$this->load->view('admin/includes/navbar');
			$this->load->view('admin/includes/sidebar', $data);
			$this->load->view($common, $data);
			$this->load->view('admin/includes/footer');
			$this->load->view('admin/includes/js-files');

		else :
			#$data['priviliges'] = $this->Md_database->getPriviliges();
			$this->load->view('admin/includes/head-files');
			$this->load->view('admin/includes/navbar');
			$this->load->view('admin/includes/sidebar', $data);
			$this->load->view($common);
			$this->load->view('admin/includes/footer');
			$this->load->view('admin/includes/js-files');

		endif;
	}
public function frontEnd($common, $data = array(), $return = FALSE) {
		if ($return):
			
			$this->load->view($common, $data);
		
		else:
			
			$this->load->view($common);
			
		endif;
	}


	public function system_log($table, $log_type, $log_data, $id)
	{
		$user_id = $this->session->userdata('UADMINID');
		$user = '';
		if ($this->session->userdata('UADMINTYPE') == 'super_admin') {
			$user = 1;
		}

		$log_array = array_merge($id, $log_data);
		$logs_data = json_encode($log_array, JSON_FORCE_OBJECT);
		$data = array(
			'user_type' => $user,
			'models_name' => $table,
			'log_type' => $log_type,
			'log_data' => $logs_data,
			'logged_in_user_id' => $user_id
		);
		$this->Md_database->insertData('lottery_system_log', $data);
	}
}
