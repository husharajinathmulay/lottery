<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cn_default extends MY_Controller {
public function index()
{
$data=array();
$data['lottery'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'1'),'');
$data['about_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'2'),'');
$data['faq'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'3'),'');
$data['contact_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'4'),'');

$yesterday = date('Y-m-d',strtotime("-1 days"));
  $this->db->select('gr.game_id,gr.pk_id,gr.game_time,gr.open_time_result,gr.close_time_result,gr.open_time_result_two,gr.close_time_result_two,gr.status,gr.created_date,gr.added_on,gm.game_name,gm.open_time,gm.close_time,gm.text_color,gm.result_color,gm.back_color,gm.status');
            $this->db->from('lottery_game_result as gr');
            $this->db->join('lottery_game' .' gm','gm.pk_id=gr.game_id','inner');
            $this->db->order_by('gr.pk_id','desc');
           // $this->db->group_by('gr.game_id');
            $this->db->where(array('gr.status'=>'1','gr.game_status'=>'0')); 
            // $this->db->where(array('gr.status'=>'1','gr.game_status'=>'0','gr.added_on >=' => $yesterday)); 
            $res = $this->db->get();
            $data['live_satta'] = $res->result_array();

           $data['live_sattas'] = $this->Md_database->getData('lottery_game','pk_id,game_name,open_time,close_time,text_color,result_color,back_color,created_date,status',array('status'=>'1','game_result_status'=>'0'),array('pk_id ','DESC'));

$this->frontEnd('front/index',$data,true);
}
public function jodi_chart($slug=NULL)
{
    error_reporting(0);
$from_date = !empty($this->input->post('from_date')) ? trim($this->input->post('from_date')) : '';
		$sluge= str_replace("-"," ",$slug);
$data=array();
$data['lottery'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'1'),'');
$data['about_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'2'),'');
$data['faq'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'3'),'');
$data['contact_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'4'),'');
  $this->db->select('c.game_id,c.pk_id,c.game_time,c.open_time_result,c.close_time_result,c.open_time_result_two,c.close_time_result_two,c.status,c.created_date,c.added_on,b.game_name,b.open_time,b.close_time,b.text_color,b.result_color,b.back_color,b.status');
            $this->db->from('lottery_game_result as c');
            $this->db->join('lottery_game' .' b','b.pk_id=c.game_id');
            $this->db->where(array('b.game_name'=>$sluge)); 
          $res = $this->db->get();
         $data['live_satta'] = $res->result_array();
        $id= $data['live_satta'][0]['game_id'];
if(!empty($from_date)){
               $date = new DateTime($from_date);
               $week = $date->format("W");
               	$currentWeek=$week;
            }else{
        	$currentWeek=date('W');
            }
            
            if(!empty($from_date)){
                $stnDate = date("Y",strtotime($from_date));
               	$currentWeekYear=$stnDate;
            }else{
        	$currentWeekYear=date('Y');
            }
		$fifthweekData=$this->getStartAndEndDate($currentWeek,$currentWeekYear);
		$fifthWeekStartDate=$fifthweekData['week_start_date'];
		$fifthWeekEndDate=$fifthweekData['week_end_date'];
		
		$fourthweekData=$this->getStartAndEndDate($currentWeek-1,$currentWeekYear);
		$fourthWeekStartDate=$fourthweekData['week_start_date'];
		$fourthWeekEndDate=$fourthweekData['week_end_date'];
		
		$thirdweekData=$this->getStartAndEndDate($currentWeek-2,$currentWeekYear);
		$thirdWeekStartDate=$thirdweekData['week_start_date'];
		$thirdWeekEndDate=$thirdweekData['week_end_date'];
		
		$secondweekData=$this->getStartAndEndDate($currentWeek-3,$currentWeekYear);
		$secondWeekStartDate=$secondweekData['week_start_date'];
		$secondWeekEndDate=$secondweekData['week_end_date'];
		
		$firstweekData=$this->getStartAndEndDate($currentWeek-4,$currentWeekYear);
		$firstWeekStartDate=$firstweekData['week_start_date'];
		$firstWeekEndDate=$firstweekData['week_end_date'];
		$data['firstWeek']=$this->getData($firstWeekStartDate,$firstWeekEndDate,$id); 
		$data['firstWeek'][0]=array($firstWeekStartDate,$firstWeekEndDate);
		$data['secondWeek']=$this->getData($secondWeekStartDate,$secondWeekEndDate,$id);
		$data['secondWeek'][0]=array($secondWeekStartDate,$secondWeekEndDate);
		$data['thirdWeek']=$this->getData($thirdWeekStartDate,$thirdWeekEndDate,$id);
		$data['thirdWeek'][0]=array($thirdWeekStartDate,$thirdWeekEndDate);
		$data['fourthWeek']=$this->getData($fourthWeekStartDate,$fourthWeekEndDate,$id);
		$data['fourthWeek'][0]=array($fourthWeekStartDate,$fourthWeekEndDate);
		$data['fifthWeek']=$this->getData($fifthWeekStartDate,$fifthWeekEndDate,$id);
		$data['fifthWeek'][0]=array($fifthWeekStartDate,$fifthWeekEndDate);
        	$data['slug']=$slug;
        	$data['from_date']=$from_date;
$this->frontEnd('front/jodi_chart',$data,true);
}
	public function panel_chart($slug=NULL)
	{
	       $from_date = !empty($this->input->post('from_date')) ? trim($this->input->post('from_date')) : '';
	       	$data['from_date']=$from_date;
			$sluge= str_replace("-"," ",$slug);
			$data['slug']=$slug;
 $this->db->select('c.game_id,c.pk_id,c.game_time,c.open_time_result,c.close_time_result,c.open_time_result_two,c.close_time_result_two,c.status,c.created_date,c.added_on,b.game_name,b.open_time,b.close_time,b.text_color,b.result_color,b.back_color,b.status');
            $this->db->from('lottery_game_result as c');
            $this->db->join('lottery_game' .' b','b.pk_id=c.game_id');
            $this->db->where(array('b.game_name'=>$sluge)); 
          $res = $this->db->get();
         $data['live_satta'] = $res->result_array();
        // print_r($data['live_satta']);
         $id= $data['live_satta'][0]['game_id'];

           if(!empty($from_date)){
               $date = new DateTime($from_date);
               $week = $date->format("W");
               	$currentWeek=$week;
            }else{
        	$currentWeek=date('W');
            }
            
            if(!empty($from_date)){
                $stnDate = date("Y",strtotime($from_date));
               	$currentWeekYear=$stnDate;
            }else{
        	$currentWeekYear=date('Y');
            }
           // $currentWeekYear=date('Y');
	 
		$fifthweekData=$this->getStartAndEndDate($currentWeek,$currentWeekYear);
		$fifthWeekStartDate=$fifthweekData['week_start_date'];
		$fifthWeekEndDate=$fifthweekData['week_end_date'];
		
		$fourthweekData=$this->getStartAndEndDate($currentWeek-1,$currentWeekYear);
		$fourthWeekStartDate=$fourthweekData['week_start_date'];
		$fourthWeekEndDate=$fourthweekData['week_end_date'];
		
		$thirdweekData=$this->getStartAndEndDate($currentWeek-2,$currentWeekYear);
		$thirdWeekStartDate=$thirdweekData['week_start_date'];
		$thirdWeekEndDate=$thirdweekData['week_end_date'];
		
		$secondweekData=$this->getStartAndEndDate($currentWeek-3,$currentWeekYear);
		$secondWeekStartDate=$secondweekData['week_start_date'];
		$secondWeekEndDate=$secondweekData['week_end_date'];
		
		$firstweekData=$this->getStartAndEndDate($currentWeek-4,$currentWeekYear);
		$firstWeekStartDate=$firstweekData['week_start_date'];
		$firstWeekEndDate=$firstweekData['week_end_date'];
		$data['firstWeek']=$this->getData($firstWeekStartDate,$firstWeekEndDate,$id); 
		$data['firstWeek'][0]=array($firstWeekStartDate,$firstWeekEndDate);
		$data['secondWeek']=$this->getData($secondWeekStartDate,$secondWeekEndDate,$id);
		$data['secondWeek'][0]=array($secondWeekStartDate,$secondWeekEndDate);
		$data['thirdWeek']=$this->getData($thirdWeekStartDate,$thirdWeekEndDate,$id);
		$data['thirdWeek'][0]=array($thirdWeekStartDate,$thirdWeekEndDate);
		$data['fourthWeek']=$this->getData($fourthWeekStartDate,$fourthWeekEndDate,$id);
		$data['fourthWeek'][0]=array($fourthWeekStartDate,$fourthWeekEndDate);
		$data['fifthWeek']=$this->getData($fifthWeekStartDate,$fifthWeekEndDate,$id);
		$data['fifthWeek'][0]=array($fifthWeekStartDate,$fifthWeekEndDate);
		//echo "<pre/>";  print_r($data); die;
	//	$this->load->view('panel_chart',$data); 

$data['lottery'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'1'),'');
$data['about_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'2'),'');
$data['faq'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'3'),'');
$data['contact_us'] = $this->Md_database->getData('lottery_cms','cms_title,cms_pkey,cms_text,status',array('cms_pkey'=>'4'),'');
 
		$this->frontEnd('front/panel_chart',$data,true);

		//$this->load->view('staff-area/login');
	}

