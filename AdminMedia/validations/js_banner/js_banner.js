
jQuery(document).ready(function () {
    let $flag_var_for_image = false;
    let $flag_var_for_video = false;
    let $imageRequired = $("#old_banner_image").val().toString().trim() == "" ? true : false;
    var type = $("#type").val();
    if(type=  'image'){
        $('#image_hide_show_id').show();
        $('#video_hide_show_id').hide();
    } else {
        $('#image_hide_show_id').hide();
        $('#video_hide_show_id').show();
    }
    $(document).on('change', '#type', function (event) {    
        var type = $(this).val();
        if (type == 'image') {
            $('#video_hide_show_id').hide();
            $('#image_hide_show_id').show();
            $flag_var_for_image = true;
            $flag_var_for_video = false;
        }
        if (type == 'video') {
            $('#video_hide_show_id').show();
            $('#image_hide_show_id').hide();
            $flag_var_for_image = false;
            $flag_var_for_video = true;
        }
    }); 
    
    $(document).on('change', '#banner_image', function (event) {    
        var allowed_extensions = new Array("jpg","jpeg","png","bmp","JPG","JPEG","PNG","BMP");
        var file_extension = event.target.value.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
    
        for(var i = 0; i <= allowed_extensions.length; i++)
        {
            if(allowed_extensions[i]==file_extension)
            {
                var image = document.getElementById('banner_img');
                image.src = URL.createObjectURL(event.target.files[0]);  
                return true;            
            }
        }
        event.target.value = '';
        alert('Invalid file!');
    });
    $(document).on('change', '#banner_video', function (event) {    
        var video_src = $(this).val();
        var $source = $('#video_src_id');
        $source[0].src = URL.createObjectURL(this.files[0]);
        $source.parent()[0].load();
    });


  $('#type').change(function() { 
           var type=$('#type').val();
            if(type == 'image'){
                $("#banner_video").rules('remove'); 
                $("#banner_image").rules('add', {
                                 required: true,
                                 messages: {
                                       required: "* Select banner Image."
                                 }
                           });
               
            }else{
                $("#banner_image").rules('remove'); 
                $("#banner_video").rules('add', {
                                 required: true,
                                 messages: {
                                       required: "* Select banner video."
                                 }
                           });
            }
        });
    



    var fileold = ($("#old_banner_image").val() != "") ? false : true ;
    $("#submit_frm").validate({
        ignore: [],
        onfocusout: false,
        rules: {
            // banner_heading: {
            //     required: true,
            // },
            // banner_sub_heading: {
            //     required: true,
            // },
            // banner_button_name: {
            //     required: true,
            // },
            // banner_url: {
            //     required: true,
            //     url: true,
            // },
            type: {
                required: true,
            },
            // banner_image: {
            //     required: fileold,
            //     accept: "png,jpeg,jpg",
            // },
            // banner_video: {
            //     required: $flag_var_for_video,
            // },
        },
        messages: {
            // banner_heading: {
            //     required: "* Please Enter Headling .",
            // },
            // banner_sub_heading: {
            //     required: "* Please Enter Sub Headling .",                
            // },
            // banner_button_name: {
            //     required: "* Please Enter Button Name .",                
            // },
            // banner_url: {
            //     required: "* Please Enter URL .",
            //     url: "Enter valid URL",                
            // },
            type: {
                required: "* Please Select Type .",                
            },
            // banner_image: {
            //     required: "* Please Select Banner Image .",                                
            //     accept: "* Please upload png|jpeg|jpg photo only.",
            // },
            // banner_video: {
            //     required: "* Please Select Banner Video .",                
            // },
        },
        submitHandler: function (form) {
            $("#submit_btn").text("Please wait...");
            $("#submit_btn").attr("disabled", true);
            form.submit(); 
        }
    });
});

