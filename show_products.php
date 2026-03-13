<?php
include "db.php";

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<h2>All Products</h2>

<?php
while($row = $result->fetch_assoc()){
?>

<div style="border:1px solid black; padding:10px; width:200px; margin:10px;">

<h3><?php echo $row['name']; ?></h3>

<p>Brand: <?php echo $row['brand']; ?></p>

<p>Price: <?php echo $row['price']; ?></p>

<img src="<?php echo $row['image']; ?>" width="180">

<br><br>

<a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a>

<a href="edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>

</div>

<?php
}
?>