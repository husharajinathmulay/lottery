<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
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
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/square/blue.css"> -->


    <link rel="icon" href="<?= site_url('assets/commonarea/'); ?>dist/img/favicon.png" type="image/png" sizes="16x16">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#!">Lottery</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Enter new password</p>
 <form class="frm" id="frm" action="<?php echo base_url(); ?>admin/reset-password-action" method="post" autocomplete="off"> 
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
        <input type="hidden" name="email_id" id="email_id" value="<?php echo !empty($user_email)?$user_email:''; ?>" />

            <div class="form-group has-feedback">
                <input type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                    placeholder="Confirm Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <input type="hidden" name="email" id="email">
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" id="submit" class="btn btn-success btn-block login-btn">Continue</button>

                <!--     <a href="<?= site_url(''); ?>" type="submit" class="btn btn-primary btn-block btn-flat">Continue</a> -->

                </div>
                <!-- /.col -->
            </div>
</form>
        </div>
        <!-- /.login-box-body -->
    </div>

    <!-- jQuery 3 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script> -->
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>

  <!-- jQuery 3 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script>
   <!--[start::jQuery Validation files]-->
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>
        <!--[end::jQuery Validation files]-->
<!--           <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/js_reset_password/js_reset_password.js"></script>
 -->  <script>

$(function () {

    $("#frm").validate({
// Specify the validation rules
        rules: {
            new_password: {
                required: true,
                minlength: 6,
                maxlength: 20,
            },
            confirm_password: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo : "#new_password"
            },
        },
        // Specify the validation error messages
        messages: {
            new_password: {
                required: "* Please enter password.",
                minlength: "* Please enter atleast 6 characters.",
                maxlength: "* Please enter only 20 characters.",
            },
            confirm_password: {
                required: "* Please enter confirm password.",
                equalTo: "* New password and confirm password should be same.",
                minlength: "* Please enter atleast 6 characters.",
                maxlength: "* Please enter only 20 characters.",
            },
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $("#submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});

    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>