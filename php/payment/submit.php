<?php
session_start();
include('../CUSTOMnavandfooter.html');
require('config.php');
if (isset($_POST['stripeToken'])) {
	\Stripe\Stripe::setVerifySslCerts(false);

	$token = $_POST['stripeToken'];

	$data = \Stripe\Charge::create(array(
		"amount" => 1000,
		"currency" => "usd",
		"description" => "Payment Checkout",
		"source" => $token,
	));
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

date_default_timezone_set('Etc/UTC');
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'thebeastfitteam@gmail.com';
$mail->Password = 'SOEN287CHADS';
$mail->setFrom('thebeastfitteam@gmail.com', 'BeastFit');
$mail->addAddress($_SESSION["email"], "Customer");
$mail->isHTML(true);

$mail->Subject = 'BeastFit: Order Placed';
$mail->Body = "Dear Customer, <br> <br>
Your order of $ " + $_COOKIE['price'] + " has been placed. You will be updated with the status of your delivery. <br>
Thank you for shopping with us, we hope you had a great experience!<br> <br>
Warm regards, <br>
The BeastFit Team";

if (!$mail->send()) {
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message was sent Successfully!';
}
?>

<body style="background-color:black;">
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
	<center>
		<h1 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: white; '>Order Place Successfully!<br> </h1>
		<h2 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: grey; '>Thank you for choosing to shop with us.</h2>
		<br>
		<hr size="3" width="500">
		<br>
		<h4 style='font-family: "Monument Extended", Arial, Helvetica, sans-serif; color: white; '>An email will be sent to you shortly regarding the confirmation <br>
			Meanwhile, browse our great selection of products!</h4>
	</center>
</body>