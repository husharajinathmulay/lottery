<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_edit_sub_user extends MY_Controller
{

	public function index()
	{
		$this->adminBackend('admin/sub-users/edit_sub_user');
	}
}