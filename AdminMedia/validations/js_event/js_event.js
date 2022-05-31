var imgflag = ($("#eventLogo").val() != "") ? false : true;
$(function () {

    $("#eventS_FORM").validate({
        ignore: [],
        onfocusout: false,
// Specify the validation rules
        rules: {
            event_name: {
                required: true,
            },
            event_date: {
                required: true,
            },
            event_category: {
                required: true,
            },
            seo_friendly_name: {
                required: true,
                remote: $('#base_url').val() + 'admin/event/Cn_event/check_unique?id=' + $("#txtid").val()
            },
            event_by: {
                required: true,
            },
            designation: {
                required: true,
            },
            address: {
                required: true,
            },
            description: {
                required: true,
            },
            // amount: {
            //     required: true,
            // },
             event_status: {
                required: true,
            },
            "event_image[]": {
                required: imgflag,
            },
           
        },
        // Specify the validation error messages
        messages: {
            event_name: {
                required: "* Please enter event name.",
            },
            event_date: {
                required: "* Please enter event date.",
            },
            event_category: {
                required: "* Please select event category.",
            },
            seo_friendly_name: {
                required: "* Please enter SEO friendly name.",
                remote: "* This seo friendly name already exists.",
            },
            address: {
                required: "* Please enter address.",
            },
            event_by: {
                required: "* Please enter event by.",
            },
            designation: {
                required: "* Please enter designation.",
            },
            description: {
                required: "* Please enter description.",
            },
            //  amount: {
            //     required: "* Please enter amount.",
            // },
             event_status: {
                required: "* Please select status.",
            },
            "event_image[]": {
                required: "* Please select image.",
            },
            

        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});
