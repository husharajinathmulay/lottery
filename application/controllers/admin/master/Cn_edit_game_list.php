<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_edit_game_list extends MY_Controller
{
    public function index()
    {

        $this->adminBackend('admin/master/edit_game_list');
    }
}