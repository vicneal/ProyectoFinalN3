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
            $administradorController->updateMaestros($_POST);

            break;
        case '/administradores/insertMaestro':

            $administradorController->insertMaestro($_POST);
            break;
        case '/administradores/updateAlumno':
            $administradorController->updateAlumnos($_POST);

            break;
        case '/administradores/insertAlumno':

            $administradorController->insertAlumnos($_POST);
            break;
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
        case '/administradores/alumnos':
            $administradorController->alumnosRead();
            break;
        case '/administradores/clases':
            $administradorController->clasesRead();
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