<?php
$privilige = $this->Md_database->getPriviliges();
?>
<style>
.color-picker {
width: 29px;
height: 20px;
margin-bottom: 1rem;
}
</style>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row no-margin">
      <div class="col-md-4 no-pad">
        <section class="content-header">
          <h1>
          <?php if (!empty($test_id)) {
          ?>
          Edit Game
          <?php
          } else {
          ?>
          Add Game
          <?php
          }
          ?>
          
          </h1>
        </section>
        <div class="box box-primary">
          <div class="box-body left-box-body">
              <!--, 'onsubmit' => 'return validateForm()'-->
            <?php $attributes = array('method' => 'post', 'id' => 'Formbanner', 'name' => 'Formbanner', 'enctype' => 'multipart/form-data'); ?>
            <?= form_open('admin/master/game_action', $attributes); ?>
           <?php  $closeenddate = date("h:i A",strtotime($closet." +20 minutes"));?>
                       <input type="hidden" class="form-control" name="test_date" id="test_date" value="<?php echo !empty($closeenddate) ? $closeenddate : ''; ?>">

            <input type="hidden" class="form-control" name="test_id" id="test_id" value="<?php echo !empty($test_id) ? $test_id : ''; ?>">
            <div class="col-md-12 form-group no-padd">
              <label>Game Name<span style="color: red;">*</span></label>
               <input type="hidden" class="form-control" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
              <input type="text" name="game_name" id="game_name" class="form-control" value="<?php echo !empty($single_test_data['game_name']) ? $single_test_data['game_name'] :''; ?>">
              <div class="text-danger" id=""></div>
            </div>
            <div class="col-md-12 form-group no-padd">
              <label>Open Time<span style="color: red;">*</span></label>
              <div class="input-group bootstrap-timepicker timepicker" >
                <input id="timepicker1" type="text" name="open_time" class="form-control input-small" value="<?php echo !empty($single_test_data['open_time']) ? $single_test_data['open_time'] :''; ?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
              </div>
              <div class="text-danger" id=""></div>
            </div>
            <div class="col-md-12 form-group no-padd">
              <label>Close Time<span style="color: red;">*</span></label>
              <div class="input-group bootstrap-timepicker timepicker">
                <input id="timepicker2" type="text" name="close_time" class="form-control input-small" value="<?php echo !empty($single_test_data['close_time']) ? $single_test_data['close_time'] :''; ?>">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
              </div>
              <div class="text-danger" id="ctime"></div>
            </div>
            <div class="col-md-12  no-padd ">
              <input type="color" name="text_color" id="text_color" class="color-picker" value="<?php echo !empty($single_test_data['text_color']) ? $single_test_data['text_color'] :''; ?>">
              <label>&nbsp; Text Color<span style="color: red;">*</span></label>
              <div class="text-danger" id=""></div>
            </div>
            <div class="col-md-12  no-padd ">
              <input type="color" name="result_color" id="result_color" class="color-picker" value="<?php echo !empty($single_test_data['result_color']) ? $single_test_data['result_color'] :''; ?>">
              <label>&nbsp; Result Color<span style="color: red;">*</span></label>
              <div class="text-danger" id=""></div>
            </div>
            <div class="col-md-12  no-padd " style="padding-bottom:5px;">
              <input type="color" name="back_color" id="back_color" class="color-picker" value="<?php echo !empty($single_test_data['back_color']) ? $single_test_data['back_color'] :''; ?>">
              <label>&nbsp; Background Color<span style="color: red;">*</span></label>
              <div class="text-danger" id=""></div>
            </div>
            <!-- End form-group -->
            <div class="col-md-12 form-group no-padd">
              
              <?php if (empty($test_id)) {
              ?>
              <?php if ((in_array('add_game_master', $privilige))) { ?>
              <button type="submit" name="submit_btn" id="submit_btn"
              class="btn btn-success form_btn submit leftpri city_add" data-id="submit" ><i
              class="fa fa-check-circle"></i> Submit</button>
              <?php
              }
              } else{
              ?>
              <?php if ((in_array('add_game_master', $privilige))) { ?>
              <button type="submit" name="submit_btn" id="submit_btn"
              class="btn btn-success form_btn submit leftpri city_add" data-id="submit" ><i
              class="fa fa-check-circle"></i> Update</button>
              <?php
              }
              }
              ?>
              <?php if (empty($test_id)) {
              ?>
              <button  onClick="window.location.reload();" type="button" class="btn btn-danger form_btn"><i class="fa fa-times-circle"></i> Clear</button>
              <?php
              } else{
              ?>
              <a href="<?php echo base_url('admin/master/game_master');?>"> <button  onClick="window.location.reload();" type="button" class="btn btn-danger form_btn"><i class="fa fa-times-circle"></i> Cancel</button></a>
              <?php
              }
              ?>
            </div>
          </form>
          <div class="clearfix"></div>
          <!-- End form-group -->
        </form>
      </div>
      <!-- End box-body -->
    </div>
    <!-- End box -->
  </div>
  <div class="col-md-8 no-pad-right">
    <section class="content-header">
      <h1>Game List </h1>
    </section>
    <div class="box box-primary">
      <div class="box-body">
        <div class="box-body">
          <div class="row">
            <div class="col-sm-12 no-pad">
              <div class="">
                <div class="row">
                  <div class="col-sm-12">
                    <table id="example" class="table table-bordered">
                      <thead>
                        <tr role="row">
                          <th width="10%" class="text-center">Sr No.</th>
                          <th width="23%">Game Name</th>
                          <th width="23%">Open Time</th>
                          <th width="23%">Close Time</th>
                          <?php if ((in_array('active_block_game_master', $privilige))) { ?>
                          <th width="11%" class="text-center">Status</th>
                          <?php } ?>
                          <?php if ((in_array('edit_game_master', $privilige)) || (in_array('delete_game_master', $privilige))) { ?>
                          <th width="10%" class="text-center">Action</th>
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
                          <td class="text-center"><?php echo $i; ?></td>
                          <td><?php echo !empty($value['game_name']) ? ucwords($value['game_name']) :'-';?></td>
                          <td><?php echo !empty($value['open_time']) ? ucwords($value['open_time']) :'-';?></td>
                          <td><?php echo !empty($value['close_time']) ? ucwords($value['close_time']) :'-';?></td>
                          <?php if ((in_array('active_block_game_master', $privilige))) { ?>
                          <td class="text-center">
                            <?php if ($value['status'] == '1') { ?>
                            <a onclick="return confirm('Do you really want to inactive this record?')" href="<?php echo base_url('admin/master/change-game-status/' . $value['pk_id']); ?>/2"><i class="fa fa-toggle-on tgle-on " aria-hidden="true" title="Active"></i>
                            </a>
                            <?php } else { ?>
                            <a onclick="return confirm('Do you really want to active this record?')" href="<?php echo base_url('admin/master/change-game-status/' . $value['pk_id']); ?>/1">
                              <i class="fa fa-toggle-on fa-rotate-180 tgle-off " aria-hidden="true" title="Inactive"></i>
                            </a>
                            <?php } ?>
                          </td>
                          <?php } ?>
                          <?php if ((in_array('edit_game_master', $privilige)) || (in_array('delete_game_master', $privilige))) { ?>
                          <td class="text-center">
                            <?php if ((in_array('edit_game_master', $privilige))) { ?>
                            <a href="<?php echo base_url(); ?>admin/master/game_master?test_id=<?php echo $value['pk_id']; ?>">
                              <button type="button"  class="btn btn-warning btn-xs btn-edit" id=""
                              title="Edit">
                            <i class="fa fa-pencil"></i></button></a>
                            <?php } ?>
                            <?php if ((in_array('delete_game_master', $privilige))) { ?>
                            <a onclick="return confirm('Do you really want to delete this record?')" href="<?php echo base_url(); ?>admin/master/delete-game/<?php echo $value['pk_id']; ?>" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                              <i class="fa fa-trash"></i>
                            </a>
                            <?php } ?>
                          </td>
                          <?php } ?>
                        </tr>
                        
                        <?php $i++;
                        }
                        }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End box-body -->
      </div>
      <!-- End box-body -->
    </div>
    <!-- End box -->
  </div>
