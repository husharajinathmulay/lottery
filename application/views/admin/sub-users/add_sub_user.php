<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-12 no-pad">
                <section class="content-header">
                    <h1>
  <?php if (!empty($test_id)) {
            ?>
              Edit Sub User
            <?php
            } else {
            ?>
              Add Sub User
            <?php
            }
            ?>

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
							// $attribute =array('role' => 'form','id'=>'subuserForm');
							// echo form_open_multipart('save-user',$attribute);
                            ?>
                            <form class="" role="form" method="post" id="Frmuser" name="Frmuser" action="<?php echo base_url(); ?>admin/sub-users/add_sub_action" enctype="multipart/form-data">
              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
               <input type="hidden" id="test_id" name="test_id" value="<?php echo!empty($test_id) ? $test_id : ""; ?>">

                            <div class="row">
                                <div class="col-sm-9 form-group">
                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Name<span style="color: red;">*</span></label>
                                        <input type="text" id="txtName" name="txtName" value="<?php echo!empty($editData['UA_Name']) ? $editData['UA_Name'] : ""; ?>" class="form-control"
                                            >
                                    </div>

                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Mobile No<span style="color: red;">*</span></label>
                                        <input type="number" id="txtMobile" name="txtMobile" class="form-control isInteger" minlength="10" maxlength="10" value="<?php echo!empty($editData['UA_mobile']) ? $editData['UA_mobile'] : ""; ?>" class="form-control"
                                            oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                    </div>
                                     <input type="hidden" class="form-control" name="base_url" id="base_url" value="<?php echo base_url(); ?>">



                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>State<span style="color: red;">*</span></label>
                                        <input type="text" id="txtstate" name="txtstate" value="<?php echo!empty($editData['UA_state']) ? $editData['UA_state'] : ""; ?>" oninput="this.value=this.value.replace(/[^A-Z a-z]/g,'');" class="form-control" >
                                    </div>
                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>City<span style="color: red;">*</span></label>
                                        <input type="text" id="city" name="city" value="<?php echo!empty($editData['UA_City']) ? $editData['UA_City'] : ""; ?>" oninput="this.value=this.value.replace(/[^A-Z a-z]/g,'');" class="form-control" >
                                    </div>
                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Email<span style="color: red;">*</span></label>
                                        <input type="text" id="txtEmail" name="txtEmail" value="<?php echo!empty($editData['UA_email']) ? $editData['UA_email'] : ""; ?>" <?php echo!empty($editData['UA_email']) ? '' : ""; ?> autocomplete="OFF" class="form-control" >
                                    </div>
                                    <div class="col-sm-6 form-group no-pad-left">
                                        <label>Password<span style="color: red;">*</span></label>
                                        <?php
                                 if (!empty($editData['UA_password'])) {
                                     $UA_password = "";
                                     $UA_password = base64_decode($editData['UA_password']);
                                 }
                                 ?>
                                        <input type="password" id="txtPassword" name="txtPassword" value="<?php echo!empty($UA_password) ? $UA_password : ""; ?>" autocomplete="OFF" class="form-control"
                                            >
                                    </div>

                                    <div class="col-sm-12 form-group no-pad-left">
                                        <label>Address<span style="color: red;">*</span></label>
                                        <textarea id="txtAddress" name="txtAddress"
                                            class="form-control"><?php echo!empty($editData['UA_Address']) ? $editData['UA_Address'] : ""; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <div id="append">
                                        <div class="col-sm-12 form-group no-pad-left">
                                            <label>Profile Photo</label>
                                            <?php $LogoLink = (!empty($editData['UA_Image']) && !empty($editData['UA_pkey'])) ? 'AdminMedia/upload/user/' . $editData['UA_pkey'] . '/' . $editData['UA_Image'] : 'AdminMedia/images/default.png'; ?>
                                            <input type="file" name="profile_img" id="my-prf"
                                                class="form-control" accept="image/*">
                                           <input type="hidden" name="fileold" id="fileold" class="form-control" value="<?php echo !empty($editData['UA_Image']) ? $editData['UA_Image'] :''; ?>">

                                            <img id="profile_img"
                                                src="<?php echo base_url(); ?><?php  echo !empty($editData['UA_Image']) ? $editData['UA_Image'] : 'assets/commonarea/dist/img/default.png'; ?>"
                                                alt="" class="prof-photo mt-10 profile-img1" style="height:100px; width:180px; margin-top:5px;">
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
                                           <!--  <tr>
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
                                            </tr> -->
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Dashboard</td>
                                                <td class="text-center">
                                                    <input type="checkbox" id="view_dashboard" value="view_dashboard"
                                                        name="priviliges[]" class="ccheckbox">
                                                </td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>Game Result</td>
                                                <td class="text-center"><input value="view_result_master"
                                                        id="view_result_master" class="view" name="priviliges[]"
                                                        type="checkbox" class="ccheckbox"></td>
                                                <td class="text-center"><input value="add_result_master"
                                                        id="add_result_master" class="add ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_result_master"
                                                        id="edit_result_master" class="edit ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_result_master"
                                                        id="delete_result_master" class="deletes ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_result_master"
                                                        id="active_block_result_master" class="active_block ccheckbox"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>





                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>CMS</td>
                                                <td class="text-center"><input value="view_cms_master"
                                                        id="view_cms_master" class="view ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_cms_master"
                                                        id="add_cms_master" class="add ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_cms_master"
                                                        id="edit_cms_master" class="edit ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_cms_master"
                                                        id="delete_cms_master" class="deletes ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_cms_master"
                                                        id="active_block_cms_master" class="active_block ccheckbox"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>Master =>Game Result</td>
                                                <td class="text-center"><input value="view_game_master"
                                                        id="view_game_master" class="view ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_game_master"
                                                        id="add_game_master" class="add ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_game_master"
                                                        id="edit_game_master" class="edit ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_game_master"
                                                        id="delete_game_master" class="deletes ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_game_master"
                                                        id="active_block_game_master" class="active_block ccheckbox"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>Sub Users</td>
                                                <td class="text-center"><input value="view_subuser_master"
                                                        id="view_subuser_master" class="view ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="add_subuser_master"
                                                        id="add_subuser_master" class="add ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="edit_subuser_master"
                                                        id="edit_subuser_master" class="edit ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="delete_subuser_master"
                                                        id="delete_subuser_master" class="deletes ccheckbox" name="priviliges[]"
                                                        type="checkbox"></td>
                                                <td class="text-center"><input value="active_block_subuser_master"
                                                        id="active_block_subuser_master" class="active_block ccheckbox"
                                                        name="priviliges[]" type="checkbox"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                           <!--  <input type="hidden" name="admin_id" id="admin_id"
                                value="<?php echo (!empty($adminData[0]['admin_id']) ? $adminData[0]['admin_id'] : ''); ?>"> -->
                            <div class="col-md-12 no-pad button-box">
                                 <?php if (empty($test_id)) {
              ?>
                  <button type="submit" class="btn btn-success btn submit"
                                    style="display: inline-block;" id="Sec1SubmitBtn"><i class="fa fa-check-circle" ></i> Submit</button>
              <?php
              } else{
                        ?>
                 <button type="submit" class="btn btn-success btn submit"
                                    style="display: inline-block;" id="Sec1SubmitBtn"><i class="fa fa-check-circle"></i> Update</button>
                        <?php
                      }
                      ?>
                       <?php if (empty($test_id)) {
              ?>
              <button  onClick="window.location.reload();" type="button" class="btn btn-danger form_btn"><i class="fa fa-times-circle"></i> Clear</button>
              <?php
              } else{
                        ?>
                        <a href="<?php echo base_url('admin/sub-users/users');?>"> <button  onClick="window.location.reload();" type="button" class="btn btn-danger form_btn"><i class="fa fa-times-circle"></i> Cancel</button></a>
                        <?php
                      }
                      ?>
                               
                               <!--  <button type="reset" name="button" id="button" class="btn btn-danger"><i
                                        class="fa fa-times-circle"></i> Cancel</button> -->
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
$(".users_active").addClass("active");
 $("#my-prf").change(function () {
           if (this.files && this.files[0]) {
               var reader = new FileReader();
               reader.onload = imageIsLoaded;
               reader.readAsDataURL(this.files[0]);
           }
    });
    function imageIsLoaded(e) {
       $('.profile-img1').attr("src", e.target.result);
       $('.profile-img1').show();
    };
