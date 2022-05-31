<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>&nbsp;
                        <div class="pull-right">
                            <a href="<?= site_url('admin/sub-users/users') ?>">
                                <button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i>
                                    Back</button>
                            </a>
                        </div>
                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">
                    <!-- start col-6 -->
                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <div class="col-md-12 no-pad">
                                    <div class="panel-Box">
                                        <h4 class="panel-title"> <a> Sub User Details</a> </h4>
                                    </div>

                                    <div class="vs-bx itn-delt-vw mt-0 mg-bot-10">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>Full Name</b></h5>
                                                    <p class="vw-sch-tx">
                                                       <?php echo!empty($editData['UA_Name']) ? $editData['UA_Name'] : ""; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>Usertype</b></h5>
                                                    <p class="vw-sch-tx">
                                                         <?php echo!empty($editData['UA_userType']) ? $editData['UA_userType'] : ""; ?>
                                                    </p>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>Email</b></h5>
                                                    <p class="vw-sch-tx">
                                                        <?php echo!empty($editData['UA_email']) ? $editData['UA_email'] : ""; ?>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>

                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>Mobile No</b></h5>
                                                    <p class="vw-sch-tx">
                                                       <?php echo!empty($editData['UA_mobile']) ? $editData['UA_mobile'] : ""; ?>
                                                    </p>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>City</b></h5>
                                                    <p class="vw-sch-tx">
                                                       <?php echo!empty($editData['UA_City']) ? $editData['UA_City'] : ""; ?>
                                                    </p>
                                                </div>

                                                <div class="col-md-4">
                                                    <h5 class="sch-vist"><b>Address</b></h5>
                                                    <p class="vw-sch-tx">
                                                        <?php echo!empty($editData['UA_Address']) ? $editData['UA_Address'] : ""; ?>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="col-md-12">
                                                    <h5 class="sch-vist"><b>Profile Image</b></h5>

                                                    <input type="hidden" id="old_profile_image"
                                                        value="<?php echo (!empty($adminData[0]['profile_image']) ? $adminData[0]['profile_image'] : ''); ?>">
                                                    <img id="profile_img"
                                                        src="<?php echo base_url(); ?><?php  echo !empty($editData['UA_Image']) ? $editData['UA_Image'] : 'assets/commonarea/dist/img/default.png'; ?>"
                                                        alt="" style="height:100px; width:180px; margin-top:5px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End box-body -->
                            </div> <!-- End box -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>



<script type="text/javascript">
$(".s_meun").removeClass("active");
$(".users_active").addClass("active");
</script>