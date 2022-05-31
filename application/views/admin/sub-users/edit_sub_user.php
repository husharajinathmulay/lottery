<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1><?php echo (!empty($adminData[0]) ? 'Edit' : 'Add'); ?> Sub User
                        <div class="pull-right">
                            <a href="<?= site_url('admin/sub-users/users') ?>"> <button
                                    class="btn btn-danger btn-size"><i class="fa fa-arrow-circle-left"></i>
                                    Back</button></a>

                        </div>

                    </h1>
                </section>
                <section class="content" style="padding:5px 0px;">
                    <div class="box box-primary">
                        <div class="box-body light-green-body">
                            <?php 
							$attribute =array('role' => 'form','id'=>'subuserForm');
							echo form_open_multipart('save-user',$attribute);?>

                            <div class="row">
                                <div class="col-sm-9 form-group">
                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Name<span style="color: red;">*</span></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control"
                                            value="<?php echo (!empty($adminData[0]['full_name']) ? $adminData[0]['full_name'] : ''); ?>">
                                    </div>

                                    <div class="col-sm-6 form-group no-pad">
                                        <label>Mobile No<span style="color: red;">*</span></label>
                                        <input type="number" id="mobile_no" name="mobile_no" class="form-control"
                                            value="<?php echo (!empty($adminData[0]['mobile_no']) ? $adminData[0]['mobile_no'] : ''); ?>"
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    </div>

                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Email<span style="color: red;">*</span></label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            value="<?php echo (!empty($adminData[0]['email']) ? $adminData[0]['email'] : ''); ?>">
                                    </div>

                                    <div class="col-sm-6 form-group no-pad">
                                        <label>City<span style="color: red;">*</span></label>
                                        <input type="text" id="city" name="city" class="form-control"
                                            value="<?php echo (!empty($adminData[0]['city']) ? $adminData[0]['city'] : ''); ?>">
                                    </div>

                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Password<span style="color: red;">*</span></label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            value="<?php echo (!empty($adminData[0]['password']) ? $this->encryption->decrypt($adminData[0]['password']) : ''); ?>">
                                    </div>

                                    <div class="col-sm-12 form-group no-pad">
                                        <label>Address<span style="color: red;">*</span></label>
                                        <textarea id="address" name="address"
                                            class="form-control"><?php echo (!empty($adminData[0]['address']) ? $adminData[0]['address'] : ''); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <div id="append">
                                        <div class="col-sm-12 form-group no-pad-left">
                                            <label>Profile Photo</label>
                                            <input type="file" name="profile_image" id="profile_image"
                                                class="form-control" accept="image/*">
                                            <input type="hidden" id="old_profile_image"
                                                value="<?php echo (!empty($adminData[0]['profile_image']) ? $adminData[0]['profile_image'] : ''); ?>">
                                            <img id="profile_img"
                                                src="<?= base_url(!empty($adminData[0]['profile_image']) ? $adminData[0]['profile_image'] : 'assets/commonarea/dist/img/default.png'); ?>"
                                                alt="" style="height:100px; width:180px; margin-top:5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 no-pad m-t-10">
                                <div class="col-md-12 no-pad">
                                    <label>Privileges<span style="color: red;">*</span></label>
                                    <label style="float:right;"><span style="padding-right:5px;">Select All</span>
                                        <input value="select_all" id="select_all" class="select_all" name="priviliges[]"
                                            type="checkbox">
                                    </label>
                                    <table id="" class="table color-table info-table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="10%" class="text-center">Sr. No.</th>
                                                <th width="30%">Pages</th>
                                                <th width="10%" class="text-center">View</th>
                                                <th width="10%" class="text-center">Add</th>
                                                <th width="10%" class="text-center">Edit</th>
                                                <th width="10%" class="text-center">Delete</th>
                                                <th width="10%" class="text-center">Active/Inactive</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Select All</td>
                                                <td class="text-center"><input value="select_all_view"
                                                        id="select_view_all" class="select_all_view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="select_all_add"
                                                        id="select_all_add" class="select_all_add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="select_all_edit"
                                                        id="select_all_edit" class="select_all_edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="select_all_delete"
                                                        id="select_all_delete" class="select_all_delete"
                                                        name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="select_all_status"
                                                        id="select_all_status" class="select_all_status"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Dashboard</td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="view_dashboard" value="view_dashboard"
                                                        name="priviliges[]">
                                                </td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>Master => Game Result</td>
                                                <td class="text-center"><input value="view_state_master"
                                                        id="view_state_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_state_master"
                                                        id="add_state_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_state_master"
                                                        id="edit_state_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_state_master"
                                                        id="delete_state_master" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_state_master"
                                                        id="active_block_state_master" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>





                                            <!-- <tr>
                                                <td class="text-center">6</td>
                                                <td>Master => Commodity</td>
                                                <td class="text-center"><input value="view_commodity_master"
                                                        id="view_commodity_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_commodity_master"
                                                        id="add_commodity_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_commodity_master"
                                                        id="edit_commodity_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_commodity_master"
                                                        id="delete_commodity_master" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_commodity_master"
                                                        id="active_block_commodity_master" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">7</td>
                                                <td>Master => Company</td>
                                                <td class="text-center"><input value="view_company_master"
                                                        id="view_company_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_company_master"
                                                        id="add_company_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_company_master"
                                                        id="edit_company_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_company_master"
                                                        id="delete_company_master" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_company_master"
                                                        id="active_block_company_master" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">8</td>
                                                <td>Master => Gst</td>
                                                <td class="text-center"><input value="view_gst_master"
                                                        id="view_gst_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_gst_master"
                                                        id="add_gst_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_gst_master"
                                                        id="edit_gst_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_gst_master"
                                                        id="delete_gst_master" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_gst_master"
                                                        id="active_block_gst_master" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">9</td>
                                                <td>Master => Transporters</td>
                                                <td class="text-center"><input value="view_transporters_master"
                                                        id="view_transporters_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_transporters_master"
                                                        id="add_transporters_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_transporters_master"
                                                        id="edit_transporters_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_transporters_master"
                                                        id="delete_transporters_master" class="delete"
                                                        name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_transporters_master"
                                                        id="active_block_transporters_master" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">10</td>
                                                <td>Master => Vehicle Type</td>
                                                <td class="text-center"><input value="view_vehicle_type_master"
                                                        id="view_vehicle_type_master" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_vehicle_type_master"
                                                        id="add_vehicle_type_master" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_vehicle_type_master"
                                                        id="edit_vehicle_type_master" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_vehicle_type_master"
                                                        id="delete_vehicle_type_master" class="delete"
                                                        name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_vehicle_type"
                                                        id="active_block_vehicle_type" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">11</td>
                                                <td>Buyers</td>
                                                <td class="text-center"><input value="view_buyers" id="view_buyers"
                                                        class="view" name="priviliges[]" type="checkbox"></td>
                                                <td></td>
                                                <td class="text-center"><input value="edit_buyers" id="edit_buyers"
                                                        class="edit" name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="delete_buyers" id="delete_buyers"
                                                        class="delete" name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_buyers"
                                                        id="active_block_buyers" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">12</td>
                                                <td>Sellers</td>
                                                <td class="text-center"><input value="view_sellers" id="view_sellers"
                                                        class="view" name="priviliges[]" type="checkbox"></td>
                                                <td></td>
                                                <td class="text-center"><input value="edit_sellers" id="edit_sellers"
                                                        class="edit" name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="delete_sellers"
                                                        id="delete_sellers" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_sellers"
                                                        id="active_block_sellers" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">13</td>
                                                <td>Register Contract</td>
                                                <td class="text-center"><input value="view_register_contract"
                                                        id="view_register_contract" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_register_contract"
                                                        id="add_register_contract" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_register_contract"
                                                        id="edit_register_contract" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_register_contract"
                                                        id="delete_register_contract" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">14</td>
                                                <td>Sample Management</td>
                                                <td class="text-center"><input value="view_sample_management"
                                                        id="view_sample_management" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_sample_management"
                                                        id="add_sample_management" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_sample_management"
                                                        id="edit_sample_management" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_sample_management"
                                                        id="delete_sample_management" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">15</td>
                                                <td>Today's Market Rate</td>
                                                <td class="text-center"><input value="view_todays_market_rate"
                                                        id="view_todays_market_rate" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_todays_market_rate"
                                                        id="add_todays_market_rate" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_todays_market_rate"
                                                        id="edit_todays_market_rate" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">16</td>
                                                <td>Courier Management</td>
                                                <td class="text-center"><input value="view_courier_management"
                                                        id="view_courier_management" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_courier_management"
                                                        id="add_courier_management" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td class="text-center"><input value="delete_courier_management"
                                                        id="delete_courier_management" class="delete"
                                                        name="priviliges[]" type="checkbox"></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">17</td>
                                                <td>Sub Users</td>
                                                <td class="text-center"><input value="view_sub_users"
                                                        id="view_sub_users" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_sub_users" id="add_sub_users"
                                                        class="add" name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="edit_sub_users"
                                                        id="edit_sub_users" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_sub_users"
                                                        id="delete_sub_users" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_sub_users"
                                                        id="active_block_sub_users" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">18</td>
                                                <td>Gate Pass</td>
                                                <td class="text-center"><input value="view_gate_pass"
                                                        id="view_gate_pass" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_gate_pass" id="add_gate_pass"
                                                        class="add" name="priviliges[]" type="checkbox"></td>
                                                <td class="text-center"><input value="edit_gate_pass"
                                                        id="edit_gate_pass" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_gate_pass"
                                                        id="delete_gate_pass" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_gate_pass"
                                                        id="active_block_gate_pass" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">19</td>
                                                <td>Organization</td>
                                                <td class="text-center"><input value="view_organization"
                                                        id="view_organization" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td class="text-center"><input value="edit_organization"
                                                        id="edit_organization" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">20</td>
                                                <td>Freight Note</td>
                                                <td class="text-center"><input value="view_freight_note"
                                                        id="view_freight_note" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_freight_note"
                                                        id="add_freight_note" class="add" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_freight_note"
                                                        id="edit_freight_note" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_freight_note"
                                                        id="delete_freight_note" class="delete" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_freight_note"
                                                        id="active_block_freight_note" class="active_block"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">21</td>
                                                <td> Payment & Commission => Open Invoices</td>
                                                <td class="text-center"><input value="view_open_invoices"
                                                        id="view_open_invoices" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td class="text-center"><input value="edit_open_invoices"
                                                        id="edit_open_invoices" class="edit" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">22</td>
                                                <td>Payment & Commission => Commissions</td>
                                                <td class="text-center"><input value="view_commissions"
                                                        id="view_commissions" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">23</td>
                                                <td>Payment & Commission => Brokerage Report</td>
                                                <td class="text-center"><input value="view_brokerage_report"
                                                        id="view_brokerage_report" class="view" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">24</td>
                                                <td>Payment & Commission => Transporters Commissions</td>
                                                <td class="text-center"><input value="view_transporters_commissions"
                                                        id="view_transporters_commissions" class="view"
                                                        name="priviliges[]" type="checkbox"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <input type="hidden" name="admin_id" id="admin_id"
                                value="<?php echo (!empty($adminData[0]['admin_id']) ? $adminData[0]['admin_id'] : ''); ?>">
                            <div class="col-md-12 no-pad button-box">
                                <button type="submit" class="btn btn-success btn submit"
                                    style="display: inline-block;"><i class="fa fa-check-circle"></i> Submit</button>
                                <button type="reset" name="button" id="button" class="btn btn-danger"><i
                                        class="fa fa-times-circle"></i> Cancel</button>
                            </div>
                        </div> <!-- End box-body -->
                        <?php echo form_close(); ?>
                    </div> <!-- End box -->
                </section>
            </div>


        </div>
        <!-- /.row -->
    </section>
