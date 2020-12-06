<?php
include('../navandfooter.html');
require('config.php');
?>

<body style="background-color:black;">
	<form action="submit.php" method="post">
		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<center>
			<h2 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: white; '>Place Your Order:</h2>
			<br>
			<script src=" https://checkout.stripe.com/checkout.js"
                        class="stripe-button"
                        data-key="<?php echo $publishableKey ?>"
                        data-amount="1000"
                        data-name="Beast"
                        data-description="Payment Checkout"
                        data-currency="usd"
                        data-shipping-address="true"
                        data-email="sphoetify.buzzness@gmail.com">
			</script>
		</center>
	</form>
</body>
