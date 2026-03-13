<?php include "db.php"; ?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required><br><br>
    <input type="text" name="brand" placeholder="Brand" required><br><br>
    <input type="number" name="price" placeholder="Price" required><br><br>
    <input type="file" name="image" required><br><br>
    <button type="submit" name="submit">Upload Product</button>
</form>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];

    $imageName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];
    
    $folder = "images/" . time() . "_" . $imageName;
    move_uploaded_file($tempName, $folder);

    $sql = "INSERT INTO products (name, brand, price, image)
            VALUES ('$name', '$brand', '$price', '$folder')";

    $conn->query($sql);

    echo "Product Uploaded Successfully!";
}
?>