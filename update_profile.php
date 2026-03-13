<?php
session_start();
include "db.php";

$id = $_SESSION['user_id'];

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);

if($username == "" || $email == ""){
echo "Username and Email cannot be empty";
exit();
}

if($password != ""){

if(strlen($password) < 8){
echo "Password must be at least 8 characters";
exit();
}

if($password != $confirm_password){
echo "Passwords do not match";
exit();
}

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE registration 
SET username='$username',
email='$email',
password='$password'
WHERE user_id='$id'";

}else{

$sql = "UPDATE registration 
SET username='$username',
email='$email'
WHERE user_id='$id'";

}

mysqli_query($conn,$sql);

$_SESSION['user_name'] = $username;
$_SESSION['user_email'] = $email;

header("Location: profile.php");
?>