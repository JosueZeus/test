<?php

require_once('../Modelo/Formulario.php');

if ($_POST) {
    $ModeloFormulario = new Formulario();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $ModeloFormulario->add(
        $nombre,
        $apellido,
        $correo,
        $telefono
    );
} else {
    header('location: Index.php');
}
