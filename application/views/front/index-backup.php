<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    name="viewport"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
      />
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/front/assets/css/style.css" />
      <title>Lottery</title>
    </head>
    <body>
      <div class="bg-purple py-1 bot">
        <h1 class="text-center text-warning heading">Lottery</h1>
        <p class="text-1">
          <?php echo!empty($lottery[0]['cms_text']) ? $lottery[0]['cms_text'] : ""; ?>
          <!--   Get Fastest Satta Matka Results, Sure Satta Batta, Kalyan Madhur Bazar,
          Madhur Matka Tips. -->
        </p>
      </div>
      <div class="bg-purple py-2 text-center bot">
        <?php echo!empty($about_us[0]['cms_text']) ? $about_us[0]['cms_text'] : ""; ?>
        <p class="para-1">
          <!-- Satta Matka No1 The Most Popular Lottery Website. <br />
          Get Latest Updates, Satta Matka Results, Kalyan Matka Tips Today At
          SattaMatkaNo1.Net. <br />
          Get Free Madhur Satta Matka Tips, मधुर मटका, Madhur Matka Result, Kalyan
          Matka Tips, Madhur Bazar Tips, Satta Batta From Our Experts. <br />
          Join Satta Matka Guessing Forum Where You Can Discuss For Quick
          Earnings. <br />
          The Best Opportunity For The People To Get Engaged In Madhur Day Bazar.
          <br />
          We Are The Ones Who Can Help You Earn The Best By Playing Game Online.
          <br />
          SattaMatkaNo1 Is The Globally Renowned Website For Kalyan Chart, Kalyan
          Matka Result, Satta Market, Madhur Chart , Madhur Satta Results, Satta
          Matta Matka, 143 Tricks. <br />
          All Market Live Results Are Available With Us And We Provide You Online
          Madhur Day, Madhur Matka Results. <br />
          SattaMatkaNo1.Net Request You To Contact Us For Live Updates And Experts
          Helps You With The Tips, Tricks For The Quickest Earnings. <br />
          We Are Here To Share Those Secrets To Get You Closer To Victory. <br />
          Visit Our Website And Get The Best Profits Daily And Become A Satta
          King. -->
        </p>
      </div>
      <?php if (!empty($live_satta)) { ?>
      <!-- LIVE UPDATES -->
      <div class="bg-danger py-2">
        <h2>&#10051; Fastest Live Updates &#10051;</h2>
      </div>
      <?php if (!empty($live_satta)) {
      foreach ($live_satta as $key => $value) {
      $curr =  !empty($value['open_time']) ? ucwords($value['open_time']) :'-';
      $closet =  !empty($value['close_time']) ? ucwords($value['close_time']) :'-';
      $last_min = date('H:i A');
      $startDate = date("H:i A",strtotime($curr." -5 minutes"));
      $enddate = date("H:i A",strtotime($curr." +5 minutes"));
      $closet =  !empty($value['close_time']) ? ucwords($value['close_time']) :'-';
      $closestartDate = date("H:i A",strtotime($closet." -5 minutes"));
      $closeenddate = date("H:i A",strtotime($closet." +5 minutes"));
      $opendates = date("H:i A",strtotime($curr));
      $closedates = date("H:i A",strtotime($closet));
      $date=$value['created_date'];
      $stnDate = date("Y-m-d",strtotime($date));
     //  $enDate=date('Y-m-d');
     //  $game_date =  !empty($value['game_date']) ? ucwords($value['game_date']) :'';
     //   $gamedate = date("Y-m-d",strtotime($game_date));
     //   if($gamedate==$enDate){
     //     $last = date('h:i');
     //    $starts = date("h:i",strtotime($game_date));
     // $diff = abs($last - $starts); 
     //   }
      if($startDate <= $last_min && $enddate > $last_min || $closestartDate <= $last_min && $closeenddate > $last_min ){
      ?>
      <div class="py-2 text-center bot-red">
        <h4 class="blue-col"><?php echo !empty($value['game_name']) ? ucwords($value['game_name']) :'-';?></h4>
        <?php
        $current_date= date('Y-m-d');
        $startDates = date("Y-m-d",strtotime($date));
        if($startDates==$current_date){
        //if($opendates<= $last_min || $closedates<= $last_min){
        if (!empty($value['open_time_result'])) {
        ?>
        <h4>
        <?php if($opendates <= $last_min){ ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result'] :'';?><?php if(!empty($value['open_time_result'])){ ?>-<?php } ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result_two'] :'';?><?php } else{?><h4>Loading...</h4><?php } ?>
        <?php if($closedates <= $last_min){ ?>
        <?php echo !empty($value['close_time_result']) ? $value['close_time_result_two'] :'';?><?php if(!empty($value['close_time_result'])){ ?>-<?php } ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result'] :''; }?></h4>
        <?php
        }else{
        ?>
        <h4>Loading...</h4>
        
        <?php } } else{
        ?>
        <h4>Loading...</h4>
        <?php
        }
        ?>
        
        <button onClick="window.location.reload();" type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div>
      <?php
      
      }
      }
      }
      }?>
      <!--  <div class="py-2 text-center bot-red">
        <h4 class="blue-col">WARLI DAY</h4>
        <h4>330-68-189</h4>
        <button type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div> -->
      <!--  <div class="py-2 text-center bot-red">
        <h4 class="blue-col">DECCAN DAY</h4>
        <h4>188-7</h4>
        <button type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div>
      <div class="py-2 text-center bot-red">
        <h4 class="blue-col">GM DAY</h4>
        <h4>120-35-122</h4>
        <button type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div>  -->
      <!-- 2 -->
      <?php if (!empty($live_satta)) { ?>
      <div class="bg-purple py-2">
        <h2>Live Satta Matka Results</h2>
      </div>
      <!--
      <div class="py-2 text-center">
        <h4 class="red-col">KALYAN DAY</h4>
        <h4>120-35-122</h4>
      </div>
      <div class="box" id="chart-btn">
        <div class="box-1">
          <a href="panel_chart.html">
            <button class="btn btn-warning font-weight-bold">PANEL CHART</button>
          </a>
        </div>
        <div class="box-2">
          <a href="jodi_chart.html">
            <button class="btn btn-warning font-weight-bold">JODI CHART</button>
          </a>
        </div>
      </div>
      <div class="pb-2 text-center bot-red">
        <h6 class="time-left">11:00AM</h6>
        <h6 class="time-right">11:00AM</h6>
        <button type="submit" class="btn btn-secondary">Refresh</button>
      </div>
      <div class="py-2 text-center">
        <h4 class="red-col">TIME BAZAR</h4>
        <h4>120-35-122</h4>
      </div>
      <div class="box" id="chart-btn">
        <div class="box-1">
          <a href="panel_chart.html">
            <button class="btn btn-warning font-weight-bold">PANEL CHART</button>
          </a>
        </div>
        <div class="box-2">
          <a href="jodi_chart.html">
            <button class="btn btn-warning font-weight-bold">JODI CHART</button>
          </a>
        </div>
      </div>
      <div class="pb-2 text-center bot-red">
        <h6 class="time-left">11:00AM</h6>
        <h6 class="time-right">11:00AM</h6>
        <button type="submit" class="btn btn-secondary">Refresh</button>
      </div>
      <div class="py-2 text-center">
        <h4 class="red-col">MADHUR DAY</h4>
        <h4>120-35-122</h4>
      </div>
      <div class="box" id="chart-btn">
        <div class="box-1">
          <a href="panel_chart.html">
            <button class="btn btn-warning font-weight-bold">PANEL CHART</button>
          </a>
        </div>
        <div class="box-2">
          <a href="jodi_chart.html">
            <button class="btn btn-warning font-weight-bold">JODI CHART</button>
          </a>
        </div>
      </div>
      <div class="pb-2 text-center bot-red">
        <h6 class="time-left">11:00AM</h6>
        <h6 class="time-right">11:00AM</h6>
        <button type="submit" class="btn btn-secondary">Refresh</button>
      </div> -->
      <?php if (!empty($live_satta)) {
      foreach ($live_satta as $key => $value) {
      $date=$value['created_date'];
      $game_id=$value['game_id'];
      
      $stnDate = date("Y-m-d",strtotime($date));
      $enDate=   date('Y-m-d',strtotime("-1 days"));
      $curr =  !empty($value['open_time']) ? ucwords($value['open_time']) :'-';
      $last_min = date('H:i A');
      $startDate = date("H:i A",strtotime($curr." -5 minutes"));
      $enddate = date("H:i A",strtotime($curr." +5 minutes"));
      $current_date= date('Y-m-d');
      $startDatese = date("Y-m-d",strtotime($date));
      $closet =  !empty($value['close_time']) ? ucwords($value['close_time']) :'-';
      $closestartDate = date("H:i A",strtotime($closet." -5 minutes"));
      $closeenddate = date("H:i A",strtotime($closet." +5 minutes"));
      $closedates = date("H:i A",strtotime($closet));
      if($startDate <= $last_min && $enddate > $last_min || $closestartDate <= $last_min && $closeenddate > $last_min){
      }else{
      ?>
      <?php
      $current_date= date('Y-m-d');
      $startDates = date("Y-m-d",strtotime($date));
      $opendates = date("H:i A",strtotime($curr));
      // if($startDates==$current_date){
      ?>
      <div  style="background-color: <?php echo !empty($value['back_color']) ? ucwords($value['back_color']) :'-';?>">
        <div class="py-2">
          <h4 style="color: <?php echo !empty($value['text_color']) ? ucwords($value['text_color']) :'-';?>"><?php echo !empty($value['game_name']) ? ucwords($value['game_name']) :'-';?></h4>
          <?php if($startDates==$current_date){ ?>
          <?php if($opendates > $last_min){
          $this->db->limit('1');
          $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_id,'game_status '=>'1'),array('pk_id ','DESC'));
          // print_r($single_test_data);
          ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>">
          <?php echo !empty($single_test_data[0]['open_time_result']) ? $single_test_data[0]['open_time_result'] :'';?><?php if(!empty($single_test_data[0]['open_time_result'])){ ?>-<?php } ?><?php echo !empty($single_test_data[0]['open_time_result']) ? $single_test_data[0]['open_time_result_two'] :'';?><?php echo !empty($single_test_data[0]['close_time_result']) ? $single_test_data[0]['close_time_result_two'] :'';?><?php if(!empty($single_test_data[0]['close_time_result'])){ ?>-<?php } ?><?php echo !empty($single_test_data[0]['close_time_result']) ? $single_test_data[0]['close_time_result'] :'';?></h4>
          <?php
          }else{
          ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>"><?php echo !empty($value['open_time_result']) ? $value['open_time_result'] :'';?><?php if(!empty($value['open_time_result'])){ ?>-<?php } ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result_two'] :'';?><?php if($closedates<= $last_min){ ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result_two'] :'';?><?php if(!empty($value['close_time_result'])){ ?>-<?php } ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result'] :'';}?></h4><?php } }else{ ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>">
          <?php echo !empty($value['open_time_result']) ? $value['open_time_result'] :'';?><?php if(!empty($value['open_time_result'])){ ?>-<?php } ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result_two'] :'';?><?php echo !empty($value['close_time_result']) ? $value['close_time_result_two'] :'';?><?php if(!empty($value['close_time_result'])){ ?>-<?php } ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result'] :'';?></h4><?php
          } ?>
        </div>
        <div class="box" id="chart-btn">
          <div class="box-1 pt-2">
            <?php $name=strtolower($value['game_name']); ?>
            <a href="<?= base_url('panel-chart') ?>/<?php echo !empty($value['game_name']) ? str_replace(" ", "-", $name) : '' ?>">
              <button class="btn btn-info font-weight-bold">PANEL CHART</button>
            </a>
          </div>
          
          <div class="box-2 pt-2">
            <a href="<?= base_url('jodi-chart') ?>/<?php echo !empty($value['game_name']) ? str_replace(" ", "-", $name) : '' ?>">
              <button class="btn btn-info font-weight-bold">JODI CHART</button>
            </a>
          </div>
        </div>
        <div class="py-2 text-center bot-red">
          <h6 class="time-left"><?php echo !empty($value['open_time']) ? ucwords($value['open_time']) :'-';?></h6>
          <h6 class="time-right"><?php echo !empty($value['close_time']) ? ucwords($value['close_time']) :'-';?></h6>
          <button onClick="window.location.reload();" type="submit" class="btn btn-secondary mt-2">Refresh</button>
        </div>
      </div>
      <?php //}
      ?>
      
      
      
      <?php
      }
      }
      }
      } ?>




        <?php if (!empty($live_sattas)) {
      foreach ($live_sattas as $key => $value) {
      $date=$value['created_date'];
      $stnDate = date("Y-m-d",strtotime($date));
      $enDate=   date('Y-m-d',strtotime("-1 days"));
      $curr =  !empty($value['open_time']) ? ucwords($value['open_time']) :'-';
      $last_min = date('H:i A');
      $startDate = date("H:i A",strtotime($curr." -5 minutes"));
      $enddate = date("H:i A",strtotime($curr." +5 minutes"));
      $current_date= date('Y-m-d');
      $startDatese = date("Y-m-d",strtotime($date));
      $closet =  !empty($value['close_time']) ? ucwords($value['close_time']) :'-';
      $closestartDate = date("H:i A",strtotime($closet." -5 minutes"));
      $closeenddate = date("H:i A",strtotime($closet." +5 minutes"));
      $closedates = date("H:i A",strtotime($closet));
      if($startDate <= $last_min && $enddate > $last_min || $closestartDate <= $last_min && $closeenddate > $last_min){
      }else{
      ?>
      <?php
      $current_date= date('Y-m-d');
      $startDates = date("Y-m-d",strtotime($date));
      $opendates = date("H:i A",strtotime($curr));
      // if($startDates==$current_date){
      ?>
      <div  style="background-color: <?php echo !empty($value['back_color']) ? ucwords($value['back_color']) :'-';?>">
        <div class="py-2">
          <h4 style="color: <?php echo !empty($value['text_color']) ? ucwords($value['text_color']) :'-';?>"><?php echo !empty($value['game_name']) ? ucwords($value['game_name']) :'-';?></h4>
          <?php if($startDates==$current_date){ ?>
          <?php if($opendates > $last_min){
          $this->db->limit('1');
          $single_test_data = $this->Md_database->getData('lottery_game_result','*',array('game_id '=>$game_id,'game_status '=>'1'),array('pk_id ','DESC'));
          // print_r($single_test_data);
          ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>">
          <?php echo !empty($single_test_data[0]['open_time_result']) ? $single_test_data[0]['open_time_result'] :'';?><?php if(!empty($single_test_data[0]['open_time_result'])){ ?>-<?php } ?><?php echo !empty($single_test_data[0]['open_time_result']) ? $single_test_data[0]['open_time_result_two'] :'';?><?php echo !empty($single_test_data[0]['close_time_result']) ? $single_test_data[0]['close_time_result_two'] :'';?><?php if(!empty($single_test_data[0]['close_time_result'])){ ?>-<?php } ?><?php echo !empty($single_test_data[0]['close_time_result']) ? $single_test_data[0]['close_time_result'] :'';?></h4>
          <?php
          }else{
          ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>"><?php echo !empty($value['open_time_result']) ? $value['open_time_result'] :'';?><?php if(!empty($value['open_time_result'])){ ?>-<?php } ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result_two'] :'';?><?php if($closedates<= $last_min){ ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result_two'] :'';?><?php if(!empty($value['close_time_result'])){ ?>-<?php } ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result'] :'';}?></h4><?php } }else{ ?>
          <h4 style="color:<?php echo !empty($value['result_color']) ? ucwords($value['result_color']) :'-';?>">
          <?php echo !empty($value['open_time_result']) ? $value['open_time_result'] :'';?><?php if(!empty($value['open_time_result'])){ ?>-<?php } ?><?php echo !empty($value['open_time_result']) ? $value['open_time_result_two'] :'';?><?php echo !empty($value['close_time_result']) ? $value['close_time_result_two'] :'';?><?php if(!empty($value['close_time_result'])){ ?>-<?php } ?><?php echo !empty($value['close_time_result']) ? $value['close_time_result'] :'';?></h4><?php
          } ?>
        </div>
        <div class="box" id="chart-btn">
          <div class="box-1 pt-2">
            <?php $name=strtolower($value['game_name']); ?>
            <a href="<?= base_url('panel-chart') ?>/<?php echo !empty($value['game_name']) ? str_replace(" ", "-", $name) : '' ?>">
              <button class="btn btn-info font-weight-bold">PANEL CHART</button>
            </a>
          </div>
          
          <div class="box-2 pt-2">
            <a href="<?= base_url('jodi-chart') ?>/<?php echo !empty($value['game_name']) ? str_replace(" ", "-", $name) : '' ?>">
              <button class="btn btn-info font-weight-bold">JODI CHART</button>
            </a>
          </div>
        </div>
        <div class="py-2 text-center bot-red">
          <h6 class="time-left"><?php echo !empty($value['open_time']) ? ucwords($value['open_time']) :'-';?></h6>
          <h6 class="time-right"><?php echo !empty($value['close_time']) ? ucwords($value['close_time']) :'-';?></h6>
          <button onClick="window.location.reload();" type="submit" class="btn btn-secondary mt-2">Refresh</button>
        </div>
      </div>
      <?php //}
      ?>
      
      
      
      <?php
      }
      }
      }
      } ?>
      <!--  <div class="py-2">
        <h4 class="red-col">RAJHDHANI DAY</h4>
      </div>
      <div class="box" id="chart-btn">
        <div class="box-1 pt-2">
          <a href="panel_chart.html">
            <button class="btn btn-warning font-weight-bold">PANEL CHART</button>
          </a>
        </div>
        <div class="box-2 pt-2">
          <a href="jodi_chart.html">
            <button class="btn btn-warning font-weight-bold">JODI CHART</button>
          </a>
        </div>
      </div> -->
      <!--  <div class="py-2 text-center bot-red">
        <h6 class="time-left">11:00AM</h6>
        <h6 class="time-right">11:00AM</h6>
        <button type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div>
      <div class="py-2">
        <h4 class="red-col">BOMBAY DAY</h4>
      </div>
      <div class="box" id="chart-btn">
        <div class="box-1 pt-2">
          <a href="panel_chart.html">
            <button class="btn btn-warning font-weight-bold">PANEL CHART</button>
          </a>
        </div>
        <div class="box-2 pt-2">
          <a href="jodi_chart.html">
            <button class="btn btn-warning font-weight-bold">JODI CHART</button>
          </a>
        </div>
      </div>
      <div class="py-2 text-center bot-red">
        <h6 class="time-left">11:00AM</h6>
        <h6 class="time-right">11:00AM</h6>
        <button type="submit" class="btn btn-secondary mt-2">Refresh</button>
      </div> -->
      <!-- 4 -->
      <h4 class="text-dark pt-2 faq">FAQ</h4>
      <?php echo!empty($faq[0]['cms_text']) ? $faq[0]['cms_text'] : ""; ?>
      <!--  <div class="text-center p-3 bot-blue" id="faq">
        <p>What is the History of Satta matka?</p>
        <p class="text-justify">
          Satta Matka, matka gambling game or lottery game is invented in 1950s.
          Satta matak came into existence after the independence of India. The
          founder of Satta Matka is Ratan Khatri. He is also known as the King of
          satta matka. Generally, Players also call Satta matka, Satta matta Matka
          as “Ankada Jugar”. This Lottery game is becoming famous these days. The
          new evaluation in the games makes matka game popular among satta
          players.
        </p>
      </div>
      <div class="text-center p-3 bot-blue" id="faq">
        <p>How to play satta matka?</p>
        <p class="text-justify">
          Ratan Khatri introduces the term opening and closing rates of satta
          matka. Players choose a random number ranging from 0-9. The selected
          number is written on paper and it is dropped into the matka. A person
          then picks the number from the matka and the winner is declared..
        </p>
      </div>
      <div class="text-center p-3 bot-blue" id="faq">
        <p>Changes in Satta Matta Matka?</p>
        <p class="text-justify">
          Many changes make satta matka a popular game in India. Now you can play
          the games with three numbers using the card. Players are getting live
          satta matka result. The new games in satta have become more entertaining
          than ever before. The new satta is also offering a guarantee of safety.
          Join Sattamatkano1.net, one of the top and leading live satta gaming
          today, and win!
        </p>
      </div>
      <div class="text-center p-3 bot-blue" id="faq">
        <p>Get Madhur Bazar, Madhur Day Result At SattaMatkaNo1.Net</p>
        <p class="text-justify">
          SATTA MATKA NO 1 has now become one of the most famous satta sites for
          playing SattaMatka games.Here you can play the most popular online Satta
          games with a quick SattaMatka Result. So, do you want to know more about
          our satta site? Visit our website and get the best tips for Madhur Satta
          Matka Our satta team is welcoming you to the world’s best SattaMatka
          games. We are offering the real Satta Matta Matka games for all players.
          Here you will get an amazing chance to win the SattaMatka King. Check
          out your Madhur Day Result and SattaMatka Result now
        </p>
      </div>
      <div class="text-center p-3 bot-blue" id="faq">
        <p>What is the meaning of satta matka?</p>
        <p class="text-justify">
          SATTA MATKA: India' Most Popular Lottery Game Have you ever heard about
          the word “SATTA”, if yes then you must be aware about satta matka. Satta
          Matka is a type of Indian betting that was introduced before Indian
          independence. In modern days, Satta Matka is a game that depends on
          numbers and players play satta by guessing these numbers to win. If you
          win the game, you will become the Satta King. Are you a deep heart fan
          of satta games, and also hesitating about playing the online satta game?
          Well, don’t be hesitating if you are at Satta Matka No1
        </p>
      </div> -->
      <div class="text-center" id="contact">
        <h4 class="text-primary pt-2 contact">CONTACT</h4>
        <?php echo!empty($contact_us[0]['cms_text']) ? $contact_us[0]['cms_text'] : ""; ?>
        <!-- <p>
          LOTTERY.NET <br />
          CONTACT (SITE ADMIN) <br />
          PROF: JOHN DOE<br />
          ALL RIGHT RESEVERD &copy; 2012-2021<br />
        </p> -->
      </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">
      Refresh
      </button>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url(); ?>assets/front/assets/js/jquery-3.2.1.slim.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/front/assets/js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/front/assets/js/bootstrap.min.js"></script>
      <!-- Main JS -->
      <script src="<?php echo base_url(); ?>assets/front/assets/js/main.js"></script>
    </body>
  </html>