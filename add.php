<?php
	
	include('conn.php');	
	$product=$_POST['product'];
	$size=$_POST['size'];
	$stock=$_POST['stock'];
	$price=$_POST['price'];
		
	mysqli_query($conn,"insert into `proditems` (product,size,stock,price) values ('$product','$size','$stock','$price')");
	mysqli_query($conn,"insert into `archive` (product,size,stock,price) values ('$product','$size','$stock','$price')");
	header('location:inventory.php');
     
?>