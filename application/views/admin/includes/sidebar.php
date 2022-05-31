<?php
$privilige = $this->Md_database->getPriviliges();
?>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar scrollbar" id="style-7">
	    <!-- sidebar: style can be found in sidebar.less -->
	    <section class="sidebar">
	        <!-- sidebar menu: : style can be found in sidebar.less -->
	        <ul class="sidebar-menu" data-widget="tree">
	            <!-- Dashboard start-->
	             <?php if ((in_array('view_dashboard', $privilige))) { ?>
	            <li class="s_meun dashboard_active">
	                <a href="<?= site_url('admin/dashboard') ?>">
	                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
	                </a>
	            </li>
	            <?php } ?>
	            <!-- Dashboard end-->
 <?php if ((in_array('view_game_master', $privilige)) || (in_array('add_game_master', $privilige)) || (in_array('edit_game_master', $privilige)) || (in_array('delete_game_master', $privilige))) { ?>	            <!-- Master start-->
	            <li class="treeview s_meun master_active ">
	                <a href="#">
	                    <i class="fa fa-table" aria-hidden="true"></i> <span>Master</span>
	                    <span class="pull-right-container">
	                        <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                </a>
	                <ul class="treeview-menu">
	                    <li class="s_meun game_master_active"><a href="<?= site_url('admin/master/game_master') ?>"><i
	                                class="fa fa-flag"></i>
	                            Game Master </a></li>
	                    <!-- <li class="s_meun state_active"><a href="<?= site_url('admin/state') ?>"><i class="fa fa-flag"></i>
	                            State </a></li>
	                    <li class="s_meun city_active"><a href="<?= site_url('admin/city') ?>"><i
	                                class="fa fa-building-o "></i> City </a></li> -->

	                </ul>
	            </li>
 <?php } ?>
 	             <?php if ((in_array('view_cms_master', $privilige))) { ?>

	            <!-- cms start-->
	            <li class="s_meun cms_active">
	                <a href="<?= site_url('admin/cms') ?>">
	                    <i class="fa fa-pencil-square-o"></i> <span>CMS</span>
	                </a>
	            </li>
	          <?php } ?>
 <?php if ((in_array('view_result_master', $privilige)) || (in_array('add_result_master', $privilige)) || (in_array('edit_result_master', $privilige)) || (in_array('delete_result_master', $privilige))) { ?>	            <!-- Master start-->

	            <!-- Game Result -->
	            <li class="s_meun game_result_active">
	                <a href="<?= site_url('admin/game_result') ?>">
	                    <i class="fa fa-file-text-o "></i> <span>Game Result</span>
	                </a>
	            </li>
	               <?php } ?>
	            <!-- Sub Users -->
	            <li class="s_meun users_active">
	                <a href="<?= site_url('admin/sub-users/users') ?>">
	                    <i class="fa fa-users"></i> <span>Sub Users</span>
	                </a>
	            </li>
	            <!-- cms end-->

	            <!--Settings start-->
	            <li class="treeview s_meun settings_active ">
	                <a href="#">
	                    <i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>
	                    <span class="pull-right-container">
	                        <i class="fa fa-angle-left pull-right"></i>
	                    </span>
	                </a>
	                <ul class="treeview-menu">
	                   <!--  <li class="s_meun general_settings_active"><a href="<?= site_url('admin/general-settings') ?>"><i
	                                class="fa fa-sliders"></i> General Settings</a></li>
	                    <li class="s_meun email_settings_active"><a href="<?= site_url('admin/email-settings') ?>"><i
	                                class="fa fa-envelope" aria-hidden="true"></i> E-mail Settings</a></li>
	                    <li class="s_meun visual_settings_active"><a href="<?= site_url('admin/visual-settings') ?>"><i
	                                class="fa fa-paint-brush" aria-hidden="true"></i> Visual Settings</a></li> -->
	                   <!--  <li class="s_meun social_login_settings_active"><a
	                            href="<?= site_url('admin/social-login-settings') ?>"><i class="fa fa-globe"></i> Social
	                            Login</a></li> -->
	                    <li class="s_meun change_password_active"><a href="<?= site_url('admin/change-password') ?>"><i
	                                class="fa fa-key"></i> Change Password</a></li>
	                    <li class="s_meun logout_active"><a href="<?php echo base_url('admin/logout') ?>"><i
	                                class="fa fa-power-off"></i> Logout</a></li>
	                </ul>
	            </li>
	            <!--Settings end-->
	        </ul>
	    </section>
	    <!-- /.sidebar -->
	</aside>