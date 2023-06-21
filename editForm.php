<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$desi=$arr['description'];
	$price=$arr['purchase_price'];
	$quantity = $arr['quantity']; 
?>



<!DOCTYPE html>
<html>
<head>
  <title>Product Form</title>

  <link rel="stylesheet" href="insert_style.css">
</head>
<body>
  <h1>Product Form</h1>
  
  <form method="POST" action="edit.php?d_id=<?php echo $id?>">

  <label>Name</label>
 <input type="text" value="<?php echo $nam ?>" name="name"> <br> <br>


    
    <label for="description">Description:</label>
    <textarea id="description" name="description" value="<?php echo $desi ?>"></textarea><br><br>
    
    <label for="purchase-price">Purchase Price:</label>
    <input type="number" id="purchase-price" name="price" step="0.01" value="<?php echo $price ?>"><br><br>
    
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" value="<?php echo $quantity ?>"><br><br>
    
    <input type="submit"  value="submit">
  </form>
</body>
</html>

