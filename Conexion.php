<?php
class Conexion
{
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "formulario";
    public function __construct()
    {
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Ha surgido un error: detalle: " . $e->getMessage();
        }
    }
}