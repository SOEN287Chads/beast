<?php 
include('../php/connection.php');
if(isset($_GET)){
	for ($i=0; $i <count($_GET['quantityKey']); $i++) { 
		$query ="update  incart set quantity = ".$_GET['quantity'][$i]." where cart_id = ".$_GET['quantityKey'][$i];
		$result = $conn -> query($query);
	}

		if($result){
		header("location:view-cart.php");
		}
	}

