
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styleGeneral.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <section style=" max-width: 700px;">

        <h1>Iniciar sesion</h1>
        <form action="server/session.php" method="post">
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="user">Usuario:</label>
                                <input class="form-control" placeholder="Usuario" type="text" name="user" id="user">
                            </div>
                        </td>
                        
                    </tr>

                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="password">Contraseña:</label>
                                <input class="form-control" type="password" placeholder="Contraseña" name="password" id="password">
                            </div>
                        </td>

                    
                    </tr>

                    <tr>
                        <td>

                            <input type="submit" value="Iniciar sesion" class="btn btn-success">

                            <input type="reset" value="Limpiar" class="btn btn-danger">
                            <a href="listado.php" class="btn btn-primary"> Volver </a>
                        </td>
                    </tr>


                </tbody>
            </table>

        </form>
    </section>
</body>

</html>