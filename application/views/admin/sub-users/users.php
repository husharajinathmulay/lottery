<?php
$privilige = $this->Md_database->getPriviliges();
?>
<!-- Content Wrapper. Contains page content -->
<style>

</style>
<div class="content-wrapper" style="height: 1000px !important;">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>Sub User List
                    <?php if ((in_array('add_subuser_master', $privilige))) { ?>
                        <div class="pull-right">
                            <a href="<?= site_url('admin/sub-users/add_sub_user') ?>"><button type="button"
                                    class="btn btn-success" style="display: inline-block;"><i
                                        class="fa fa-plus-circle"></i> Add Sub User
                                </button></a>
                        </div>
                        <?php } ?>
                    </h1>
                </section>
                <!-- Info boxes -->
                <section class="content" style="padding:5px 0px;">
                    <div class="col-md-12 no-pad">
                        <div class="box box-primary">
                            <div class="box-body light-green-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%">Sr No.</th>
                                            <th width="10%">Name</th>
                                            <th width="10%">Email</th>
                                            <th width="10%">Mobile No</th>
                                            <th width="10%">City</th>
                                              <?php if ((in_array('active_block_subuser_master', $privilige))) { ?>
                                            <th width="6%">Status</th>
                                            <?php } ?>
                                          <?php if ((in_array('view_subuser_master', $privilige)) || (in_array('edit_subuser_master', $privilige))) { ?>
                                            <th width="10%">Action</th>
                                             <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php if (!empty($tests_data)) {
                              // $page_no = !empty($uri_page_no) ? $uri_page_no : '';
                               $i = 1;
                              // if (!empty($page_no)) {
                              //   $i = ($page_no * 10) - 9;
                              // }
                              foreach ($tests_data as $key => $value) {

                            ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo !empty($value['UA_Name']) ? ucwords($value['UA_Name']) :'-';?></td>
                                            <td><?php echo !empty($value['UA_email']) ? $value['UA_email'] :'-';?></td>
                                            <td><?php echo !empty($value['UA_mobile']) ? ucwords($value['UA_mobile']) :'-';?></td>
                                            
                                            <td><?php echo !empty($value['UA_City']) ? ucwords($value['UA_City']) :'-';?></td>
                      <?php if ((in_array('active_block_subuser_master', $privilige))) { ?>
                                            <td class="text-center">
                                                 <?php if ($value['UA_status'] == '1') { ?>
                                      <a onclick="return confirm('Do you really want to inactivadmin/change-sub-statuse this record?')" href="<?php echo base_url('admin/change-sub-status/' . $value['UA_pkey']); ?>/2"><i class="fa fa-toggle-on tgle-on " aria-hidden="true" title="Active"></i>
                                      </a>
                                    <?php } else { ?>
                                      <a onclick="return confirm('Do you really want to active this record?')" href="<?php echo base_url('admin/change-sub-status/' . $value['UA_pkey']); ?>/1">
                                        <i class="fa fa-toggle-on fa-rotate-180 tgle-off " aria-hidden="true" title="Inactive"></i>
                                      </a>
                                    <?php } ?>
                                            </td>
                                             <?php } ?>
                                          <?php if ((in_array('view_subuser_master', $privilige)) || (in_array('edit_subuser_master', $privilige))) { ?>
                                            <td class="text-center">
                                                <?php if ((in_array('view_subuser_master', $privilige))) { ?>
                                                <a href="<?= site_url('admin/sub-users/view_user_details') ?>/<?php echo $value['UA_pkey'] ?>"><button
                                                        type="button" class="btn btn-primary btn-xs" title="View"><i
                                                            class="fa fa-eye"></i></button></a>
                                                                <?php } ?>
                                                                     <?php if ((in_array('edit_subuser_master', $privilige))) { ?>
                                                <a onclick="return confirm('Do you really want to delete this record?')" href="<?= site_url('admin/sub-users/add_sub_user') ?>/<?php echo $value['UA_pkey'] ?>"><button
                                                        type="button" class="btn btn-warning btn-xs btn-edit" id=""
                                                        title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button></a>
                                                    <?php } ?>
                                                <!-- <a href="" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a> -->
                                            </td>
                                                <?php } ?>
                                        </tr>
                                         <?php $i++;
                              }
                            }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- End box-body -->
                    </div> <!-- End box -->
                </section>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
$(".s_menu").removeClass("active");
$(".users_active").addClass("active");
 $(function() {
    $("#example").DataTable();
});
</script>