<?php
class TipoServicio
{
    private $db;

    public function __construct()
    {
        include "conexion.php";
        $this->db = $conexion;
    }
    function listarTipoServicio()
    {
        $mostrar = "select * from tipo_servicio order by id desc";
        $enviar = mysqli_query($this->db, $mostrar);
        return $enviar;
    }
}
