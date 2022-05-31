//Add validation method to check for an empty Award Description
    $.validator.addMethod("htmlEditorEmpty", function(value, element) {
        
        return this.optional(element) || value.summernote('isEmpty');
    }, "Please enter details");

jQuery(document).ready(function () {

    $("#cmsFrm").validate({
        ignore: [],
        onfocusout: false,
        rules: {
            cmsTitle: {
                required: true,
            },
            description:{
                required: true,
            },
        },
        messages: {
            cmsTitle: {
                required: "* Please select page title .",
            },
            description: {
                required: "* Please enter content.",
            },
        },
        errorPlacement: function (error, element) {

        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
    });
});

