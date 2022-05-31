 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <section class="content">
     <section class="content-header" style="padding: 0px 0px 15px 0;">
       <h1>
         Change Your Password
       </h1>

     </section>

     <!-- Main content -->


     <div class="row">
       <div class="col-md-6">
         <!-- general form elements -->
         <div class="box box-primary">

           <!-- /.box-header -->
           <!-- form start -->
           <?php $attributes = array('method' => 'post', 'id' => 'change_pwd_form', 'name' => 'city_form','enctype' => 'multipart/form-data'); ?>
               <?= form_open('admin/user-administration-setting-action', $attributes); ?>
             <div class="box-body no-height">
               <div class="form-group">
                 <label for="oldpass">Old Password</label>
                 <input type="password" class="form-control" id="txtOldPass" name="txtOldPass" value="">
               </div>
               <div class="form-group">
                 <label for="newpass">New Passowrd</label>
                 <input type="password" class="form-control" id="txtNewPass" name="txtNewPass" value="">
               </div>
               <div class="form-group">
                 <label for="cpassword">Confirm Password</label>
                 <input type="password" class="form-control" id="txtNewConfrmPass" name="txtNewConfrmPass" value="">
               </div>
             </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Continue</button>
             </div>
           </form>
         </div>
         <!-- /.box -->
       </div>
     </div>
     <!-- /.row -->
   </section>

 </div>
 <!-- /.content-wrapper -->

 <script>
   $(".s_meun").removeClass("active");
   $(".settings_active").addClass("active");
   $(".change_password_active").addClass("active");
$(document).ready(function(){

var fileold = ($("#fileold").val() != "") ? false : true ;
var fileold1 = ($("#fileold2").val() != "") ? false : true ;

$("#change_pwd_form").validate({
// Specify the validation rules
ignore: [],
    onfocusout: false,
    rules: {
             txtOldPass: {
        required: true,
      },
      txtNewPass: {
        required: true,
      },
      txtNewConfrmPass: {
        required: true,
      },

    },
    // Specify the validation error messages
    messages: {
   txtOldPass: {
        required: "* Please enter old password.",
      },
      txtNewPass: {
        required: "* Please enter new password.",
      },
      txtNewConfrmPass: {
        required: "* Please enter new password again.",
      },

    },
    submitHandler: function (form) {
           $("#submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});
    
    

});

</script>
