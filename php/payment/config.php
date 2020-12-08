<?php
session_start();

require('stripe-php-master/init.php');

$publishableKey = "pk_test_51HvBwvBtqDmjVy7uJUTF0jvK2tByGSmoZYW0XlBc44aNvNOLQCoAOufUyhl1TAN9BUETOhyhNrnIie0jZRoyCDoX0084Lgfs09";
$secretKey = "sk_test_51HvBwvBtqDmjVy7ud1ZhRAGy4uyuAOmjJcw7IYE0eNfnkij0Y4CY8pOpJMPaLZusRTnfWvihDCc34j3LF70nnrGf001cS9viDa";

\Stripe\Stripe::setApiKey($secretKey);
