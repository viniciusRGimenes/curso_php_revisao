<?php
session_start();


$_SESSION["valor"] = "1";


print("<pre>");
var_dump($_SESSION);
?>

<a href="segunda.php">segunda.php</a>