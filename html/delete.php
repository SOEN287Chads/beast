<?php

include('../php/connection.php');
if(isset($_GET)){
$query ="DELETE FROM `incart` WHERE cart_id = ".$_GET['cart_id'];
		$result = $conn -> query($query);
		if($result){
			header("location:view-cart.php");
		}
	}

