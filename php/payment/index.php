<?php
session_start();
include('../CUSTOMnavandfooter.html');
require('config.php');

?>

<body style="background-color:black;">
    <form action="submit.php" method="post">
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <center>
            <h1 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: white; '>Place your order: <br> <br> </h1>
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>" data-amount="<?php echo $_COOKIE['Total'] * 100 ?>" data-name="Beast" data-description="Payment Checkout" data-currency="usd" data-email="<?php echo $_SESSION["email"] ?>"> </script>
        </center>
    </form>
</body>