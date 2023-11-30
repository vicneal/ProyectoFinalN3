<?php
include $_SERVER["DOCUMENT_ROOT"] . "/models/HomeModel.php";

class HomeController
{
    protected $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function index($data)
    {
        session_start();
        $pass = $_POST["pass"];

        $usuarioLogeo = $this->model->login($data);



        // $usuarioLogeo[0]["id_usuario"];

        if (count($usuarioLogeo) > 0) {
            if (password_verify($pass, $usuarioLogeo[0]["contrasena"]) && $usuarioLogeo[0]["activo"]) {
                // echo "USUARIO VALIDO";
                // echo "CONTRASEÑA VALIDA";

                $_SESSION["nombre"] = $usuarioLogeo[0]["nombre"];
                $_SESSION["apellido"] = $usuarioLogeo[0]["apellido"];
                $_SESSION["rol"] = $usuarioLogeo[0]["rol"];
                $_SESSION["activo"] = $usuarioLogeo[0]["activo"];

                include $_SERVER["DOCUMENT_ROOT"] . "/views/home.php";
            } else {
                echo "CONTRASEÑA INCORRECTA";
                include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
            }
        } else {
            // echo "NO EXISTE EL USUARIO";
            include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
        }
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }
    public function cerrarsession()
    {
        session_start();
        session_destroy();
        $usuariosDefecto = $this->model->mostrarUsuariosPorDefecto();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }
    public function home()
    {
        session_start();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/home.php";
    }
}