<?php

// ENRUTADOR
require_once "./controllers/HomeController.php";
require_once "./controllers/AdministradorController.php";

$homeController = new HomeController();
$administradorController = new AdministradorController();


$route = $_SERVER["REQUEST_URI"];

//dividimos la ruta por el signo "?" para no leer los query params. ekem: /empleados?id=1
$route = explode("?", $route);

$method = $_SERVER["REQUEST_METHOD"];


if ($method === "POST") {
    switch ($route[0]) {
        case '/administradores/update':
            $administradorController->update($_POST);

            break;
        case '/administradores/updateMaestro':
            var_dump($_POST);

            break;
            // case '/empleados/delete':
            //     $empleadoController->delete($_POST["id"]);
            //     break;
            // case '/empleados/create':
            //     $empleadoController->store($_POST);
            //     break;
            // case '/empleados/update':
            //     $empleadoController->update($_POST);
            //     break;
        default:
            echo "NO ENCONTRAMOS LA RUTA";
            break;
    }
}
if ($method === "GET") {
    switch ($route[0]) {

        case '/index.php':
            $homeController->index();
            break;
        case '/administradores/permisos':
            $administradorController->read();
            break;
        case '/administradores/maestros':
            $administradorController->maestroRead();
            break;
            // case '/index.php':
            //     $homeController->index();
            //     break;

            // case '/empleados':
            //     $empleadoController->index();
            //     break;
            // case '/empleados/create':
            //     $empleadoController->create();
            //     break;
            // case '/empleados/edit':
            //     $empleadoController->edit($_GET["id"]);
            //     break;
        default:
            echo "NO ENCONTRAMOS LA RUTA";
            break;
    }
}