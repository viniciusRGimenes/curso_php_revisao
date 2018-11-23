<?php
    session_start();

    if($_SESSION["usuario_ja_autenticado"] != 1){
        header("location:login.php");
    }
?>