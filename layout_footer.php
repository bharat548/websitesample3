<script>
$(document).ready(function(){
	
	
	// update quantity button listener
$('.update-quantity-form').on('submit', function(){
 
    // get basic information for updating the cart
    var id = $(this).find('.product-id').text();
    var quantity = $(this).find('.cart-quantity').val();
 
    // redirect to update_quantity.php, with parameter values to process the request
    window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
    return false;
});
    // add to cart button listener
    $('.add-to-cart-form').on('submit', function(){
 
        // info is in the table / single product layout
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
 
        // redirect to add_to_cart.php, with parameter values to process the request
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
});
</script>