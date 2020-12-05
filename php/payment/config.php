<?php
require('stripe-php-master/init.php');

$publishableKey = "";

$secretKey = "";

\Stripe\Stripe::setApiKey($secretKey);
