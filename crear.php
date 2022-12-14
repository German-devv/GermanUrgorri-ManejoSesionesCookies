<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styleGeneral.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear</title>
</head>

<body>


<?php

include('server/accesoBase.php');
include('server/checkUser.php');

headerSubmit('Crear producto');
?>
    


<section>
        
        <form action="server/crearProducto.php" method="post">
            <table class="table table-striped">
                <tbody>

                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="nameProduct">Nombre:</label>
                                <input class="form-control" placeholder="Nombre" type="text" name="nameProduct" id="nameProduct">
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="shortName">Nombre corto:</label>
                                <input class="form-control" placeholder="Nombre corto" type="text" name="shortName" id="shortName">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="euro">Precio:</label>
                                <input type="number" placeholder="Ej:10,05" name="euro" id="euro" min="0" style="width: 100px;">
                                <label class="input-group-text" for="euro">,</label>
                                <input type="number"  name="cent" id="cent" min="0" max="99" style="width: 50px;">
                                <label class="input-group-text" for="euro">???</label>


                            </div>
                        </td>

                        <td>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="family">Familia:</label>
                                <select class="form-control" type="text" name="family" id="family">
                                    <?php
                                    include('server/mostrarFamilias.php');
                                    mostrarFamilias();
                                    ?>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <label class="input-group-text" for="description">Descripci??n:</label>
                            <textarea class="form-control" type="text" name="description" id="description">

                            </textarea>
                        </td>
                    </tr>



                    <tr>
                        <td>

                            <input type="submit" value="crear" class="btn btn-success">

                            <input type="reset" value="Limpiar" class="btn btn-danger">

                        </td>

                        <td>
                            <a href="listado.php" class="btn btn-primary"> Volver </a>
                        </td>
                    </tr>


                </tbody>
            </table>

        </form>
    </section>
</body>

</html>