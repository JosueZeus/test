<?php
require_once('DatosPersonales/Modelo/Formulario.php');
$ModeloFormulario = new Formulario();
$Modelo = new Formulario();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="Styles.css">
</head>

<body>
    <div class="formulario">
        <form method="POST" action="DatosPersonales/Controlador/Add.php" class="form">
            <div class="span text-center">
                <span>
                    <h3>Registro de Datos</h3>
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control" type="text" name="nombre" required placeholder="Nombre" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label" for="apellido">Apellido:</label>
                <input class="form-control" type="text" name="apellido" required placeholder="Apellido" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label" for="correo">Correo:</label>
                <input class="form-control" type="email" name="correo" required placeholder="Correo" autocomplete="on">

            </div>
            <div class="mb-3">
                <label class="form-label" for="telefono">Telefono:</label>
                <input class="form-control" type="text" name="telefono" required placeholder="Telefono" autocomplete="off">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
</body>

</html>