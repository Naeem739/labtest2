
<?php
include "dbconnect.php";

$name=$_POST['name'];
$des=$_POST['description'];
$price=$_POST['purchase-price'];
$quantity=$_POST['quantity'];

$sql = "INSERT INTO product (id,name, description,purchase_price ,quantity ) 
		VALUES (NULL, '$name', '$des', '$price','$quantity')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

