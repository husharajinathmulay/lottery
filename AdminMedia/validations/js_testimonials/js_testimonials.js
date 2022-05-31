

$(document).ready(function(){
var base_url = $("#base_url").val();
         $.validator.addMethod("chk_unique", function (value, element) {
            var ret='';
            if($('#testimonial_name').val() != ''){
              var url= $('#base_url').val() + 'admin/testimonials/Cn_testimonials/check_unique?test_id=' + $('#test_id').val() + '&testimonial_name='+ $('#testimonial_name').val();
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
               '* This name is already exists.'
               );
var fileold = ($("#fileold").val() != "") ? false : true ;

$("#FormTestimonials").validate({
// Specify the validation rules
ignore: [],
  	onfocusout: false,
    rules: {
			testimonial_name: {
			    required: true,
			    chk_unique: true,
			},
			designation: {
			    required: true,
			},
			testimonial_text: {
			    required: true,
			},
			
			testimonial_image:{
				required: fileold,
		        accept:'png|jpg|jpeg',
		      },
		 //      team_description: {
			//     required: true,
			// },
    },
    // Specify the validation error messages
    messages: {

		testimonial_name: {
		    required: "* Please enter name.",
		},
		designation: {
		    required: "* Please enter designation.",
		},

		testimonial_text: {
		    required: "* Please enter text.",
		},
		testimonial_image:{
			required: "* Please select image.",
	        accept:'file type must be JPG|JPEG|PNG',
	    },
	
	
    },
  	submitHandler: function (form) {
		   $("#submitt").attr("disabled", true);
		    form.submit(); // <- use 'form' argument here.
		}
});
	
	

});