</div>
<!-- /.row -->
</section>
</div>
<script type="text/javascript">
$(".s_meun").removeClass("active");
$(".master_active").addClass("active");
$(".game_master_active").addClass("active");
</script>
<script type="text/javascript">
$('#timepicker1').timepicker();
// $('#timepicker1').timepicker({
//      'step': '15'
// });

var test_date = document.getElementById("test_date").value;
$('#timepicker2').timepicker({
  //  timeFormat: 'h:mm p',
    defaultTime: test_date,
   // startTime: '10:00',
    // dynamic: false,
    // dropdown: true,
    // scrollbar: true
});
//$('#timepicker1').timepicker('setTime', new Date(new Date().getTime()+6*3600*1000));
$('#timepicker1').on('change', function() {
    var strStartTime = document.getElementById("timepicker1").value;
        var strEndTime = document.getElementById("timepicker2").value;
 //alert(strStartTime);
        var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
        var endTime = new Date(startTime)
        endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);
        if (startTime > endTime) {
            $("#submit_btn").attr("disabled", true);
            $('#ctime').text('Open Time is greater than close time');
            
        }else{
            $('#submit_btn').removeAttr("disabled");
             $('#ctime').text('');
        }
      
    
    });
    $('#timepicker2').on('change', function() {
    var strStartTime = document.getElementById("timepicker1").value;
        var strEndTime = document.getElementById("timepicker2").value;
 //alert(strStartTime);
        var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
        var endTime = new Date(startTime)
        endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);
        if (startTime > endTime) {
            $("#submit_btn").attr("disabled", true);
            
            $('#ctime').text('Open Time is greater than close time');
            
        }else{
          $('#submit_btn').removeAttr("disabled");
             $('#ctime').text('');
        }
      
    
    });
    window.onload = validateForm;
     function validateForm() {
        var strStartTime = document.getElementById("timepicker1").value;
        var strEndTime = document.getElementById("timepicker2").value;
 
        var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
        var endTime = new Date(startTime)
        endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);
        if (startTime > endTime) {
            $('#ctime').text('Open Time is greater than close time');
            return false;
        }
    }
    function GetHours(d) {
        var h = parseInt(d.split(':')[0]);
        if (d.split(':')[1].split(' ')[1] == "PM") {
            h = h + 12;
        }
        return h;
    }
    function GetMinutes(d) {
        return parseInt(d.split(':')[1].split(' ')[0]);
    }
