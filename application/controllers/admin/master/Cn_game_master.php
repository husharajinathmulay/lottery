<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cn_game_master extends MY_Controller
{
    public function index()
    {
    	 $test_id = !empty($this->input->get('test_id')) ? $this->input->get('test_id') : '';
         $data = array();
         if(!empty($test_id)){
            $single_test_data = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('pk_id '=>$test_id));
            $data['test_id'] =$test_id;
            $data['single_test_data'] = !empty($single_test_data) ? $single_test_data[0] : array();
        }
$data['tests_data'] = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('status<>'=>'3'),array('pk_id ','DESC'));
        $this->adminBackend('admin/master/game_master',$data);
    }

       /*[START:: Add or Update film::]*/
    public function game_action()
    {   
   
         $redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
        // $pageNo = !empty($this->input->post('pageNo')) ? $this->input->post('pageNo') : '';
        $test_id = !empty($this->input->post('test_id')) ? $this->input->post('test_id') : '';
        $game_name = !empty($this->input->post('game_name')) ? $this->input->post('game_name') : '';
        $open_time = !empty($this->input->post('open_time')) ? $this->input->post('open_time') : '';
        $close_time = !empty($this->input->post('close_time')) ? $this->input->post('close_time') : '';
         $text_color = !empty($this->input->post('text_color')) ? $this->input->post('text_color') : '';
        $result_color = !empty($this->input->post('result_color')) ? $this->input->post('result_color') : '';
         $back_color = !empty($this->input->post('back_color')) ? $this->input->post('back_color') : '';
        $this->form_validation->set_rules('game_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('open_time', 'Text', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if(!empty($test_id)){
                $update_data =array(
                            'game_name' => $game_name,
                            'open_time' => $open_time,
                             'close_time' => $close_time,
                             'text_color' => $text_color,
                             'result_color' => $result_color,
                             'back_color' => $back_color,
                            'updated_by' => $this->session->userdata('UID'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
                        $result = $this->Md_database->updateData('lottery_game',$update_data,array('pk_id '=>$test_id));
                        $this->system_log('lottery_game', 'update', $update_data, array('id' => $result));
                        $actionMsg = 'updated';
            }else{
                        $insert_data =array(
                            'game_name' => $game_name,
                            'open_time' => $open_time,
                            'close_time' => $close_time,
                            'text_color' => $text_color,
                            'result_color' => $result_color,
                            'back_color' => $back_color,
                            'created_by' => $this->session->userdata('UID'),
                            'created_date' => date('Y-m-d H:i:s'),
                            'created_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
                      //  print_r($insert_data);die();
                  $result =  $this->Md_database->insertData('lottery_game',$insert_data);
               // $insert_id = $this->db->insert_id(); 
                 $this->system_log('lottery_game', 'insert', $insert_data, array('id' => $result));
                 
                //   $insert_datas =array(
                //             'game_id' => $insert_id,
                //             'game_time' => 'Open',
                //             'created_by' => $this->session->userdata('UID'),
                //             'created_date' => date('Y-m-d H:i:s'),
                //             'created_ip_address' => $_SERVER['REMOTE_ADDR'],
                //         );
                // $result = $this->Md_database->insertData('lottery_game_result',$insert_datas);
                //  $this->system_log('lottery_game_result', 'insert', $insert_datas, array('id' => $result));
                $actionMsg = 'added';
            }


            if (!empty($result)) {
                $this->session->set_flashdata('success', "Game $actionMsg successfully.");
                 redirect(base_url('admin/master/game_master'));         
               
            } else {
                $this->session->set_flashdata('error', "$actionMsg failed, please try again.");
               redirect(base_url('admin/master/game_master'));
            }
        }
    }
    /*[END:: Add or Update film::]*/
     /*[START:: Make film status active or inactive::]*/
public function change_game_status($id,$status) {
$redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
$data = array('status' => $status);
$condition = array("pk_id" => $id);
$ret = $this->Md_database->updateData('lottery_game', $data, $condition);
$this->system_log('lottery_game','status',$data,array('id' => $ret));
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
$data = array('status' => '3');
$condition = array("pk_id" => $user_id);
$ret = $this->Md_database->updateData('lottery_game', $data, $condition);
$this->system_log('lottery_game','delete',$data,array('id' => $ret));
if (!empty($ret)) {
$this->session->set_flashdata('success', "Game deleted successfully.");

redirect(base_url('admin/master/game_master'));

} else {
$this->session->set_flashdata('error', "film delete action failed, please try again.");
redirect(base_url('admin/master/game_master'));

}
}
public function check_unique(){
        
            $game_name= trim($this->input->get('game_name'));
            $test_id= $this->input->get('test_id');
            
            if(!empty($test_id)){
                
                $this->db->where('pk_id!=', $test_id);
                $this->db->where('game_name', $game_name);
                $this->db->where('status!=', 3);
                $query = $this->db->get('lottery_game');
                $res=$query->result_array();
                if (!empty($res)) {
                        echo "false";
                    } else {
                        echo "true";
                    }
            }else{
                $this->db->where('game_name', $game_name);
                $this->db->where('status!=', 3);
                $query = $this->db->get('lottery_game');
                $res=$query->result_array();
                if (!empty($res)) {
                        echo "false";
                    } else {
                        echo "true";
                    }
                }
        }
/*[START:: Delete film::]*/
}