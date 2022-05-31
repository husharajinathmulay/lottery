<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lottery</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- timepicker -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
        href="<?= site_url('assets/commonarea/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/main.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/iCheck/square/purple.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/css/file-manager.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/css/file-uploader.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/file-manager/css/style.css">
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/style.css">

    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/jquery.datatables.css">

    <!-- <link rel="icon" href="<?= site_url('assets/commonarea/'); ?>dist/img/KGB-Fevicon.png" type="image/png" sizes="16x16"> -->

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Summer note -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/summernote/summernote.css">

    <!-- select2.min.css -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- fselect -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>dist/css/multiple-select.min.css">

    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/jszip.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/jquery.dataTables.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/dataTables.buttons.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/buttons.html5.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/dataTables.fixedHeader.min.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/dataTables/fixedHeader.dataTables.min.css"></script>
    <!-- timepicker -->
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="<?= site_url('assets/commonarea/'); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
    <script src="<?= site_url('assets/js/jquery.validate.min.js'); ?>"></script>
    <script>

    var base_url = '<?= base_url(); ?>';
    </script>

    <style>
    .error {
        color: #FF0000;
    }
    </style>

</head>

<body onload="loadFunction()" class="hold-transition skin-blue sidebar-mini scrollbar" id="style-7"
    style="position: relative;">

    <div class="wrapper">