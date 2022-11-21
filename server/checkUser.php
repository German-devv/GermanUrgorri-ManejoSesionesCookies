<?php

session_start();


if(!isset($_SESSION['usuario'])) {

    header("Location: login.php", true, 301);
    exit();

}



