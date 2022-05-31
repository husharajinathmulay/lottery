var imgflag = ($("#bloggerLogo").val() != "") ? false : true;
$(function () {

    $("#BLOGS_FORM").validate({
        ignore: [],
        onfocusout: false,
// Specify the validation rules
        rules: {
            blog_name: {
                required: true,
            },
            blog_date: {
                required: true,
            },
            blog_category: {
                required: true,
            },
            seo_friendly_name: {
                required: true,
                remote: $('#base_url').val() + 'admin/blog/Cn_blog/check_unique?id=' + $("#txtid").val()
            },
            blogger_image: {
                required: imgflag,
            },
            blog_by: {
                required: true,
            },
            designation: {
                required: true,
            },
            description: {
                required: true,
            },
           
        },
        // Specify the validation error messages
        messages: {
            blog_name: {
                required: "* Please enter blog name.",
            },
            blog_date: {
                required: "* Please enter blog date.",
            },
            blog_category: {
                required: "* Please select blog category.",
            },
            seo_friendly_name: {
                required: "* Please enter SEO friendly name.",
                remote: "* This seo friendly name already exists.",
            },
            blogger_image: {
                required: "* Please select image.",
            },
            blog_by: {
                required: "* Please enter blog by.",
            },
            designation: {
                required: "* Please enter designation.",
            },
            description: {
                required: "* Please enter description.",
            },
            

        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});
