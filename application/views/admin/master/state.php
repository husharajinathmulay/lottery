<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row no-margin">
            <div class="col-md-4 no-pad">
                <section class="content-header">
                    <h1>Add State
                    </h1>
                </section>
                <div class="box box-primary">
                    <div class="box-body left-box-body">

                        <div class="col-md-12 form-group no-padd">
                            <label>State<span style="color: red;">*</span></label>
                            <input type="text" name="" id="" class="form-control" value="">
                            <div class="text-danger" id=""></div>
                        </div>

                        <!-- End form-group -->
                        <div class="col-md-12 form-group no-padd">
                            <button type="submit" name="submit_btn" id="submit_btn" class="btn btn-success form_btn submit leftpri city_add" data-id="submit"><i class="fa fa-check-circle"></i> Submit</button>


                            <button type="button" class="btn btn-danger form_btn"><i class="fa fa-times-circle"></i> Cancel</button>
                        </div>
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
                    <h1>State List </h1>
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
                                                            <th width="7%" class="text-center">Sr No.</th>
                                                            <th width="35%">State</th>
                                                            <th width="2%" class="text-center">Status</th>

                                                            <th width="8%" class="text-center">Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>Maharashtra</td>
                                                            <td class="text-center">
                                                                <a onclick="return confirm('Do you really want to inactive this record?')" href="http://localhost/Kuvira_Development/admin/change-city-status/30/2"><i class="fa fa-toggle-on tgle-on " aria-hidden="true" title="Active"></i>
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a onclick="return confirm('Do you really want to edit this record?')" href="#"><button type="button" class="btn btn-warning btn-xs btn-edit" id="" title="Edit">
                                                                        <i class="fa fa-pencil"></i></button></a>
                                                                <a onclick="return confirm('Do you really want to delete this record?')" href="#" class="btn btn-danger btn-xs btn-del" id="" title="Delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
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
    $(".state_active").addClass("active");
</script>