<?php 
include('../php/connection.php');
session_start();
if(isset($_GET['product_id'])){
	$query = "select * from incart where product_id = ".$_GET['product_id'];
	$result = $conn -> query($query);
	if($result -> num_rows != 0){
		$_SESSION["already_incart"] = 1;
		header("location:product_page.php");
	}
	else{
		$query ="insert into incart (product_id) values(".$_GET['product_id'].")";
		$result = $conn -> query($query);
		if($result){
			header("location:view-cart.php");
		}
	}

}