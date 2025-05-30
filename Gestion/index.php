<?php
require_once 'controller/CAutentificacion.php';
require_once __DIR__ . '/controller/CCliente.php';
require_once __DIR__ . '/controller/CProyecto.php';
$cliente = new CCliente();
$proyecto = new CProyecto();
$auth = new Autentificacion();

$accion = $_GET['accion'] ?? 'iniciar';

switch ($accion) {
    case 'iniciar':
        $auth->login();
        break;
    case 'registrar':
        $auth->registrar();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'cargarcliente':
        $cliente->cargarCli();
        break;
    case 'crearcliente':
        $cliente->crearCli();
        break;
    case 'eliminarcliente':
        $cliente->eliminarCli();
        break;
    case 'eliminarproyecto':
        $proyecto->eliminarPro();
        break;
    case 'crearproyecto':
        $proyecto->crearPro();
        break;
    case 'cargarproyecto':
        $proyecto->cargarPro();
        break;
    case 'generarPDFProyecto':
        $proyecto->generarPDFProyecto();
        break;
    default:
        echo "Acción no válida";
}
