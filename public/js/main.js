$( document ).ready(function() {

	$("img").one("load", function() {
			$(this).fadeIn(1000);
		}).each(function() {
		  if(this.complete)
			{
				$(this).load();
			}
		});





	$( ".cart-hover" ).hover(function() {
		  $( this ).find(".cart-elements").show(200); }
	     , function(){
	    	 $( this ).find(".cart-elements").hide();
		});


	$(".lens-pic").imageLens({ lensSize: 300 });

	$(".thumb-pic").click(function(){
		new_src=$(this).attr("src");
		old_src=$(".lens-pic").attr("src");
		$(".lens-pic").attr("src",new_src);
		$(this).attr("src",old_src);
		$( ".lens-pic").unbind();
		$(".lens-pic").imageLens({ lensSize: 300});
	});


	$(".size-ctl").change(function(){
		window.location.href = $(this).val();
	});

	$(".cart-btn").click(function(){
		window.location.href="/cart";
	});


});


function create_token()
{

	paymill.createToken({
		  number:         $('.card-number').val(),       // required
		  exp_month:      $('.card-expiry-month').val(), // required
		  exp_year:       $('.card-expiry-year').val(),  // required
		  cvc:            $('.card-cvc').val(),          // required
		  amount_int:     $('.amount').val(),   // required, e.g. "4900" for 49.00 EUR
		  currency:       $('.currency').val(),          // required
		  cardholder:     $('.card-holdername').val()    // optional
		},
		paymillResponseHandler);

}


function paymillResponseHandler(error, result) {

	 if (error) {
	   // Displays the error above the form
	   $(".payment-errors").text(error.apierror);
	   $(".payment-errors").addClass("alert");
	   $(".payment-errors").addClass("alert-danger");
	 } else {

	   // Output token
	   var token = result.token;
	   $("#token").val("");
	   $("#token").val(token);
	   $(".payfrm").submit();// Insert token into form in order to submit to server

	   // Submit form

	 }
	}
function OrderPlaced()
{
	$(".order-btn").hide();
	$("#wait-msg").show();
  $("#submit-frm").submit();
}

// Product quantity controls
$(document).on('click', '.btn-minus', function() {
	var quantityInput = $(this).siblings('input[name="quantity"]');
	var currentValue = parseInt(quantityInput.val());
	if (currentValue > 1) {
		quantityInput.val(currentValue - 1);
	}
});

$(document).on('click', '.btn-plus', function() {
	var quantityInput = $(this).siblings('input[name="quantity"]');
	var currentValue = parseInt(quantityInput.val());
	var maxValue = parseInt(quantityInput.attr('max')) || 99;
	if (currentValue < maxValue) {
		quantityInput.val(currentValue + 1);
	}
});

// Add to cart form validation and submission
$(document).on('submit', '.add-to-cart-form', function(e) {
	var quantity = parseInt($(this).find('input[name="quantity"]').val());
	var submitBtn = $(this).find('button[type="submit"]');
	
	if (quantity < 1) {
		e.preventDefault();
		alert('Please select a valid quantity.');
		return false;
	}
	
	// Show loading state
	submitBtn.prop('disabled', true);
	submitBtn.html('<img class="mb-1 me-2" src="/assets/images/shopping-bag-icon.svg"> Adding...');
	
	// Re-enable button after 2 seconds in case of slow response
	setTimeout(function() {
		submitBtn.prop('disabled', false);
		submitBtn.html('<img class="mb-1 me-2" src="/assets/images/shopping-bag-icon.svg"> Add to cart');
	}, 2000);
});

// Remove from cart with confirmation
$(document).on('click', '.remove-btn', function(e) {
	if (!confirm('Are you sure you want to remove this item from your cart?')) {
		e.preventDefault();
		return false;
	}
});

// Update cart count in navbar
function updateCartCount() {
	// Count items in cart sidebar
	var cartItemCount = $('.cart-sidebar .product-table tbody tr').length;
	// Exclude the "empty cart" row if it exists
	if ($('.cart-sidebar .product-table tbody tr td[colspan="3"]').length > 0) {
		cartItemCount = 0;
	}
	$('.cart-count').text(cartItemCount);
}

// Initialize cart count on page load
$(document).ready(function() {
	updateCartCount();
});
