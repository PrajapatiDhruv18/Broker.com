<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

<input type="text" name="brand" value="<?php echo $row['brand']; ?>"><br><br>

<input type="number" name="price" value="<?php echo $row['price']; ?>"><br><br>

<button type="submit" name="update">Update Product</button>

</form>

<?php

if(isset($_POST['update'])){

$name = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];

$sql = "UPDATE products 
        SET name='$name', brand='$brand', price='$price'
        WHERE id=$id";

$conn->query($sql);

header("Location: show_products.php");

}
?>