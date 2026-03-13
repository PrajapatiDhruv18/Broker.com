<?php
session_start();
session_destroy();

header("Location: broker_main.php");
exit();
?>