function getStartAndEndDate($week, $year) {
	  $dto = new DateTime();
	  $dto->setISODate($year, $week);
	  $ret['week_start_date'] = $dto->format('Y-m-d');
	  $dto->modify('+6 days');
	  $ret['week_end_date'] = $dto->format('Y-m-d');
	  return $ret;
	}
	
	public function getData($weekstaetdate,$weekendate,$game_id=NULL)
	{   
		$data=array();
	    $allDates=$this->getDatesFromRange($weekstaetdate,$weekendate);
		foreach($allDates as $date):
		$this->db->select('pk_id,open_time_result,close_time_result,open_time_result_two,close_time_result_two');
		$this->db->from('lottery_game_result');
		$this->db->where('added_on >=', date('Y-m-d 00:00:00',strtotime($date)));
		$this->db->where('added_on <=', date('Y-m-d 23:59:59',strtotime($date)));
		$this->db->where('game_id',$game_id);
		$data[$date]=$this->db->get()->result_array();
		endforeach;
		return $data;
	}
	
	function getDatesFromRange($start, $end, $format = 'Y-m-d') 
	{
		// Declare an empty array
		$array = array();
		  
		// Variable that store the date interval
		// of period 1 day
		$interval = new DateInterval('P1D');
	  
		$realEnd = new DateTime($end);
		$realEnd->add($interval);
	  
		$period = new DatePeriod(new DateTime($start), $interval, $realEnd);
	  
		// Use loop to store date into array
		foreach($period as $date) {                 
			$array[] = $date->format($format); 
		}
	  
		// Return the array elements
		return $array;
	}
	 
}