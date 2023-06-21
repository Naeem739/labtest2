



<!DOCTYPE html>
<html>
<head>
  <title>Product Form</title>

  <link rel="stylesheet" href="insert_style.css">
</head>
<body>
  <h1>Product Form</h1>
  
  <form method="POST" action="insertData.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br><br>
    
    <label for="purchase-price">Purchase Price:</label>
    <input type="number" id="purchase-price" name="purchase-price" step="0.01" required><br><br>
    
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" required><br><br>
    
    <input type="submit"  value="submit">
  </form>
</body>
</html>
