
$(function () {

    $("#FormFAQ").validate({
// Specify the validation rules
        rules: {
            question: {
                required: true,
            },
        answer: {
                required: true,
            },
        },
        // Specify the validation error messages
        messages: {
            question: {
                required: "* Please enter question.",
            },
            answer: {
                required: "* Please enter answer.",
            },
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});
