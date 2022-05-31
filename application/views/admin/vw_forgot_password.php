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
            <p class="login-box-msg">Enter your email to reset password</p>
               <form class="frm" id="frm" action="<?php echo base_url(); ?>admin/verify-otp" method="post" autocomplete="off">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                  <input type="hidden" class="form-control" name="base_url" id="base_url"  value="<?php echo base_url();?>">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" id="username"name="email_id" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                     <button type="submit" class="btn btn-primary btn-block btn-flat submit">Sign In</button>
                   <!--  <a href="<?= site_url('admin/otp'); ?>" type="submit"
                        class="btn btn-primary btn-block btn-flat">Send OTP</a> -->

                </div>
                <!-- /.col -->
            </div>
 </form>
        </div>
        <!-- /.login-box-body -->
    </div>



    <!-- /.login-box -->

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
  <!--[start::jQuery Validation files]-->
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>
        <!--[end::jQuery Validation files]-->

<!--   <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/js_forgot/js_forgot.js"></script>
 -->  <!-- iCheck -->
  <!-- <script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script> -->
  <script>

$(function () {

    $("#frm").validate({
// Specify the validation rules
        rules: {
            email_id: {
                required: true,
                email: true,
              remote: $('#base_url').val() + 'admin/check-email'
            },
        },
        // Specify the validation error messages
        messages: {
            email_id: {
                required: "* Please enter email id.",
                email: "* Please enter vaild email id.",
                remote : "* Please enter correct email id",
            },
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
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