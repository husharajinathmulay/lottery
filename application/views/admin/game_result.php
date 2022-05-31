<?php
$privilige = $this->Md_database->getPriviliges();
?>
<!-- Content Wrapper. Contains page content -->
<style>
.content-header {
    padding: 0px 0px 10px;
}

.form-check-inline {
    display: flex
}
</style>
<div class="content-wrapper" style="height: 1000px !important;">
    <!-- Main content -->
    <section class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Game Result
              <?php if ((in_array('add_result_master', $privilige))) { ?>
                <div class="pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus-circle"></i> Add Result
                    </button>
                </div>
                 <?php } ?>
            </h1>

        </section>

        <div class="box box-primary no-height">
            <div class="box-body no-height">
               <form method="get">
                    <div class="col-sm-2 form-group no-pad-left ">
                        <label>From Date</label>
                        <input type="date" name="from_date" class="form-control" value="<?php echo !empty($this->input->get('from_date')) ? $this->input->get('from_date') : ''; ?>">
                    </div>

                    <div class="col-sm-2 form-group no-pad-left ">
                        <label>To Date</label>
                        <input type="date" name="to_date" class="form-control" value="<?php echo !empty($this->input->get('to_date')) ? $this->input->get('to_date') : ''; ?>">
                    </div>
                    <div class="col-sm-2 form-group no-pad-left">
                        <label>Game</label>
                        <select class="form-control selectpicker" data-live-search="true" name="game_name" id="game_name">
                            <option value="">Select Game</option>
                             <?php if(!empty($game_data)){ foreach($game_data as $value){
                                    $val="";
                                   $game= !empty($this->input->get('game_name')) ? $this->input->get('game_name') : '';
                if ($game==$value['pk_id']) {
                $val="selected";
                }
                         ?>
                        <option value="<?= $value['pk_id'] ?>" <?php echo $val; ?>><?= $value['game_name'] ?></option>
                        <?php } } ?>


                        </select>

                    </div>

                    <div class="col-sm-3 form-group mt-26 no-pad">
                        <button type="submit" class="btn btn-primary filter-btn">Filter</button>
                        <a href="<?=base_url('admin/game_result');?>" class="btn  btn-danger filter-btn">Clear</a>
                    </div>

                    <!-- Button trigger modal -->
