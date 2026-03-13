<?php
include("connection.php");

if(isset($_POST['reg_btn'])){

$fullname = trim($_POST['fullname']);
$email    = trim($_POST['email']);
$password = $_POST['password'];
$cpass    = $_POST['c_password'];

if($fullname=="" || $email=="" || $password==""){
    echo "All fields required";
    exit;
}

if($password !== $cpass){
    echo "Password mismatch";
    exit;
}

/* CHECK EMAIL */
$check = $conn->prepare("SELECT user_id FROM registration WHERE email=?");
$check->bind_param("s",$email);
$check->execute();
$check->store_result();

if($check->num_rows > 0){
    echo "Email already exists";
    exit;
}

/* HASH PASSWORD */
$hash = password_hash($password,PASSWORD_DEFAULT);

/* INSERT */
$stmt = $conn->prepare("INSERT INTO registration (username,email,password) VALUES (?,?,?)");
$stmt->bind_param("sss",$fullname,$email,$hash);

if($stmt->execute()){
    echo "Registration Successful";
}else{
    echo "Database Error";
}

}
?>