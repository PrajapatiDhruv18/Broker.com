<?php 
include('Connection.php');

// echo "Procces";
if(isset($_POST['update_btn'])){

    // echo "btn set";

    $update_id = $_POST['id'];
    // echo  $update_id;
    $update_name = $_POST['name'];
    // echo "$update_name";
    $update_email = $_POST['email'];
    // echo "$update_email";
    

     $update="UPDATE `registration` SET `username`='$update_name', `email`='$update_email' WHERE `user_id`='$update_id'";
    $query = mysqli_query($conn,$update);

    if($query){
        // echo "data update";
        header("location:fetch.php");
    }

 }
?>