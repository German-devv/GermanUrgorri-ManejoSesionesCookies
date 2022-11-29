<?php

include('accesoBase.php');
session_start();


if(isset($_POST)) $usuario = [];
if(isset($_POST['user'])) array_push($usuario,$_POST['user']);
if(isset($_POST['password'])) array_push($usuario,$_POST['password']);

 

$count = $base->prepare("SELECT COUNT(*) from usuarios WHERE usuario='$usuario[0]' AND clave='$usuario[1]'");
$count = $count->execute();

$_SESSION['usuario'] = $usuario[0];


header("Location: ../listado.php", true, 301);
exit();