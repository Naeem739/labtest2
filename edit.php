<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
$name=$_POST['name'];
$desi=$_POST['description'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

	
	$sql="UPDATE product SET name='$name', description='$desi' ,
	  purchase_price='$price', quantity  = '$quantity' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>