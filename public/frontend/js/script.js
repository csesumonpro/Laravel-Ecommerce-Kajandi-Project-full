$(document).ready(function() {
	$('.productcategory').bind('change', function () {
		var val = $(this).val();
		url = '/admin/changecat';
		$.get(
			url,
      {val: val},
      function(data) {
        $('#subcat').html(data);
      });
	});


$('.getproduct').bind('change', function() {
	var val = $(this).val();
	url = '/admin/getproduct';

	$.get(
			url,
      {val: val},
      function(data) {
        $('.viewproduct').html(data);
      });
})

});
$('.login').click(function() {
	loginemail = $('.loginemail').val();
	loginpassword = $('.loginpassword').val();
	if (loginemail.length < 1) {
		$('.emailerror').show();
		$('.passworderror').hide();
	}else if(loginpassword.length < 1){
		$('.emailerror').hide();
		$('.passworderror').show();
	}else{
		url = '/loginuser'
		$.get(
			url,
      {loginemail: loginemail,
      	loginpassword: loginpassword},
      function(data) {
      	if (data == 'true') {
      		location.reload();
      	}else{
		$('.passworderror').hide();
		$('.emailerror').hide();
      		$('.loginformerror').show();
      	}
      });
	}
})

$('.createaccount').click(function() {
	name = $('.name').val();
	email = $('.email').val();
	password = $('.password').val();
	repeatpassword = $('.repeatpassword').val();
	phonenumber = $('.phonenumber').val();

	if (name.length < 1) {
		$('.nameerror').show();
		$('.emailerror1').hide();
		$('.emailerror2').hide();
		$('.phoneerror').hide();
		$('.passworderror').hide();
		$('.repeatpassworderror').hide();
		$('.passwordcorrespond').hide();
	}else if(email.length < 1){
		$('.emailerror1').show();
		$('.nameerror').hide();
		$('.emailerror2').hide();
		$('.phoneerror').hide();
		$('.passworderror').hide();
		$('.repeatpassworderror').hide();
		$('.passwordcorrespond').hide();
	}else if (!isValidEmailAddress(email)) {
		$('.emailerror2').show();
		$('.nameerror').hide();
		$('.emailerror1').hide();
		$('.phoneerror').hide();
		$('.passworderror').hide();
		$('.repeatpassworderror').hide();
		$('.passwordcorrespond').hide();
	}else if (phonenumber.length < 1) {
		$('.phoneerror').show();
		$('.nameerror').hide();
		$('.emailerror1').hide();
		$('.emailerror2').hide();
		$('.passworderror').hide();
		$('.repeatpassworderror').hide();
		$('.passwordcorrespond').hide();
	}else if(password.length < 1){
		$('.passworderror').show();
		$('.nameerror').hide();
		$('.emailerror1').hide();
		$('.emailerror2').hide();
		$('.phoneerror').hide();
		$('.repeatpassworderror').hide();
		$('.passwordcorrespond').hide();
	}else if (repeatpassword.length < 1) {
		$('.repeatpassworderror').show();
		$('.nameerror').hide();
		$('.emailerror1').hide();
		$('.emailerror2').hide();
		$('.phoneerror').hide();
		$('.passworderror').hide();
		$('.passwordcorrespond').hide();
	}else if (password != repeatpassword) {
		$('.passwordcorrespond').show();
		$('.nameerror').hide();
		$('.emailerror1').hide();
		$('.emailerror2').hide();
		$('.phoneerror').hide();
		$('.passworderror').hide();
		$('.repeatpassworderror').hide();
	}
	else{
		url = '/signupuser'
		$.get(
			url,
      {name: name,
      	email: email,
      	password: password,
      	repeatpassword: repeatpassword,
      	phonenumber: phonenumber},
      function(data) {
      	if (data == 'true') {
      		location.reload();
      	}
      });
	}
})

function isValidEmailAddress(emailAddress) {

        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

    return pattern.test(emailAddress);
        };

 $('.orderworkplace').change(function() {
 	val = $(this).val();
 	ordernumber = $(this).attr('id');
 	url = '/changeoderworkplace';
 	if (ordernumber.length > 0) {
 		$.get(
			url,
      {val: val,
      	ordernumber: ordernumber},
      function(data) {
      	
      });
 	}
 	
 })

 $('.ordersdetailsworkspcae').change(function() {
 	val = $(this).val();
 	order_id = $(this).attr('id');
 	url = '/changeoderdetailsworkplace';
 	if (order_id.length > 0) {
 		$.get(
			url,
      {val: val,
      	order_id: order_id},
      function(data) {
      	
      });
 	}
 	
 })

 $('.searchsite').bind('keyup', function() {
 	$('div').remove('.tt-dropdown-menu');
 	$('.tt-dropdown-menu').hide();
 	val = $(this).val();
 	url = '/searchsiterequest';
 	if (val != '') {
 		$.get(
			url,
      {val: val},
      function(data) {
      	$('.searchsite').after(data);
      });
 	}
 })


$('html body').click(function() {
 	$('.tt-dropdown-menu').hide();
})

$(document).ready(function(){
    $('#searchbox').selectize({
        valueField: 'url',
        labelField: 'name',
        searchField: ['name'],
        maxOptions: 10,
        options: [],
        create: false,
        render: {
            option: function(item, escape) {
                return '<div style=padding: 0; margin: 0><img style=width:30px src="/'+ item.image +'">' +escape(item.name)+'</div>';
            }
        },
        optgroups: [
            {value: 'product', label: 'Products'},
            {value: 'category', label: 'Categories'}
        ],
        optgroupField: 'class',
        optgroupOrder: ['product','category'],
        load: function(query, callback) {
            if (!query.length) return callback();
            $.ajax({
                url: '/searchautocomplete',
                type: 'GET',
                dataType: 'json',
                data: {
                    q: query
                },
                error: function() {
                    callback();
                },
                success: function(res) {
                    callback(res.data);
                }
            });
        },
        onChange: function(){
            window.location = this.items[0];
        }
    });
});

$(document).ready(function(){
$('.iCheck-helper').click(function() {
	val = $('.form').serialize();
	category = $('#category').val();
	price = $('#price-slider').val();
	url = '/searchcategory'
	$('body').addClass('overlay');
	$.get(
      url,
      {val : val,
      	category : category,
      	price : price
      },
      function(data) {
	$('body').removeClass('overlay');
      	$('#data').html(data);
      });
})

$('.wishlist').click(function() {
	id = $(this).attr('id');
	url = '/addtowhishlist';
	$.get(
      url,
      {id : id},
      function(data) {
	$('.wishlist').addClass('wishlistadd');
      	$('#data').html(data);
      });
})

$('.cardpayment').click(function() {
	code = $('#code').val();
	url = '/validatepayment';
	$.get(
      url,
      {code : code},
      function(data) {
      	window.location = '/ordersummary/'+data;
      });
})

})