</script>
</script>
<script type="text/javascript">
//$('#timepicker2').timepicker();
</script>
<!--[start::jQuery Validation files]-->
<script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>
<!--[end::jQuery Validation files]-->
<script>
$(function() {
$("#example").DataTable();
});
$(function () {

   var base_url = $("#base_url").val();
        $.validator.addMethod("chk_unique", function(value, element) {
                var ret = '';
                  var url = $('#base_url').val() + 'admin/master/Cn_game_master/check_unique?test_id=' + $('#test_id').val() + '&game_name=' + $('#game_name').val();
                // alert(url);
                $.ajax({
                    type: "get",
                    dataType: 'json',
                    url: url,
                    data: {},
                    async: false,
                    success: function(result) {
                        ret = result;
                    }
                });

                if (ret == false) {
                    return false;
                } else {
                    return true;
                }
            },
            '* This game is already exists.'
        );
//         $.validator.addMethod("user_email_not_same", function(value, element) {
//             var strStartTime = document.getElementById("timepicker1").value;
//         var strEndTime = document.getElementById("timepicker2").value;
//         var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
//         var endTime = new Date(startTime)
//         endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);
//   return startTime > endTime
// }, "* Open Time is greater than close time");

$.validator.addMethod("integer", function(value, element) {
    //alert(value);
            var startDate = $('#timepicker1').val();
            return Date.parse(startDate) <= Date.parse(value) || value == "";
        }, "* End date must be after start date");
//  function GetHours(d) {
//         var h = parseInt(d.split(':')[0]);
//         if (d.split(':')[1].split(' ')[1] == "PM") {
//             h = h + 12;
//         }
//         return h;
//     }
//     function GetMinutes(d) {
//         return parseInt(d.split(':')[1].split(' ')[0]);
//     }
jQuery.validator.addMethod("greaterThan", 
function(value, element, params) {
    var startDate = $('#timepicker1').val();
    if (!/Invalid|NaN/.test(new Date(value))) {
        return new Date(value) > new Date($(startDate).val());
    }
    return isNaN(value) && isNaN($(startDate).val()) 
        || (Number(value) > Number($(startDate).val())); 
},'Must be greater than {0}.');
var fileold = ($("#fileold").val() != "") ? false : true;
$("#Formbanner").validate({
// Specify the validation rules
rules: {
game_name: {
required: true,
chk_unique: true,
},
open_time: {
required: true,
},
close_time: {
required: true,
//greaterThan: "#timepicker1" 
},
text_color: {
required: true,
},
result_color: {
required: true,
},
back_color: {
required: true,
},
},
// Specify the validation error messages
messages: {
game_name: {
required: "* Please enter Game Name.",
},
open_time: {
required: "* Please select open time.",
},
close_time: {
required: "* Please select close time.",
},
close_time: {
required: "* Please select close time.",
},
text_color: {
required: "* Please select text color.",
},
result_color: {
required: "* Please select result color.",
},
back_color: {
required: "* Please select background color.",
},

},
submitHandler: function (form) { // <- pass 'form' argument in
$("#submit_btn").attr("disabled", true);
form.submit(); // <- use 'form' argument here.
}
});
});
</script>