<?php
session_start();


$_SESSION["valor"]++;


print("<pre>");
var_dump($_SESSION);
?>

<a href="index.php">segunda</a>