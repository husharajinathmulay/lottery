      var base_url = $("#base_url").val();
      $.validator.addMethod("chk_unique", function (value, element) {
         var ret='';
         if($('#state').val() != ''){
           var url= $('#base_url').val() + 'admin/master/Cn_course_category/check_unique?pk_id=' + $('#txtPkey').val() + '&course_category='+ $('#course_category').val();
      // alert(url);
                $.ajax({
                    type: "get",
                    dataType: 'json',
                    url: url,
                    data: {},
                    async:false,
                    success: function (result) {
                      ret=result;
                    }
                });

                if (ret==false) {
                    return false;
                } else {
                     return true;
                }
            }
            },
            '* This course category is already exists.'
            );
      
$(function () {



    $("#submit_frm").validate({

// Specify the validation rules

        rules: {


            course_category: {

                required: true,
                chk_unique: true,

            },

        },

        // Specify the validation error messages

        messages: {

            course_category: {

                required: "* Please enter course category name.",

            },

        },

        submitHandler: function (form) { // <- pass 'form' argument in

            $(".submit").attr("disabled", true);

            form.submit(); // <- use 'form' argument here.

        }

});



});


