

$(function () {

    $("#Forms").validate({
        ignore: [],
        onfocusout: false,
// Specify the validation rules
        rules: {
            stock_added_date: {
                required: true,
            },
            remark: {
                required: true,
            },
            
           
        },
        // Specify the validation error messages
        messages: {
            stock_added_date: {
                required: "* Please select date.",
            },
             remark: {
                required: "* Please enter remark.",
            },
        },
        submitHandler: function (form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
});

});
// start::Add multiple product
var selcoursetypeIDSelect = document.getElementById("product_copy").innerHTML;

    ProductList = selcoursetypeIDSelect.replace('selected=""', '');


$("#add_product").click(function(){
  var htms='';
  htms += '<tr class="product_tr" >';
    htms += '<td class="text-center sr_no"></td>';
    htms += '<td> <select class="form-control product_cls" name="" id=""  style="color:#495057 !important;">';
    htms+= ProductList;
  htms += '</select><div generated="true" class="error pname_cls"></div></td>';
    htms += '<td class="current_quantity" id="">0';
    htms += '<input type="hidden" class="cur_qty" value="0"></td>';
    htms += '<td><input type="text"  min="1" class="form-control new_qty" name="" id="" placeholder="" value=""><div generated="true" class="error qty_error"></div></td>';
    htms += '<td class="text-center"><a onclick="delete_row(this.id)" class="btn btn-danger btn-xs btn-del product_del_cls" name="" id="" title="Delete">';
    htms += '<i class="fa fa-trash"></i>';
    htms += '</a></td>';
    htms += '</tr>';

    var prod_count = $("#total_product").val();
    prod_count =parseInt(prod_count) + 1;
    $("#total_product").val(prod_count);

    $("#product_list").append(htms);

  assign_name_id();
  

    $(".new_qty").each(function() {

      $(this).keyup(function(){
          
        avg = calculateSum();
        //.toFixed() method will roundoff the final sum to 2 decimal places
            $("#ttl_qty").text(avg.toFixed(2));
            $("#total_quantity").val(avg.toFixed(2));
      });
    });

    //start::get current quantity of product 
  $(".product_cls").change(function(){
    
    var id = this.id.split('_')[2];
    if(id != ''){
    if($(this).val() != '' && $(this).val() != null){
    $.ajax({
              url: $('#base_url').val() + 'admin/stock_management/Cn_stock_management/get_product_quantity',
              data: {'product_id': $(this).val()},
              method: 'GET',
              dataType: "json",
              async: false,
              error: function (request, error) {
                  //console.log(error);
              },
              success: function (data) {
                $('option').prop('disabled', false);
                $('select .product_cls').each(function() {
                  var val = this.value;
                  $('select .product_cls').not(this).find('option').filter(function() {
                    return this.value === val;
                  }).prop('disabled', true);
                });

                if(data.current_quantity == null){
                  $("#current_quantity_"+id).html('0 <input type="hidden" name="current_quantity'+id+'" class="cur_qty" value="0">');
                  
                }else{
                  $("#current_quantity_"+id).html(data.current_quantity+'<input type="hidden" name="current_quantity'+id+'" class="cur_qty" value="'+data.current_quantity+'">');
                  
                }
              }
          });
        }
    }
  });
  //end::get current quantity of product
$('select .product_cls').on('change', function() {
  $('option').prop('disabled', false);
  $('select .product_cls').each(function() {
    var val = this.value;
    $('select .product_cls').not(this).find('option').filter(function() {
      return this.value === val;
    }).prop('disabled', true);
  });
}).change();

}); //end::add_product click fun
function assign_name_id()
{
  var i=0, j=0, k=0, l=0, m=0, n=0, p=1, q=0, r=0;
    $('.product_cls').each(function () {
      
      $(this).attr('name','product_id_'+i);
      $(this).attr('id','product_id_'+i);
      i++;
    });

    $('.new_qty').each(function () {
      
      $(this).attr('name','product_quantity_'+j);
      $(this).attr('id','product_quantity_'+j);
      j++;
    });


    $('.product_del_cls').each(function () {
      $(this).attr('id','product_del_'+k);
      k++;
    });
    

    $('.current_quantity').each(function () {
      
      $(this).attr('id','current_quantity_'+l);
      l++;
    });

    $('.product_tr').each(function () {
      $(this).attr('id','product_div'+m);
      m++;
    });

    $('.cur_qty').each(function () {
      $(this).attr('id','current_quantity'+n);
      n++;
    });
    
    $('.sr_no').each(function () {
      $(this).html(p);
      p++;
    });


    $('.qty_error').each(function () {
      
      $(this).attr('for','product_quantity_'+q);
      q++;
    });

    $('.pname_cls').each(function () {
      
      $(this).attr('for','product_id_'+r);
      r++;
    });

    set_validations();
}
function set_validations() {
  
    var ind = 1;
        $('[name*="product_id_"]').each(function () {

        $(this).rules('add', {
            required: true,
            messages: {
                required: "* Select product name."
            }
        });
        ind++;
    });

    var ind = 1;
   
    $('[name*="product_quantity_"]').each(function () {
        $(this).rules('add', {
            required: true,
            messages: {
                required: "* Enter quantity."
            }
        });
        ind++;
    });
}
function delete_row(cls){ 
    if (confirm('Do you really want to delete this row?')) {
   var id= cls.split('_')[2];
   $("#product_div"+id).remove();
   assign_name_id();
   var prod_count = $("#total_product").val();
    prod_count =parseInt(prod_count) - 1;
    $("#total_product").val(prod_count);
           avg = calculateSum('new_qty');
            $("#ttl_qty").text(avg.toFixed(2));
            $("#total_quantity").val(avg.toFixed(2));
            avg = calculateSum();
            $("#ttl_qty").text(avg.toFixed(2));
            $("#total_quantity").val(avg.toFixed(2));

    $(".new_qty").each(function() {

      //$(this).keyup(function(){
          
        avg = calculateSum('new_qty');
        //.toFixed() method will roundoff the final sum to 2 decimal places
            $("#ttl_qty").text(avg.toFixed(2));
            $("#total_quantity").val(avg.toFixed(2));
      //});
    });  
    }
}
// start::runtime addtion of textboxes
  
$(".new_qty").each(function() {

      $(this).keyup(function(){
          
        avg = calculateSum();
        //.toFixed() method will roundoff the final sum to 2 decimal places
            $("#ttl_qty").text(avg.toFixed(2));
            $("#total_quantity").val(avg.toFixed(2));
      });
    });   
  
function calculateSum() {
    var sum = 0;
    
    //iterate through each textboxes and add the values
    $(".new_qty").each(function() {

      //add only if the value is number
      if(!isNaN(this.value) && this.value.length!=0) {
          
        sum += parseInt(this.value);
      }

    });
    return sum;
    
  }
// end::runtime addtion of textboxes
//start::get current quantity of product 
$(".product_cls").change(function(){
  var id = this.id.split('_')[2];
    if(id != ''){
    if($(this).val() != '' && $(this).val() != null){
        $.ajax({
            url: $('#base_url').val() + 'admin/stock_management/Cn_stock_management/get_product_quantity',
            data: {'product_id': $(this).val()},
            method: 'GET',
            dataType: "json",
            async: false,
            error: function (request, error) {
                //console.log(error);
            },
            success: function (data) {
              if(data.current_quantity == null){
                  $("#current_quantity_"+id).html('0 <input type="hidden" name="current_quantity'+id+'" class="cur_qty" value="0">');
                  
                }else{
                  $("#current_quantity_"+id).html(data.current_quantity+'<input type="hidden" name="current_quantity'+id+'" class="cur_qty" value="'+data.current_quantity+'">');
                  
                }
            }
        });
      }
    }
});
//end::get current quantity of product
