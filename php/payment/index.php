<?php
require('config.php');
?>
<form action="submit.php" method="post">

	<script src="https://checkout.stripe.com/checkout.js" 
		class="stripe-button" data-key="<?php echo $publishableKey ?>" 
		data-amount="1000" 
		data-name="Beast" 
		data-description="Payment Checkout" 
		data-currency="usd" 
		data-email="">
	</script>

</form>
