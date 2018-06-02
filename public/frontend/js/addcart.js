$(document).on('click', '.addvendorproduct', function() {
	productid = $(this).attr('id');
	productqty = $('.productqty').val();
  paymentid = $('input:radio.payment:checked').val();
	url = '/addvendorproduct';
	 $.get(
      url,
      { paymentid : paymentid,
        productid: productid,
      	productqty: productqty},
      function(data) {
        window.location = '/mycart';
      });
})
 
$(document).on('click', '.addproducttocart', function() {
  productid = $(this).attr('id');
  productqty = 1;
  url = '/addvendorproduct';
  paymentid = $('input:radio.payment:checked').val();
   $.get(
      url,
      {paymentid : paymentid,
        productid: productid,
        productqty: productqty},
      function(data) {
        $('.add'+productid).html("<span class='bg-primary' style='font-size: 10px; padding: 4px'>ADDED SUCCESSFULLY</span>");
      });
})

$(document).on('click', '.addproducttocart1', function() {
  productid = $(this).attr('id');
  productqty = 1;
  url = '/addvendorproduct';
  paymentid = 1;
   $.get(
      url,
      {paymentid : paymentid,
        productid: productid,
        productqty: productqty},
      function(data) {
        $('.add'+productid).html("<span class='bg-primary' style='font-size: 10px; padding: 4px'>ADDED SUCCESSFULLY</span>");
      });
})

$(document).on('focus', '.shoppingqty', function() {
  id = $(this).attr('id');
  $('.upd'+id).show();
})

$(document).on('click', '.updateproduct', function() {
  productid = $(this).attr('id');
  quantity = $('.prod'+productid).val();
  url = '/updateproduct';

  var postData = {
    "productid" : productid,
    "quantity" : quantity
};

  $.get(
      url,
      {productid: productid,
        quantity: quantity},
      function(data) {
        location.reload();
      });

  // $.ajax({
  //     type: "GET",
  //     url: url,
  //     data: postData, 
  //     success: function(result){
  //         $('.data').html(result); 
  //     }
  // });
})

$(document).on('click', '.paywithwallet', function() {
  password = $('.password').val();
  code = $('#code').val();
  url = '/paywithwallet';
  if (password.length > 0) {


    $.get(
      url,
      {password: password,
        code: code},
      function(data) {
        if (data == 'false') {
          $('.failuretext').show();
        }else{
          window.location = '/ordersummary/'+data;
        }
      });

  }
})




















