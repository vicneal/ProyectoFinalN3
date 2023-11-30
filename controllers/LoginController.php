<?php
include $_SERVER["DOCUMENT_ROOT"] . "/models/LoginModel.php";

class LoginController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }
    public function index()
    {
        $usuariosDefecto = $this->model->mostrarUsuariosPorDefecto();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }
}