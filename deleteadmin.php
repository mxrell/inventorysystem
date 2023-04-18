<?php 

	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `proditems` where productid='$id'");
	header('location:inventoryadmin.php');
 
?>