<?php
include $_SERVER["DOCUMENT_ROOT"] . "/models/AdministradorModel.php";

class AdministradorController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AdministradorModel();
    }

    /**
     * MUESTRA LA TABLA DE TODOS LOS USUARIOS
     */
    public function read()
    {
        $usuarios = $this->model->all();

        $roles = $this->model->roles();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/administradores/read.php";
    }
    /**
     * MUESTRA LA TABLA DE TODOS LOS USUARIOS
     */
    public function update($request)
    {

        $this->model->updateRoles($request);
    }
    /**
     * MUESTRA LA TABLA DE TODOS LOS USUARIOS
     */
    public function maestroRead()
    {
        $maestros = $this->model->showTeachers();
        $asignaturas = $this->model->asignaturas();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/administradores/maestro.php";
    }
    public function updateMaestros($request)
    {

        $this->model->updateMaestros($request);
    }
    public function insertMaestro($request)
    {

        $this->model->insertMaestro($request);
    }
    public function deleteMaestro($request)
    {

        $this->model->deleteMaestro($request);
    }

    public function alumnosRead()
    {
        $alumnos = $this->model->showAlumnos();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/administradores/alumno.php";
    }
    public function updateAlumnos($request)
    {

        $this->model->updateAlumnos($request);
    }

    public function insertAlumnos($request)
    {

        $this->model->insertAlumno($request);
    }
    public function deleteAlumno($request)
    {

        $this->model->deleteAlumno($request);
    }

    public function clasesRead()
    {
        $clases = $this->model->readClase();
        $maestros = $this->model->maestrosList();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/administradores/clase.php";
    }
    public function updateClase($request)
    {

        $this->model->updateClase($request);
    }
    public function deleteClase($request)
    {

        $this->model->deleteClase($request);
    }
    public function insertClase($request)
    {

        $this->model->insertClase($request);
    }
}