</form>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Game Result
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myFunction()">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h4>
                               
                                <div class="modal-body">
                                     </div>
                                    <div class="row no-margin">
                                         <?php $attributes = array('method' => 'post', 'id' => 'Formresult', 'name' => 'Formresult', 'enctype' => 'multipart/form-data'); ?>
                  <?= form_open('admin/game-result-actions', $attributes); ?>
                    <input type="hidden" class="form-control" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                   <input type="hidden" class="form-control" name="test_id" id="test_id" >
                                        <div class="col-sm-8 form-group no-pad-left">
                                            <label>Select Game</label>
                                            <select class="form-control" name="game_name" id="game_names" onChange="game_fun(this.value)">
                                                 <option value="">Select Game</option>
                        <?php if(!empty($game_data)){ foreach($game_data as $value){
                         ?>
                        <option value="<?= $value['pk_id'] ?>"><?= $value['game_name'] ?></option>
                        <?php } } ?>
                                               <!--  <option value="">Kalyan</option>
                                                <option value="">Time Bazar</option> -->
                                            </select>

                                        </div>
                                        <div class="col-md-12 no-pad-left">

                                            <div class="form-check-inline">
                                                <div>
                                                    <input class="form-check-input editresult" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1" value="Open">
                                                        Open Time - <span id="open">10:00am</span>
                                                    </label>
                                                </div>

                                                <div style="padding-left:45px;display:none;" id="three">
                                                    <input class="form-check-input editresult" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2" value="Close">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Close Time - <span id="close">04:00pm</span>
                                                    </label>
                                                </div>
                                                <div for="flexRadioDefault" generated="true" class="error" id="desc"></div>

                                            </div>


                                            <div class="row no-margin">
                                                <div class="col-sm-2 form-group no-pad-left">
                                                    <input type="text" class="form-control" placeholder="000" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="open_time_result" name="open_time_result"  minlength="3" maxlength="3" value="<?php echo !empty($single_test_data['open_time_result']) ? $single_test_data['open_time_result'] :''; ?>">
                                                </div>
                                                <div class="col-sm-2 form-group no-pad-left ">
                                                    <input type="text" class="form-control" placeholder="0" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="open_time_result_two" name="open_time_result_two"  minlength="1" maxlength="1" value="<?php echo !empty($single_test_data['open_time_result_two']) ? $single_test_data['open_time_result_two'] :''; ?>">
                                                </div>


                                                <div class="col-sm-2 form-group no-pad-left" style="display:none" id="one">
                                                    <input type="text" class="form-control" placeholder="0" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="close_time_result_two" name="close_time_result_two"  minlength="1" maxlength="1" value="<?php echo !empty($single_test_data['close_time_result_two']) ? $single_test_data['close_time_result_two'] :''; ?>">
                                                </div>
                                                <div class="col-sm-2 form-group no-pad-left" style="display:none" id="two">
                                                    <input type="text" class="form-control" placeholder="000" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="close_time_result" name="close_time_result"  minlength="3" maxlength="3" value="<?php echo !empty($single_test_data['close_time_result']) ? $single_test_data['close_time_result'] :''; ?>">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <div class="col-sm-6 form-group no-pad-left">
                                            <label>Result</label>
                                            <input type="text" class="form-control" placeholder="420-15-329">
                                        </div> -->

                                        <div class="col-sm-12  no-pad-left ">

                                            <button type="submit" id="submit_btn" class="btn btn-success">Submit</button>
                                        </div>
                                         </form>

                                    </div>



                                </div>
                           

                            </div>
                        </div>
                    </div>
                    <!-- MODAL -->

                    <!-- MODAL ENDS -->

            </div>
        </div>

        <!-- Info boxes -->
        <div class="col-md-12 no-pad">
            <div class="box box-primary">
                <div class="box-body">

                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="example" class="table table-bordered">
                                            <thead>
                                                <tr role="row">
                                                    <th width="5%" class="text-center">Sr No.</th>
                                                    <th width="10%" class="text-center">Date</th>
                                                    <th width="20%">Game Name</th>
                                                    <th width="15%">Open Time</th>
                                                    <th width="15%">Close Time</th>
                                                   <th width="20%">Result</th>
                                                 <?php if ((in_array('edit_result_master', $privilige))) { ?>
                                                    <th width="15%" class="text-center">Action</th>
                                                    <?php } ?>

                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
   /*-- Using this function we are getting all site by client --*/
   function get_site($this) {
      let $val = $this.val();
      $.ajax({
         url: "<?php echo base_url('admin/get-result-by-game'); ?>",
         type: 'POST',
         data: {
            game_name: $val
         },
         beforeSend: function() {
            // $(".taluka-loader").show();
         },
         success: function(data) {
            // $(".taluka-loader").hide();
            $("#site_id").html(data);
         }
      });
   }

   $("#game_name").change(function() {
      let $this = $(this);
      get_site($this);
   });
</script>
<script type="text/javascript">
$(".s_menu").removeClass("active");
$(".game_result_active").addClass("active");

 var table = $("#example").dataTable({
      "pageLength": 10,
      "serverSide": true,
      "processing": true,
      "order": [
         [0, "desc"]
      ],
      "ajax": {
         url: "<?php echo base_url('admin/Cn_game_result/get_data_table_result?' . $_SERVER['QUERY_STRING']) ?>",
         type: 'POST'
      },
   });

   function reload_table() {
      table.DataTable().ajax.reload(null, false);
   }
   // $('.dataTables_filter input')
   // .off()
   // .on('keyup', function() {
   //    $('#example').DataTable().search(this.value.trim(), true, false).draw();
   // });
</script>
<script>
    //window.onload = category_fun;
    function game_fun($id) {

      //  var game_name = $("#game_name").val();
     var game_name =  $id;
      //  alert($id);
        $.ajax({
            url: "<?php echo base_url("game-change") ?>",
            data: {
                game_name: game_name,
            },
            dataType: 'json',
            type: "POST",
            success: function(data) {
                //alert(data.open);
              $('#open').text(data.open);
            $('#close').text(data.close);

            }



        });
    }
    $('#exampleModal').on('hidden.bs.modal', function () {
 location.reload();
})
</script>
<script type="text/javascript">
    // $(document).ready(function() {
       // $('.add').click(function() {
        $(document).on("click", ".edit-record", function() {
            var userid = $(this).data('id');
          // alert(userid);
            // AJAX request
            $.ajax({
                url: "<?php echo base_url(); ?>admin/game-results",
                type: 'post',
                dataType: 'json',
                data: {
                    userid: userid
                },
                success: function(data) {
                    //  $('#game_names')
                    // .find("option:gt(0)").remove();
               // $('#game_names').append(data.game_id);
              var opens=data.open_time_result;
              //alert(opens);
              
              $('#open').text(data.open);
            $('#close').text(data.close);
               $('#test_id').val(data.test_id);
                $('#open_time_result').val(data.open_time_result);
                $('#close_time_result').val(data.close_time_result);
                $('#open_time_result_two').val(data.open_time_result_two);
                $('#close_time_result_two').val(data.close_time_result_two);
     //$('#game_names option[value="data.game_id"]').prop('selected', true);
     $('#game_names option[value="'+data.game_id+'"]').prop('selected', true);
      var $213 = data.game_time;
    $("input[name=flexRadioDefault][value="+$213+"]").attr('checked', true);
            $('#one').hide();
              $('#two').hide();
              $('#three').hide();
    var user = $('#open_time_result').val();
             if(user==''){
                 }else{
               $('#one').show();
              $('#two').show();
              $('#three').show();
                 }
     // $('input:radio[value="data.game_time"]').prop('checked',true);
      // $('.editresult').find(':radio[name=flexRadioDefault][value="data.game_time"]').prop('checked', true);

                }
            });
        });
    // });
