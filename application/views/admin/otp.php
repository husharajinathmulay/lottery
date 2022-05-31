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
            <p class="login-box-msg">Enter OTP</p>
  <form class="frms" id="frms" action="<?php echo base_url(); ?>admin/reset-passwords" method="post" autocomplete="off">   
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                          <input type="hidden" class="form-control" name="base_url" id="base_url"  value="<?php echo base_url();?>">

        <input type="hidden" name="email_id" id="email_id" value="<?php echo !empty($user_email)?$user_email:''; ?>" />
            <div class="form-group has-feedback">
                <input type="text" name="otp" id="otp" class="form-control" placeholder="OTP" maxlength="4">
                <input type="hidden" name="email" id="email" class="form-control" value="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                     <button type="submit" id="submit" class="btn btn-primary btn-block btn-flat">Continue</button>

                 <!--    <a href="<?= site_url('admin/reset-password'); ?>" type="submit"
                        class="btn btn-primary btn-block btn-flat">Continue</a> -->

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
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
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
            <div class="err-msg2" style="position: absolute;right: : 5px;bottom: 1px;z-index: 1; <?php echo (!empty($msg) ? 'display:block;' : 'display:none;'); ?>">
                <div class="alert <?php echo $error_class; ?>"  >
                    <a href="#" class="close" aria-label="close" style="text-decoration: none;position: absolute;top: 1px;right: 6px;opacity: 0.4;">&times;</a>
                    <strong><?php echo $hint_text; ?> !</strong> <?php echo $msg; ?>
                </div>
            </div>

        </div>

  <!-- jQuery 3 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--[start::jQuery Validation files]-->
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>
        <!--[end::jQuery Validation files]-->
        <!--[end::jQuery Validation files]-->
<!--           <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/js_otp_verify/js_otp_verify.js"></script>
 -->  
 <script>
    $(function () {

    $("#frms").validate({
        rules: {
            otp: {
                required: true,
               remote: $('#base_url').val() + 'admin/Cn_forgot/check_otp?email_id=' + $("#email_id").val()
            },
        },
        // Specify the validation error messages
        messages: {
            otp: {
                required: "* Please enter otp.",
                remote : "* Please enter correct otp",
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