<?php

include('accesoBase.php');

$perfil = [];

if(isset($_POST['usuario'])) array_push($perfil,$_POST['usuario']);

if(isset($_POST['clave'])) array_push($perfil,$_POST['clave']);

if(isset($_POST['nombrecompleto'])) array_push($perfil,$_POST['nombrecompleto']);

if(isset($_POST['correo'])) array_push($perfil,$_POST['correo']);

if(isset($_POST['colorfondo'])) array_push($perfil,$_POST['colorfondo']);

if(isset($_POST['tipoletra'])) array_push($perfil,$_POST['tipoletra']);


print_r($perfil);

//array_push($perfil,$_POST['usuario']); CAMBIAR ESTO






$insert = $base ->prepare("UPDATE `usuarios` SET usuario=?, clave=?, nombrecompleto=?, correo=?, colorfondo=?, tipoletra=? WHERE usuario=?");
$insert ->execute($perfil);


header("Location: ../listado.php", true, 301);
exit();
