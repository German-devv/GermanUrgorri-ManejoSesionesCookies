<?php


session_start();


if (!isset($_SESSION['usuario'])) {

    header("Location: login.php", true, 301);
    exit();
}



function nombreCompletoUsuario()
{
    include('accesoBase.php');

    $nombre = $base->prepare("SELECT nombrecompleto from usuarios WHERE usuario=?");
    $nombre->execute([$_SESSION['usuario']]);
    $nombre = $nombre->fetch(PDO::FETCH_ASSOC);

    

    echo $nombre['nombrecompleto'];
    
}


function headerSubmit($tittle)
{
    echo " 
    <section>
    <form action='server/submitListado.php' method='post'>
        <h1>$tittle-";
 
    nombreCompletoUsuario();

    echo "
        </h1>

        <input type='submit' name='modificarPerfil' class='btn btn-primary' value='Modificar perfil'>

        <a href='server/cerrarSesion.php' class='btn btn-danger'>Cerrar sesion</a>
    </form>
    </section>
    ";
}

function especificacionesUsuario(){
    include('accesoBase.php');
    
    $estilo = $base->prepare("SELECT colorfondo, tipoletra from usuarios WHERE usuario=?");
    $estilo->execute([$_SESSION['usuario']]);
    $estilo = $estilo->fetch(PDO::FETCH_ASSOC);

    echo"
    <style>
        body{
            background: linear-gradient(".$estilo['colorfondo'].", #ffff00);
            font-family: '".$estilo['tipoletra']."';
        }
    </style>
    ";


}

especificacionesUsuario();