</script>
<!--[start::jQuery Validation files]-->
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/jquery.validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/js_common_validations.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/JqueryValidation/notificationMsg.js"></script>

        <!--[end::jQuery Validation files]-->
        <script>
$(document).ready(function() {
    $("#close_time_result_two").rules('remove');
$("#close_time_result").rules('remove');
$('#close_time_result_two').on('change', function() {
$("#close_time_result_two").rules('add', {
    required: true,
    number: true,
    minlength: 1,
    maxlength: 1
        messages: {
  required: "* enter field.",
 number: "Enter digits.",
 minlength: "1 digits.",
 maxlength: "1 digits."
}
});
$("#close_time_result").rules('add', {
    required: true,
    number: true,
    minlength:3,
    maxlength: 3
        messages: {
  required: "* enter field.",
 number: "Enter digits.",
 minlength: "3 digits.",
 maxlength: "3 digits."
}
});
});
$('#close_time_result').on('change', function() {
$("#close_time_result_two").rules('add', {
    required: true,
    number: true,
    minlength: 1,
    maxlength: 1
        messages: {
  required: "* enter field.",
 number: "Enter digits.",
 minlength: "1 digits.",
 maxlength: "1 digits."
}
});
$("#close_time_result").rules('add', {
    required: true,
    number: true,
    minlength:3,
    maxlength: 3
        messages: {
  required: "* enter field.",
 number: "Enter digits.",
 minlength: "3 digits.",
 maxlength: "3 digits."
}
});
});
});
</script>
<script>
      function myFunction() {
       // alert('dfd');
        window.location.reload();
document.getElementById("Formresult").reset();
}
   
    $(document).ready(function() {

    $(function() {
$(".editresult").rules('add', {
required: true,
messages: {
required: "* Check Open Or close time."
}
});
});
});

//   $(function() {
//     $("#example").DataTable();
// });

//$(document).ready(function() {
$(function() {
     var base_url = $("#base_url").val();
        $.validator.addMethod("chk_unique", function(value, element) {
                var ret = '';
                  var url = $('#base_url').val() + 'admin/Cn_game_result/check_unique?test_id=' + $('#test_id').val() + '&game_name=' + $('#game_names').val();
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
            '* This game today result already exists.'
        );
    $("#Formresult").validate({
        // ignore: [],
        //  debug: false,
        rules: {
            game_name: {
           required: true,
           chk_unique: true,
        },
           open_time_result: {
           required: true,
           number: true,
          minlength: 3,
          maxlength: 3
        },
        // close_time_result_two: {
        //    required: true,
        //     number: true,
        //   minlength: 1,
        //   maxlength: 1
        // },
        open_time_result_two: {
           required: true,
            number: true,
          minlength: 1,
          maxlength: 1
        },
        // close_time_result: {
        //    required: true,
        //    number: true,
        //   minlength: 3,
        //   maxlength: 3
        // },
     
        },
        // Specify the validation error messages
        messages: {
           game_name: {
          required: "* Please select Game Name.",
        },
           open_time_result: {
          required: "* enter field.",
         number: "Enter digits.",
         minlength: "3 digits.",
         maxlength: "3 digits."
        },
        // close_time_result_two: {
        //   required: "* enter field.",
        //   number: "Enter digits.",
        //  minlength: "1 digits.",
        //  maxlength: "1 digits."
        // },
        open_time_result_two: {
         required: "* enter field.",
          number: "Enter digits.",
         minlength: "1 digits.",
         maxlength: "1 digits."
        },
        //  close_time_result: {
        //  required: "* enter field.",
        //   number: "Enter digits.",
        //  minlength: "3 digits.",
        //  maxlength: "3 digits."
        // },
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $("#submit_btn").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});
});

</script>