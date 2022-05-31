<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_game_result extends MY_Controller
{

	public function index()
	{
		$data = array();
		$data['game_data'] = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('status'=>'1'),array('pk_id ','DESC'));
		$test_id = !empty($this->input->post('userid')) ? $this->input->post('userid') : '';
         
         if(!empty($test_id)){
            $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('pk_id '=>$test_id));
            $data['test_id'] =$test_id;
            $data['single_test_data'] = !empty($single_test_data) ? $single_test_data[0] : array();
        }
          $from_date = !empty($this->input->post('from_date')) ? trim($this->input->post('from_date')) : '';
           $to_date = !empty($this->input->post('to_date')) ? trim($this->input->post('to_date')) : '';
           $game_name = !empty($this->input->post('game_name')) ? trim($this->input->post('game_name')) : '';
           	//echo $fromdate;die();
           if (!empty($from_date)) {

        $this->db->where('date(c.created_date)>=', date('Y-m-d 00:00:00', strtotime($from_date)));
    }
    if (!empty($to_date)) {
        $this->db->where('date(c.created_date)<=', date('Y-m-d 00:00:00', strtotime($to_date)));
       //  $this->db->where('c'.'.created_date >=',date('Y-m-d 00:00:01',strtotime($fromdate)));
          //  $this->db->where('c'.'.created_date <=',date('Y-m-d 23:59:59',strtotime($fromdate)));
        // $this->db->or_where("DATE_FORMAT(created_date,'%d-%m-%Y') LIKE '%$search_term%'");
    }
     if (!empty($game_name)) {
        $this->db->where('game_id',$game_name);
    }

        $this->db->select('c.game_id,c.pk_id,c.game_time,c.open_time_result,c.close_time_result,c.open_time_result_two,c.close_time_result_two,c.status,c.created_date,c.added_on,b.game_name,b.open_time,b.close_time,b.text_color,b.result_color,b.back_color,b.status');
            $this->db->from('lottery_game_result as c');
            $this->db->join('lottery_game' .' b','b.pk_id=c.game_id');
            $this->db->where(array('c.status<>'=>'3')); 
           $this->db->order_by('c.pk_id','desc');
            $res = $this->db->get();
             $data['tests_data'] = $res->result_array();

		$this->adminBackend('admin/game_result',$data,true);
	}
	function game_change()
{
 error_reporting(0);
 $game_name=$this->input->post('game_name');
 $single_game_data = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('pk_id'=>$game_name),'');
  $data['open']= $single_game_data[0]['open_time'];
 $data['close']= $single_game_data[0]['close_time'];
