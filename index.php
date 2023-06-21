<?php
	include "dbconnect.php";
	
	$s="SELECT * FROM product";
	$result=$conn->query($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body>	
	
		<center>
			<h1> Product_List</h1>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase_price</th>
					<th>Quantity</th>
					<th>EDIT</th>
					<th>Delete</th>

					
				</tr>
				<?php
		
				while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$desi=$r['description'];
					$price=$r['purchase_price'];
					$q = $r['quantity']; 
					//$dob = $r["password"]; 
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $desi . "</td>";
						echo "<td>". $price . "</td>";
						echo "<td>". $q . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'>Edit</a></td>";
					    echo "<td> <a href='delete.php?del_id=$idd'>Delete</a></td>";
					echo "</tr>";
				}
				?>
				
				<tr>
					<td colspan="5"><a href="insert.php">Insert Record</a></td>
					<td colspan="5"><a href="logout.php">Logout</a></td>
				</tr>
			</table>
		</center>
	
</body>
</html>




