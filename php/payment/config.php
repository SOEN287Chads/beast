<?php
require('stripe-php-master/init.php');

$publishableKey = "pk_test_51Hv3KJIh7QlJp2TbVDoRMwXJgl45ICmwegcfMRQ6bW5xMuJymIArtUfQR0WxILManYxUjiRuElOGC8H6Bej2nzrT00w8qNIRog";

$secretKey = "sk_test_51Hv3KJIh7QlJp2TbLxytvLvuJnaGD9H2d4hqAJZtgJgmxuUSbqQcK63tATff0T1dX6teU0QIlUbFQQVVfOSUUbaC007lgI5UBK";

\Stripe\Stripe::setApiKey($secretKey);
