
$(function () {

    $("#Forms").validate({
        ignore: [],
        onfocusout: false,
// Specify the validation rules
        rules: {
            commission_percentage: {
                required: true,
            },
            access_status: {
                required: true,
            },
        },
        // Specify the validation error messages
        messages: {
            commission_percentage: {
                required: "* Please enter commission percentage.",
            },
            access_status: {
                required: "* Please select status.",
            },
            
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});
