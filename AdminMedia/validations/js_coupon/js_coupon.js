
$('form').each(function () {
    if ($(this).data('validator'))
        $(this).data('validator').settings.ignore = ".note-editor *";
});
$(function () {

// $.validator.addMethod("user_email_not_same", function(value, element) {
//   return $('#max_discount').val() > $('#discount').val()
// }, "* Please enter value greater than discount");

    $("#Forms").validate({
        //ignore: [],
        ignore: ".note-editor *,:hidden:not(textarea), [contenteditable='true']:not([name])",
        //ignore: ".note-editor *",
        onfocusout: false,
// Specify the validation rules
        rules: {
            coupon_applied: {
                required: true,
            },
            // course_category: {
            //     required: true,
            // },
            // course_name: {
            //     required: true,
            // },
            coupon_code: {
                required: true,
                remote: $('#base_url').val() + 'admin/coupon_management/Cn_coupon_management/check_unique?id=' + $("#pk_id").val()
            },
            no_of_users: {
                required: true,
            },
            discount: {
                required: true,
               // user_email_not_same: true
               
            },
            // max_discount: {
            //     required: true,
            //      user_email_not_same: true
            // },
            description: {
                required: true,
            },
            fromdate: {
                required: true,
            },
            todate: {
                required: true,
            },
           
        },
        // Specify the validation error messages
        messages: {
            coupon_applied: {
                required: "* Please select coupon code applied.",
            },
            course_category: {
                required: "* Please select course category.",
            },
            course_name: {
                required: "* Please select course name.",
            },
            coupon_code: {
                required: "* Please enter coupon code.",
                remote: "* This coupon code already exists.",
            },
            no_of_users: {
                required: "* Please enter no. of users.",
            },
            discount: {
                required: "* Please enter discount.",
            },
            // max_discount: {
            //     required: "* Please enter max discount.",
            // },
            description: {
                required: "* Please enter description.",
            },
            fromdate: {
                required: "* Please select from date.",
            },
            todate: {
                required: "* Please select to date.",
            },
            

        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});

$("#course_category").change(function(){
    $.ajax({
            url: $('#base_url').val() + 'admin/coupon_management/Cn_coupon_management/get_course_name',
            data: {'course_category': $(this).val()},
            method: 'GET',
            dataType: "json",
            async: false,
            error: function (request, error) {
                //console.log(error);
            },
            success: function (data) {

                $("#course_name").empty();
                 $("#course_name").append('<option value="">Select Course Name</option>');
                 $.each(data, function(index,item){
                    
                    $("#course_name").append('<option value="'+item.pkey+'"><b>' + item.cource_name + '</b></option>');

                    });

            }
        });
});

$("#product_category").change(function(){
    $.ajax({
            url: $('#base_url').val() + 'admin/coupon_management/Cn_coupon_management/get_product_name',
            data: {'product_category': $(this).val()},
            method: 'GET',
            dataType: "json",
            async: false,
            error: function (request, error) {
                //console.log(error);
            },
            success: function (data) {

                $("#product_name").empty();
                 $("#product_name").append('<option value="">Select Product Name</option>');
                 $.each(data, function(index,item){
                    
                    $("#product_name").append('<option value="'+item.pkey+'"><b>' + item.product_name + '</b></option>');

                    });

            }
        });
});