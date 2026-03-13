<?php

include('connection.php');
session_start();
// echo "Profile";

if(isset($_POST['login_btn'])){
    // echo "btn set";

    $email = $_POST['e_mail'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `registration` WHERE `e_mail`='$email' && `password`='$password'";
    $query = mysqli_query($conn, $login);

    $data = $query->fetch_assoc();

    if($data){
        $_SESSION['e_mail'] = $data['e_mail'];
       
        header('location:homepage.html');
        // echo "Login";
    }
    else{
        echo "failed";
    }



}
