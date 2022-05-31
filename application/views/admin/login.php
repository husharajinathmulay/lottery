<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/AdminLTE.min.css">

    <!-- <link rel="icon" href="<?= site_url('assets/commonarea/'); ?>dist/img/KGB-Fevicon.png" type="image/png" sizes="16x16"> -->
    <!-- <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/login.css"> -->


    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .error {
        color: #FF0000;
    }

    .checkbox input[type="checkbox"],
    .checkbox-inline input[type="checkbox"],
    .radio input[type="radio"],
    .radio-inline input[type="radio"] {
        position: relative !important;
        margin-left: 0px !important;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#!">Lottery</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Admin Login</p>
            <form class="login-form" id="frmLogin" action="<?php echo base_url(); ?>admin/login-action" method="post" autocomplete="off">
       <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" id="username" name="txtUserName" value="<?php echo (!empty($_COOKIE['cok_Email'])) ? $_COOKIE['cok_Email'] : ''; ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="txtPassword" minlength="6" maxlength="20" value="<?php echo (!empty($_COOKIE['cok_Password'])) ? $_COOKIE['cok_Password'] : ''; ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" value="yes" id="defaultCheck1"  <?php echo (!empty($_COOKIE['cok_Email']) && !empty($_COOKIE['cok_Password'])) ? 'checked="" ' : ''; ?>> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                         <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        <!-- <a href="<?= site_url('admin/dashboard'); ?>" type="submit"
                            class="btn btn-primary btn-block btn-flat">Sign In</a> -->
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
            <br>
            <a href="<?= site_url('admin/forgot-password'); ?>">I forgot my password</a><br>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <div class="msg_div">
        <?php
    $msg = '';
    $error_class = 'alert-success';
    $hint_text = 'Success';
    if ($this->session->flashdata("success") != "") {
      $msg = $this->session->flashdata("success");
      $error_class = 'alert-success';
      $hint_text = 'Success';
    } else if ($this->session->flashdata("error") != "" || (validation_errors() != "")) {
      $msg = ($this->session->flashdata("error") ? $this->session->flashdata("error") : validation_errors());
      $error_class = 'alert-danger';
      $hint_text = 'Error';
    }
    ?>
        <div class="err-msg2"
            style="position: fixed;right: 0px;bottom: 10px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
            <div class="alert <?php echo $error_class; ?>">
                <a href="#" class="close" aria-label="close"
                    style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a>
                <strong><?php echo $hint_text; ?> !</strong> <?php echo $msg; ?>
            </div>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="<?= site_url('assets/js/'); ?>sweetalert.min.js"></script>

<!-- jQuery 3 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="<?= site_url('assets/js/'); ?>sweetalert.min.js"></script>

  <!-- jQuery 3 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 
  <!--[start::jQuery Validation files]-->
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>
        <!--[end::jQuery Validation files]-->
  <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/js_login/js_login.js"></script>
</body>

</html>