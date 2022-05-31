<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_dashboard extends MY_Controller
{

	public function index()
	{
		(empty($this->session->userdata['UID'])) ? '' : redirect(base_url() . 'admin/dashboard');
		$this->adminBackend('admin/dashboard');
	}
}