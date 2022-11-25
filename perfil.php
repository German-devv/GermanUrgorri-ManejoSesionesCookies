<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styleGeneral.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actualizar</title>
</head>

<body>
    <section>

        
        <?php
        include('server/accesoBase.php');
        include('server/checkUser.php');



        echo '<h1>Actualizar perfil de '.$_SESSION['usuario'].'</h1>';

        $perfil = $base->prepare("SELECT * from usuarios WHERE usuario=?");
        $perfil->execute([$_SESSION['usuario']]);
        $perfil = $perfil->fetch(PDO::FETCH_ASSOC);

        print_r($perfil);


        echo ("


        <form action='server/updatePerfil.php' method='post'>
        <table class='table table-striped'>
            <tbody>

                <tr>
                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='usuario'>Usuario:</label>
                            <input class='form-control' value='".$perfil['usuario']."' type='text' name='usuario'
                                id='usuario'>
                        </div>
                    </td>
                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='nombrecompleto'>Nombre completo:</label>
                            <input class='form-control' value='".$perfil['nombrecompleto']."' type='text' name='nombrecompleto'
                                id='nombrecompleto'>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='clave'>Contraseña:</label>
                            <input type='clave' value='".$perfil['clave']."' name='text' id='clave' min='0' style='width: 150px;'>
                            <label class='input-group-text' for='clave'>€</label>
                        </div>
                    </td>

                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='correo'>Correo electrónico:</label>
                            <input class='form-control' value='".$perfil['correo']."' type='email' name='correo'
                                id='correo'>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='colorfondo'>Color de fondo:</label>
                            <input class='form-control' value='".$perfil['colorfondo']."' type='text' name='colorfondo'
                                id='colorfondo'>
                        </div>
                    </td>
                    <td>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='tipoletra'>Tipo de letra :</label>
                            <input class='form-control' value='".$perfil['tipoletra']."' type='text' name='tipoletra'
                                id='tipoletra'>
                        </div>
                    </td>
                </tr>

")
        ?>
        <td>
            <input type='submit' id='update' class='btn btn-success' value='Actualizar'>
            <input type='reset' id='update' class='btn btn-danger' value='Limpiar'>
        </td>

        <td><a href="listado.php" class='btn btn-primary'>Volver</a></td>
        </tr>



        </tbody>

        </table>

        </form>
    </section>
</body>

</html>