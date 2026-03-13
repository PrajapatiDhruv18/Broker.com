<?php 
include('Connection.php');

if(isset($_POST['delete_btn'])){
    // echo "btn set";
    $delete_id = $_POST['fetch_id'];

    // echo $delete_id;

    $delete = "DELETE FROM `registration_table` WHERE `reg_id`='$delete_id'";
    $query = mysqli_query($conn, $delete);

    if($query){
        // echo "Data Delete";
         header("location:fetch.php");
    }
}



?>