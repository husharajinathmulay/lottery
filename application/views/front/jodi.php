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

    <div id="jodi-page">
      <table border="1" width="30%" class="jodi-chart" align="center">
        <tbody>
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
          </tr>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/front/assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/assets/js/bootstrap.min.js"></script>

    <!-- MAIN JS -->
    <script src="<?php echo base_url(); ?>assets/front/assets/js/main.js"></script>


  </body>
</html>
