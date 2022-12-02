<?php

include('accesoBase.php');



if(isset($_POST)) $usuario = [];
if(isset($_POST['user'])) array_push($usuario,$_POST['user']);
if(isset($_POST['password'])) array_push($usuario,$_POST['password']);


$count = $base->prepare("SELECT COUNT(*) from usuarios WHERE usuario='$usuario[0]' AND clave='$usuario[1]'");
$count->execute();

$count = $count ->fetchColumn();




if($count == 1){
session_start();
$_SESSION['usuario'] = $usuario[0];
date_default_timezone_set('Europe/Lisbon');
$today = date("d/m/Y-g:i a");


setcookie ('lastLogin', $today, time()+2678400,"/");




header("Location: ../listado.php", true, 301);
exit();


}else{

    setcookie ($usuario[0].'-'.$usuario[1], $usuario[0].'-'.$usuario[1], time()+2678400,"/");

    if(!isset($_COOKIE['cont'])){
        setcookie('cont', 1, time()+2678400,"/");
    }else{
        $cont = intval($_COOKIE['cont'])+1;
        
        setcookie('cont', $cont, time()+2678400,"/");
        
    }

    $fallo = true;
    header("Location: ../login.php?fallo=$fallo", true, 301);
    exit();

}



