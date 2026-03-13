<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2><?php echo $row['name']; ?></h2>
<img src="<?php echo $row['image']; ?>" width="300">
<p>Brand: <?php echo $row['brand']; ?></p>
<p>Price: ₹<?php echo $row['price']; ?></p>