</script>

<script type="text/javascript">
/*[start::code to set priviliges checked at time of update user]*/
$(document).ready(function() {
    setSelectedPriviliges();
});

function setSelectedPriviliges() {
    var priviliges = '<?php echo !empty($editData['UA_priviliges']) ? $editData['UA_priviliges'] : ''; ?>';
   // alert(priviliges);
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
<script type="text/javascript">
    $('.select_all').on('change', function() {     
        $('.ccheckbox').prop('checked', $(this).prop("checked"));              
});
//deselect "checked all", if one of the listed checkbox product is unchecked amd select "checked all" if all of the listed checkbox product is checked
$('.ccheckbox').change(function(){ //".checkbox" change 
    if($('.ccheckbox:checked').length == $('.ccheckbox').length){
           $('.select_all').prop('checked',true);
    }else{
           $('.select_all').prop('checked',false);
    }
});

$('.select_all_view').change(function(){ //".checkbox" change 
    $('.view').prop('checked', $(this).prop("checked")); 
    $('.select_all').prop('checked',false);      
});

$('.view').change(function(){ //".checkbox" change 
    if($('.view:checked').length == $('.view').length){
           $('.select_all_view').prop('checked',true);
    }else{
           $('.select_all_view').prop('checked',false);
    }
});

$('.select_all_add').change(function(){ //".checkbox" change 
    $('.add').prop('checked', $(this).prop("checked")); 
    $('.select_all').prop('checked',false);         
});

$('.add').change(function(){ //".checkbox" change 
    if($('.add:checked').length == $('.add').length){
           $('.select_all_add').prop('checked',true);
    }else{
           $('.select_all_add').prop('checked',false);
    }
});

$('.select_all_edit').change(function(){ //".checkbox" change 
    $('.edit').prop('checked', $(this).prop("checked")); 
    $('.select_all').prop('checked',false);         
});

$('.edit').change(function(){ //".checkbox" change 
    if($('.edit:checked').length == $('.edit').length){
           $('.select_all_edit').prop('checked',true);
    }else{
           $('.select_all_edit').prop('checked',false);
    }
});

$('.select_all_delete').change(function(){ //".checkbox" change 
    $('.delete').prop('checked', $(this).prop("checked"));
    $('.select_all').prop('checked',false);          
});

$('.delete').change(function(){ //".checkbox" change 
    if($('.delete:checked').length == $('.delete').length){
           $('.select_all_delete').prop('checked',true);
    }else{
           $('.select_all_delete').prop('checked',false);
    }
});

$('.select_all_status').change(function(){ //".checkbox" change 
    $('.status').prop('checked', $(this).prop("checked"));  
    $('.select_all').prop('checked',false);        
});

$('.status').change(function(){ //".checkbox" change 
    if($('.status:checked').length == $('.status').length){
           $('.select_all_status').prop('checked',true);
    }else{
           $('.select_all_status').prop('checked',false);
    }
});
var fileold = ($("#fileold").val() != "") ? false : true ;

$(function () {
    var base_url = $("#base_url").val();
         $.validator.addMethod("chk_unique", function (value, element) {
            var ret='';
            if($('#txtEmail').val() != ''){
              var url= $('#base_url').val() + 'admin/sub-users/Cn_users/check_unique?test_id=' + $('#test_id').val() + '&txtEmail='+ $('#txtEmail').val();
         // alert(url);
                   $.ajax({
                       type: "get",
                       dataType: 'json',
                       url: url,
                       data: {},
                       async:false,
                       success: function (result) {
                         ret=result;
                       }
                   });
   
                   if (ret==false) {
                       return false;
                   } else {
                        return true;
                   }
               }
               },
               '* This email is already exists.'
               );
    $("#Frmuser").validate({
        onfocusout: false,
        rules: {            
            'priviliges[]': {
                required: true,
            },
            txtName: {
                required: true,                
            },    
                txtMobile: {
                number: true,
                required: true,
                minlength: 10,
            },
            txtEmail: {
                required: true,
                email: true,
                chk_unique: true,
               // chk_unique: true,
                
            },
            txtAddress: {
                required: true,
            },
            city: {
                required: true,
            },
            txtstate: {
                required: true,
            },
             
            txtPassword: {
                required: true,
               
            },
          
            profile_img:{
                required: fileold,   
              },        
        },
        messages: {
            
            'priviliges[]': {
                required: "* Select priviliges.",
            },
            txtName: {
                required: "* Enter  name.",
               // remote: "* This role name is already exists."
            },  
            txtMobile: {
                required: '* Please enter mobile no.',
            },
            txtEmail: {
               required: "Enter an email.",
               email: "Enter a valid email."
            },
            txtAddress: {
                required: '* Please enter address.',
            },
            city: {
                required: '* Please select city.',
            },
            txtstate: {
                required: '* Please select state.',
            },
            txtPassword: {
                required: '* Please enter password.',
             
            },
           
            profile_img:{
            required: "* Please select Image.",
           },          
        },
        submitHandler: function (form) {
            $("#Sec1SubmitBtn").text("Please wait..");
            $("#Sec1SubmitBtn").attr("disabled", true);
            form.submit();
        }
    });
});
</script>