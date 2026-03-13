<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "broker.com_parth"; // <-- apna exact DB name yahi likho

$conn = new mysqli($servername, $username, $password, $database);

// check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// optional (recommended charset)
$conn->set_charset("utf8mb4");

?>