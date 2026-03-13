<?php
include "db.php";

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo '
    <div class="card" onclick="openProduct(' . $row['id'] . ')">
        <div class="img">
          <img src="' . $row['image'] . '" 
     style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
        </div>

        <div class="details">
            <h3>' . $row['name'] . '</h3>
            <div>Brand: ' . $row['brand'] . '</div>
            <div class="price">₹' . $row['price'] . '</div>
        </div>
    </div>';
}
?>