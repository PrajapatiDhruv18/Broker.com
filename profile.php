<?php
session_start();

if(!isset($_SESSION['user_name'])){
header("Location: broker_main.php");
exit();
}

$name = $_SESSION['user_name'];
$email = $_SESSION['user_email'];
$first_letter = strtoupper($name[0]);
?>

<!DOCTYPE html>
<html>
<head>

<title>User Profile</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
}

.navbar{
background:#007bff;
color:white;
padding:15px 20px;
display:flex;
justify-content:space-between;
align-items:center;
}

.back-btn{
color:white;
text-decoration:none;
font-weight:bold;
}

.profile-container{
max-width:700px;
margin:40px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.avatar{
width:80px;
height:80px;
background:#007bff;
color:white;
font-size:35px;
display:flex;
align-items:center;
justify-content:center;
border-radius:50%;
margin:auto;
}

h2{
text-align:center;
margin:10px 0;
}

.email{
text-align:center;
color:gray;
margin-bottom:30px;
}

form{
display:flex;
flex-direction:column;
gap:15px;
}

input{
padding:10px;
border:1px solid #ccc;
border-radius:5px;
}

button{
padding:10px;
background:#007bff;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

.logout{
background:red;
margin-top:20px;
}

</style>

</head>

<body>

<div class="navbar">

<a href="broker_main.php" class="back-btn">⬅ Back</a>

<div>My Profile</div>

</div>

<div class="profile-container">

<div class="avatar">
<?php echo $first_letter; ?>
</div>

<h2><?php echo $name; ?></h2>

<div class="email">
<?php echo $email; ?>
</div>

<form action="update_profile.php" method="POST">

<label>Username</label>
<input type="text" name="username" placeholder="New Username">

<label>Email</label>
<input type="email" name="email" placeholder="New Email">

<label>New Password</label>
<input type="password" name="password" minlength="8" placeholder="Enter new password">

<label>Re-enter Password</label>
<input type="password" name="confirm_password" minlength="8" placeholder="Re-enter password">

<button type="submit">Update Profile</button>

</form>

<a href="logout.php">
<button class="logout">Logout</button>
</a>

</div>

</body>
</html>