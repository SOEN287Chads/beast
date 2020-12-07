<?php
include('../navandfooter.html');
require('config.php');
?>


<body style="background-color:black;">
    <form action="submit.php" method="post">
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <center>
            <h1 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: white; '>Place your order: <br> <br> </h1>
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>" data-amount="1000" data-name="Beast" data-description="Payment Checkout" data-currency="usd" data-email="thebeastfitteam@gmail.com">
            </script>
        </center>
    </form>