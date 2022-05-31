      var base_url = $("#base_url").val();
      $.validator.addMethod("chk_unique", function (value, element) {
         var ret='';

           var url= $('#base_url').val() + 'admin/master/Cn_city/check_unique?pk_id=' + $('#txtPkey').val() + '&state_id='+ $('#state_id').val()+ '&city='+ $('#city').val();
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
            },
            '* This city is already exists in this state.'
            );
      
$(function () {
    $("#submit_frm").validate({
// Specify the validation rules
        rules: {

            city: {

                required: true,
                chk_unique: true,
            },
            state_id: {

                required: true,

            },

        },

        // Specify the validation error messages

        messages: {

            city: {

                required: "* Please enter city name.",

            },
            state_id: {

                required: "* Please select state name.",

            },

        },

        submitHandler: function (form) { // <- pass 'form' argument in

            $(".submit").attr("disabled", true);

            form.submit(); // <- use 'form' argument here.

        }

});



});


