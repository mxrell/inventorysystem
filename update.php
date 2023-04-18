<?php

	include('conn.php');
	$id=$_GET['id'];	
	$product=$_POST['product'];
	$size=$_POST['size'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	
	mysqli_query($conn,"update `proditems` set product='$product', size='$size', stock='$stock', price='$price' where productid='$id'");
	header('location:inventory.php');
     
?>