</div>

<script src="<?=base_url('assets/js/validations/custom/sub-users/users.js');?>"></script>
<script type="text/javascript">
$(".s_meun").removeClass("active");
$(".sub_users_active").addClass("active");
</script>
<script>
$("#select_all").click(function() {
    $('input:checkbox').not(this).prop('checked', this.checked);
});

$("#select_view_all").click(function() {
    $('.view').not(this).prop('checked', this.checked);
});

$("#select_all_add").click(function() {
    $('.add').not(this).prop('checked', this.checked);
});

$("#select_all_edit").click(function() {
    $('.edit').not(this).prop('checked', this.checked);
});

$("#select_all_delete").click(function() {
    $('.delete').not(this).prop('checked', this.checked);
});

$("#select_all_status").click(function() {
    $('.active_block').not(this).prop('checked', this.checked);
});
</script>
<script type="text/javascript">
/*[start::code to set priviliges checked at time of update user]*/
$(document).ready(function() {
    setSelectedPriviliges();
});

function setSelectedPriviliges() {
    var priviliges = '<?php echo !empty($adminData[0]['privileges']) ? $adminData[0]['privileges'] : ''; ?>';
    if (priviliges != "") {
        var privliges_array = priviliges.split(",");
        var length = privliges_array.length;
        for (var n = 0; n < length; n++) {
            $("#" + privliges_array[n]).prop("checked", true);
        }
    }
}
/*[end::code to set priviliges checked at time of update user]*/
</script>