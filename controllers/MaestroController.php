<?php
include $_SERVER["DOCUMENT_ROOT"] . "/models/MaestroModel.php";

class MaestroController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MaestroModel();
    }
    public function maestro_alumnos_read()
    {
        session_start();
        $id_usuario = $_SESSION["id_usuario"];

        $idMaestro = $this->model->idMaestro($id_usuario);

        $idMaestro = $idMaestro[0]["id_maestro"];
        // var_dump($idMaestro);
        $alumnosClase = $this->model->alumnosClase($idMaestro);
        $alumnosClase = $alumnosClase[0];
        //var_dump($alumnosClase);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestros/maestro_alumnos_read.php";
    }
}