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
<!-- daterangepicker -->
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js">
</script>
<!-- datepicker -->
<script
    src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
</script>
    <title>Lottery</title>
  </head>
  <body class="bg-info">
    <div class="panel-chart-heading">
      <h4><?php echo !empty($live_satta[0]['game_name']) ? ucwords($live_satta[0]['game_name']) :'-';?> PANEL CHART</h4>

      <hr />
      <h4 class="text-primary"><?php echo !empty($live_satta[0]['game_name']) ? ucwords($live_satta[0]['game_name']) :'-';?></h4>
      <?php
$pre= date("Y",strtotime("-1 year"));  //last year "2013"
$cur= date("Y"); 
      ?>
      <h4>[<?php echo $pre?>-<?php echo $cur?>]</h4>
    </div>
    <div class="bg-danger py-2 mb-2">
      <h2>&#10051; Fastest Live Updates &#10051;</h2>
    </div>
    
    <?php $attributes = array('method' => 'post', 'id' => 'test', 'name' => 'test', 'enctype' => 'multipart/form-data'); ?>
                  <?= form_open('jodi-chart/'.$slug, $attributes); ?>
                    <div class="col-sm-2 form-group no-pad-left ">
                        <label>Date</label>
                        <input type="date" name="from_date" id="from_date" class="form-control" value="<?php echo !empty($from_date) ? $from_date :'';?>">
                    </div>
                    <div class="col-sm-3 form-group mt-26 no-pad">
                        <button type="submit" class="btn btn-primary filter-btn">Filter</button>
                         <a href="<?=base_url('jodi-chart/');?><?php echo $slug; ?>" class="btn  btn-danger filter-btn">Clear</a>
                    </div>

                    <!-- Button trigger modal -->
</form>

    <div id="jodi-page">
      <table border="1" width="30%" class="jodi-chart" align="center">
        <tbody>
           <!-- First Week Start -->
          <tr>
              <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[$firstWeek[0][0]];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[$firstWeek[0][0]];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'1 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'1 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'2 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'2 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'3 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'3 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'4 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'4 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'5 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'5 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($firstWeek)){        
          $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'6 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$firstWeek[date('Y-m-d',strtotime($firstWeek[0][0].'6 Day'))];

      ?> 
      <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>


          </tr>

            <!-- First Week End -->
    
    <!-- Second Week Start -->
          <tr>
             <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[$secondWeek[0][0]];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[$secondWeek[0][0]];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'1 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'1 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'2 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'2 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'3 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'3 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'4 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'4 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'5 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
       $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'5 Day'))];

      ?> 
      <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
      <?php 
        $jodi='-';
        if(!empty($secondWeek)){         
          $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'6 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$secondWeek[date('Y-m-d',strtotime($secondWeek[0][0].'6 Day'))];

      ?> 
      <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
          </tr>
           <!-- Second Week End -->
    
        <!-- Third Week Start -->
          <tr>
  <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[$thirdWeek[0][0]];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[$thirdWeek[0][0]];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'1 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'1 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'2 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'2 Day'))];

      ?> 
             <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
              <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'3 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'3 Day'))];

      ?> 
             <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'4 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'4 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'5 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'5 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($thirdWeek)){        
          $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'6 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$thirdWeek[date('Y-m-d',strtotime($thirdWeek[0][0].'6 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
          
          </tr>
           <!-- Third Week End -->
    
    <!-- Fourth Week Start -->
          <tr>
             <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[$fourthWeek[0][0]];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[$fourthWeek[0][0]];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'1 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'1 Day'))];

      ?> 
             <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
              <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'2 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'2 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'3 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'3 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'4 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'4 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'5 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'5 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($fourthWeek)){         
          $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'6 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
      $open_time_result=$fourthWeek[date('Y-m-d',strtotime($fourthWeek[0][0].'6 Day'))];

      ?> 
      <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
          </tr>
           <!-- Fourth Week End -->
    
     <!-- Fifth Week Start -->
          <tr>
            <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[$fifthWeek[0][0]];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                $open_time_result=$fifthWeek[$fifthWeek[0][0]];
      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
               <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'1 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'1 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'2 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'2 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
              <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'3 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'3 Day'))];

      ?> 
           <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
            <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'4 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'4 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'5 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
                  $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'5 Day'))];

      ?> 
            <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
             <?php 
        $jodi='-';
        if(!empty($fifthWeek)){        
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'6 Day'))];
          if(!empty($open_time_result)){
            $jodi=$open_time_result[0]['open_time_result_two'].''.$open_time_result[0]['close_time_result_two'];          
          }         
        }
          $open_time_result=$fifthWeek[date('Y-m-d',strtotime($fifthWeek[0][0].'6 Day'))];

      ?> 
       <td style="color:<?php if(!empty($open_time_result)){if($open_time_result[0]["open_time_result_two"]==$open_time_result[0]["close_time_result_two"]){ echo "red";}else{ echo "black"; } }else{ echo "black";} ?>"><?=$jodi?></td>
          </tr>
          <!-- <tr>
            <td><span style="color: #ff0000"> 44</span></td>
            <td>86</td>
            <td>23</td>
            <td>93</td>
            <td>91</td>
            <td>07</td>
          </tr>
          <tr>
            <td><span style="color: #ff0000"> 44</span></td>
            <td>86</td>
            <td>23</td>
            <td>93</td>
            <td>91</td>
            <td>07</td>
          </tr>
          <tr>
            <td><span style="color: #ff0000"> 44</span></td>
            <td>86</td>
            <td>23</td>
            <td>93</td>
            <td>91</td>
            <td>07</td>
          </tr>
          <tr>
            <td>39</td>
            <td><span style="color: #ff0000"> 38</span></td>
            <td><span style="color: #ff0000">44</span></td>
            <td>60</td>
            <td><span style="color: #ff0000">**</span></td>
            <td>36</td>
          </tr>
          <tr>
            <td><span style="color: #ff0000"> 44</span></td>
            <td>86</td>
            <td>23</td>
            <td>93</td>
            <td>91</td>
            <td>07</td>
          </tr>
          <tr>
            <td><span style="color: #ff0000"> 44</span></td>
            <td>86</td>
            <td>23</td>
            <td>93</td>
            <td>91</td>
            <td>07</td>
          </tr>
          <tr>
            <td>39</td>
            <td><span style="color: #ff0000"> 38</span></td>
            <td><span style="color: #ff0000">44</span></td>
            <td>60</td>
            <td><span style="color: #ff0000">**</span></td>
            <td>36</td>
          </tr> -->
        </tbody>
      </table>
    </div>

    <div class="home text-center pt-5">
      <a href="index.html">
        <h4 class="text-light font-weight-bold fs">HOME</h4>
      </a>
    </div>

    <div class="text-center footer" id="contact">
      <h4 class="text-primary pt-2 contact">CONTACT</h4>
             <?php echo!empty($contact_us[0]['cms_text']) ? $contact_us[0]['cms_text'] : ""; ?>

      <!-- <p>
        LOTTERY.NET <br />
        CONTACT (SITE ADMIN) <br />
        PROF: JOHNSON DOE<br />
        ALL RIGHT RESEVERD &copy; 2012-2021<br />
      </p> -->
    </div>
<script>
$(document).ready(function() {
$('#from_date').datepicker({
dateFormat: 'dd-mm-yy',
autoclose: true,
todayHighlight: true,
changeMonth: true,
changeYear: true,
startDate: new Date(),
});
});
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/front/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/bootstrap.min.js"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url(); ?>assets/front/assets/js/main.js"></script>


  </body>
</html>
