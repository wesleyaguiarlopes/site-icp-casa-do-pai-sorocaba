<?php
    session_start();

    if(!$_SESSION['username'] == true){
            unset($_SESSION['username']);
            header("Location: login");
    }
?>