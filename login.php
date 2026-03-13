<?php
session_start();
include "db.php";

if(isset($_POST['login_btn'])){

$email = $_POST['login_email'];
$password = $_POST['login_password'];

$sql = "SELECT * FROM registration WHERE email='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$row = mysqli_fetch_assoc($result);

if(password_verify($password,$row['password'])){

$_SESSION['user_id'] = $row['user_id'];   // ⭐ IMPORTANT
$_SESSION['user_name'] = $row['username'];
$_SESSION['user_email'] = $row['email'];

header("Location: broker_main.php");
exit();

}else{
echo "Invalid Password";
}

}else{
echo "User not found";
}

}
?>