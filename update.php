<?php 
include('Connection.php');

if(isset($_POST['Update_btn'])){
    // echo "Btn set";

     $update_id = $_POST['fetch_id'];

    //echo $update_id;

     $update = "SELECT * FROM `registration` WHERE `user_id`= $update_id";
    $query = mysqli_query($conn, $update);

    $row= $query-> fetch_assoc();   

    //echo $row['table_fname'];

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="updateprocces.php" method= "POST">
        <h1>Update Form</h1>

        <label for="">ID</label>
        <input type="text" value = "<?php echo $update_id; ?>" name="id"><br><br>

        <label for="">First Name</label>
        <input type="text" value ="<?php echo $row['username'];?>" name="name"><br><br>

        <label for="">Email</label>
        <input type="text" value ="<?php echo $row['email'];?>" name="email">

        <input type="submit" value="Update" name="update_btn">
    </form>
</body>

</html>

<?php 

}

?>