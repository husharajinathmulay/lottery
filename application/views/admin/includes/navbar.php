<header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('admin/dashboard') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Lottery</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" style="font-size: 24px; color:#000;">
            <p>Lottery</p>
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <?php
        error_reporting(0);
           $this->db->select('*');
        $this->db->from('lottery_useradmin');
        $this->db->where('UA_pkey', $this->session->userdata('UID'));
        $this->db->where('UA_status', '1');
        $test_datas = $this->db->get()->result_array();
          ?>
          
        <?php $profile = (!empty($this->session->userdata('profile_path')) ? base_url($this->session->userdata('profile_path')) : base_url('assets/commonarea/dist/img/user2-160x160.jpg')); ?>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?><?php echo !empty($test_datas[0]['UA_Image']) ? $test_datas[0]['UA_Image'] : 'assets/commonarea/dist/img/avatar5.png'; ?>" class="user-image"
                            alt="User Image">
                        <span class="hidden-xs"><?= ucfirst($this->session->userdata('full_name')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url(); ?><?php echo !empty($test_datas[0]['UA_Image']) ? $test_datas[0]['UA_Image'] : 'assets/commonarea/dist/img/avatar5.png'; ?>" class="img-circle"
                                alt="User Image">

                            <p>
                                <?= $this->session->userdata('full_name'); ?>
                                <small> Welcome  <?php echo $fr_id = !empty($this->session->userdata('UNAME'))?$this->session->userdata('UNAME'):'';?>
                                    </small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                /.row
              </li> -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                            <div class="pull-right">
                                <a href="<?php echo base_url('admin/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--  <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
            </ul>
        </div>
    </nav>
</header>