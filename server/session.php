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





/*function usuario()
{



    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "Usuario no reconocido!";
        ;
    }else{
        
        include('accesoBase.php');

        $usuario = $base->prepare("SELECT * from usuario WHERE usuario=? AND pass=?");

        
        
    }
}




 ["PHP_AUTH_USER"]=>
  string(1) "a"
  ["PHP_AUTH_PW"]=>
  string(1) "a"




if (isset($_POST)) {

    usuario();
}
*/