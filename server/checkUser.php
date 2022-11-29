<?php


session_start();


if (!isset($_SESSION['usuario'])) {

    header("Location: login.php", true, 301);
    exit();
}



function nombreCompletoUsuario()
{
    include('accesoBase.php');

    $producto = $base->prepare("SELECT nombrecompleto from usuarios WHERE usuario=?");
    $producto->execute(['administrador']);
    $producto = $producto->fetch(PDO::FETCH_ASSOC);


    echo $producto['nombrecompleto'];
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
