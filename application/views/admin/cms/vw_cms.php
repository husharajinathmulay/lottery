<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding: 0px 0px 15px 0;">
      <h1>
        Content Management System
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-bookmark-o"></i> CMS</li>
      </ol> -->
    </section>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-body">

            <!---------------------- form start --------------------->
              <?php $attributes = array('method' => 'post', 'id' => 'cmdFrm', 'name' => 'cmdFrm', 'enctype' => 'multipart/form-data'); ?>
                  <?= form_open('admin/cms', $attributes); ?>
<!--             <form method="post" name="cmdFrm" id="cmsFrm" >
 -->             
<!--   <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
 -->        
                <div class="row">
                 <div class="col-md-12 form-group">
                  <label class="lablefnt">Webpage <span style="color: red;">*</span></label>
                  <select class="form-control" id="web_page" name="web_page" onchange="getCMSe(this.value);">
                    <option value="" selected="selected">Select Webpage</option>
                    <option value="1">Webpage One</option>
                    <option value="2">Webpage Two</option>
                    <option value="3">Webpage Three</option>
                    <option value="4">Webpage Four</option>
                    <option value="5">Webpage Five</option>
                  </select>
                  <div for="cmsTitle" generated="true" class="error"></div>
                </div>


                <div class="col-md-12 form-group">
                  <label class="lablefnt">Pages <span style="color: red;">*</span></label>
                  <select class="form-control" id="cmsTitle" name="cmsTitle" onchange="getCMS(this.value);">
                    <option value="" selected="selected">Select Pages</option>
                    <!-- <option value="1">Lottery</option>
                    <option value="2">About Us</option>
                    <option value="3">FAQ's</option>
                    <option value="4">Contact Us</option> -->
                  </select>
                  <div for="cmsTitle" generated="true" class="error"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 form-group">
                  <label class="lablefnt">Content <span style="color: red;">*</span></label>
                  <div >
                    <textarea name="description" id="description" class="form-control summernote" autocomplete="off"></textarea>
                  <div for="description" generated="true" class="error"></div>
                  </div>
                </div>
                <!-- <div class="col-md-6 form-group">
                            <label class="lablefnt">Title </label>
                            <input type="text" name="title_name" value="" id="title_id" class="form-control" autocomplete="off">
                        </div> -->
                <div class="clearfix"></div>
                <div class="col-md-12 form-group">
                  <label class="lablefnt">Meta Title </label>
                  <input type="text" name="meta_title" id="meta_title" class="form-control" autocomplete="off">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 form-group">
                  <label class="lablefnt">Meta Keywords</label>
                  <input type="text" name="meta_keys" id="meta_keys" class="form-control" autocomplete="off">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12 form-group">
                  <label class="lablefnt">Description</label>
                  <textarea type="text" name="meta_desc" id="meta_desc" class="form-control" autocomplete="off"></textarea>
                </div>
                <div class="clearfix"></div>
                <!---------------------- submit button start--------------------->
                <div class="col-md-12">
                  <button type="submit" name="cmsBtn" value="submit" class="btn btn-success submit" id="Sec1SubmitBtn"><i class="fa fa-check-circle"></i> Submit</button>
                  <a href="">
                    <button type="button" class="btn btn-danger">
                      <i class="fa fa-times-circle" aria-hidden="true"></i>
                      Cancel
                    </button>
                  </a>
                </div>
                <!-- <div class="col-md-12">
                        <div class="box-footer">
                          <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div> -->

                <!---------------------- submit button end--------------------->
              </div>
            </form>
            <!---------------------- form end --------------------->
          </div>


        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" src="<?php echo base_url(); ?>AdminMedia/validations/js_cms/js_cms.js"></script>
<script type="text/javascript">
  $(".s_meun").removeClass("active");

    $(".content_management_active").addClass("active");
    $(".cms_active").addClass("active");

  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200,
    });
  });

/*[start::get cms data on chage]*/
  function getCMSe(cmsId) {
      if (cmsId != '') {      
        var html ="<option value='1'>Lottery</option><option value='2'>About Us</option><option value='3'>FAQ's</option><option value='4'>Contact Us</option>";
        var htmltwo ="<option value='5'>Lottery</option><option value='6'>About Us</option><option value='7'>FAQ's</option><option value='8'>Contact Us</option>";
        var htmlsthree ="<option value='9'>Lottery</option><option value='10'>About Us</option><option value='11'>FAQ's</option><option value='12'>Contact Us</option>";
        var htmlsfour ="<option value='13'>Lottery</option><option value='14'>About Us</option><option value='15'>FAQ's</option><option value='16'>Contact Us</option>";
        var htmlsfive ="<option value='17'>Lottery</option><option value='18'>About Us</option><option value='19'>FAQ's</option><option value='20'>Contact Us</option>";
                  $('#cmsTitle').html();
                     $(".summernote").summernote("code", "");
                      $("#meta_title").val("");
                      $("#meta_desc").val("");
                      $("#meta_keys").val("");
          $('#cmsTitle').find("option:gt(0)").remove();
                    if(cmsId=='1'){
                $('#cmsTitle').append(html);
              }else if(cmsId=='2'){
                $('#cmsTitle').append(htmltwo);
              }else if(cmsId=='3'){
                $('#cmsTitle').append(htmlsthree);
              }else if(cmsId=='4'){
                $('#cmsTitle').append(htmlsfour);
              }else if(cmsId=='5'){
                $('#cmsTitle').append(htmlsfive);
              }
  }
}
  /*[end::get cms data on chage]*/

  /*[start::get cms data on chage]*/
  function getCMS(cmsId) {
      if (cmsId != '') {
          var base_url = "<?php echo base_url(); ?>";
          $.ajax({
              type: "get",
              data: {cmsId: cmsId},
              url: base_url + "admin/Cn_cms/getDataCMSById",
              dataType: 'json',
              success: function (data)
              {

                  if (data != "") {
                      $(".summernote").summernote("code", data.cms_text);
                      $("#meta_title").val(data.cms_meta_title);
                      $("#meta_desc").val(data.cms_meta_desc);
                      $("#meta_keys").val(data.cms_meta_keyword);
                  } else {

                      $(".summernote").summernote("code", "");
                      $("#meta_title").val("");
                      $("#meta_desc").val("");
                      $("#meta_keys").val("");
                  }

              }
          });
      } else {
         
          $("#meta_title").val("");
          $("#meta_desc").val("");
          $("#meta_keys").val("");
      }
  }
  /*[end::get cms data on chage]*/
</script>