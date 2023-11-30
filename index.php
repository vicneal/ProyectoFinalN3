<?php

// ENRUTADOR
require_once "./controllers/HomeController.php";
require_once "./controllers/AdministradorController.php";
require_once "./controllers/404.php";
require_once "./controllers/LoginController.php";
require_once "./controllers/MaestroController.php";

$homeController = new HomeController();
$administradorController = new AdministradorController();
$pagNoFoundController = new PagNoFoundController();
$loginController = new LoginController();
$maestroController = new MaestroController();



$route = $_SERVER["REQUEST_URI"];

//dividimos la ruta por el signo "?" para no leer los query params. ekem: /empleados?id=1
$route = explode("?", $route);

$method = $_SERVER["REQUEST_METHOD"];


if ($method === "POST") {
    switch ($route[0]) {
        case '/home':
            $homeController->index($_POST);
            break;
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
        case '/administradores/updateClase':

            $administradorController->updateClase($_POST);
            break;
        case '/administradores/insertClase':

            $administradorController->insertClase($_POST);
            break;
        default:
            $pagNoFoundController->index();
            break;
    }
}
if ($method === "GET") {
    switch ($route[0]) {

        case '/index.php':
            $loginController->index();
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
        case '/administradores/deleteMaestro':
            $administradorController->deleteMaestro($_GET);

            break;
        case '/administradores/deleteAlumno':
            $administradorController->deleteAlumno($_GET);

            break;
        case '/administradores/deleteClase':
            $administradorController->deleteClase($_GET);

            break;
        case '/maestros/alumnos':
            $maestroController->maestro_alumnos_read();

            break;
        case '/cerrarSession':
            $homeController->cerrarsession();

            break;
        case '/home':
            $homeController->home($_POST);
            break;
        default:
            $pagNoFoundController->index();
            break;
    }
}