echo json_encode($data);

}
	function game_results()
{
 error_reporting(0);
 $userid=$this->input->post('userid');
 $single_game_data = $this->Md_database->getData('lottery_game_result','*',array('pk_id'=>$userid),'');
   $game_id= $single_game_data[0]['game_id'];
    $single_games_dataes = $this->Md_database->getData('lottery_game','*',array('pk_id'=>$game_id),'');

$data['open']= $single_games_dataes[0]['open_time'];
 $data['close']= $single_games_dataes[0]['close_time'];
 $single_games_data = $this->Md_database->getData('lottery_game','*',array('status'=>'1'),'');

foreach ($single_games_data as $key => $value) { 
    $val="";

   $a=$value['game_name'];
   $b=$value['pk_id'];
    if ($game_id==$value['pk_id']) {

       $val="selected";

     } 
   //$data['game_id']= "<option value='$b' $val>$a</option>";
 }
 $data['game_id']=$game_id;
 $data['test_id']= $userid;
 $data['open_time_result']= $single_game_data[0]['open_time_result'];
  $data['close_time_result']= $single_game_data[0]['close_time_result'];
 $data['open_time_result_two']= $single_game_data[0]['open_time_result_two'];
 $data['close_time_result_two']= $single_game_data[0]['close_time_result_two'];
 $data['game_time']= $single_game_data[0]['game_time'];
echo json_encode($data);

}

  /*[START:: Add or Update film::]*/
    public function game_result_actions()
    {   
         $redirect_url=strtok($_SERVER['HTTP_REFERER'],'?'); //remove parameter after question mark in HTTP_REFERER
        // $pageNo = !empty($this->input->post('pageNo')) ? $this->input->post('pageNo') : '';
        $test_id = !empty($this->input->post('test_id')) ? $this->input->post('test_id') : '';
      $game_id = !empty($this->input->post('game_name')) ? $this->input->post('game_name') : '';
        $flexRadioDefault = !empty($this->input->post('flexRadioDefault')) ? $this->input->post('flexRadioDefault') : '';
        $open_time_result = !empty($this->input->post('open_time_result')) ? $this->input->post('open_time_result') : '';
         $open_time_result_two = !empty($this->input->post('open_time_result_two')) ? $this->input->post('open_time_result_two') : '0';
         
         $close_time_result = !empty($this->input->post('close_time_result')) ? $this->input->post('close_time_result') : '';
          if(!empty($close_time_result)){
        $close_time_result_two = !empty($this->input->post('close_time_result_two')) ? $this->input->post('close_time_result_two') : '0';
             } 
        $this->form_validation->set_rules('game_name', 'game name', 'trim|required');
        $this->form_validation->set_rules('open_time_result', 'Open', 'trim|required');
       // $this->form_validation->set_rules('close_time_result_two', 'Close', 'trim|required');
        $this->form_validation->set_rules('open_time_result_two', 'Open', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            if(!empty($test_id)){
                $update_data =array(
                            'game_id' => $game_id,
                            'game_time' => $flexRadioDefault,
                             'open_time_result' => $open_time_result,
                             'close_time_result_two' => $close_time_result_two,
                             'open_time_result_two' => $open_time_result_two,
                             'close_time_result' => $close_time_result,
                            'updated_by' => $this->session->userdata('UID'),
                            'updated_at' => date('Y-m-d H:i:s'),
                            'updated_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
               
                        $result = $this->Md_database->updateData('lottery_game_result',$update_data,array('pk_id '=>$test_id));
                        $this->system_log('lottery_game_result', 'update', $update_data, array('id' => $result));
                        $actionMsg = 'updated';
            }else{
                
                $data = array('game_result_status' => '1');
                  $condition = array("pk_id" => $game_id);
$ret = $this->Md_database->updateData('lottery_game', $data, $condition);
                            $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_id),array('pk_id ','DESC'));
                           $test_ids= $single_test_data[0]['pk_id'];
                           $date= $single_test_data[0]['created_date'];
                          $stnDate = date("Y-m-d",strtotime($date));
                          $current_date= date('Y-m-d');
                          if($stnDate==$current_date){
                 $this->session->set_flashdata('success', "Game Result already exist.");
                 redirect(base_url('admin/game_result'));
                          }else{
                           $update_data =array(
                            'game_status' => '1',
                            );
                           $result = $this->Md_database->updateData('lottery_game_result',$update_data,array('pk_id '=>$test_ids));
                        $insert_data =array(
                            'game_id' => $game_id,
                            'game_time' => $flexRadioDefault,
                            'open_time_result' => $open_time_result,
                             // 'close_time_result_two' => $close_time_result_two,
                            'open_time_result_two' => $open_time_result_two,
                            // 'close_time_result' => $close_time_result,
                            'created_by' => $this->session->userdata('UID'),
                            'created_date' => date('Y-m-d H:i:s'),
                            'created_ip_address' => $_SERVER['REMOTE_ADDR'],
                        );
                    //    print_r($insert_data);die();
                $result = $this->Md_database->insertData('lottery_game_result',$insert_data);
                 $this->system_log('lottery_game_result', 'insert', $insert_data, array('id' => $result));
                $actionMsg = 'added';
            }
            }


            if (!empty($result)) {
                $this->session->set_flashdata('success', "Game Result $actionMsg successfully.");
                 redirect(base_url('admin/game_result'));         
               
            } else {
                $this->session->set_flashdata('error', "$actionMsg failed, please try again.");
               redirect(base_url('admin/game_result'));
            }
        }
    }
    /*[END:: Add or Update film::]*/
public function check_unique(){
        error_reporting(0);
            $game_name= trim($this->input->get('game_name'));
            $test_id= $this->input->get('test_id');
              $this->db->limit('1');
             $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_name),array('pk_id ','DESC'));
                           $test_ids= $single_test_data[0]['pk_id'];
                           $date= $single_test_data[0]['created_date'];
                          $stnDate = date("Y-m-d",strtotime($date));
                          $current_date= date('Y-m-d');

            if(!empty($test_id) || empty($single_test_data)){
                echo "true";
            }else{
                // $this->db->where('game_id', $game_name);
                // $this->db->where('status!=', 3);
                // $query = $this->db->get('lottery_game_result');
                // $res=$query->result_array();
                if ($stnDate==$current_date) {
                  
                        echo "false";
                    } else {
                        echo "true";
                    }
                }
        }
}