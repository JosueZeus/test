<?php
require_once  '../../Conexion.php';

class Formulario extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($nombre, $apellido, $correo, $telefono)
    {
        $statement = $this->db->prepare("INSERT INTO t_datos (nombre,apellido,correo,telefono)                      
                                        VALUES (:nombre,:apellido,:correo,:telefono)");
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':apellido', $apellido);
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':telefono', $telefono);

        if ($statement->execute()) {
            header('location: ../../Index.php');
        } else {
            header('location: ');
        }
    }
}
