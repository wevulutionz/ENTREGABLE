<?php
require_once 'controller/CAutentificacion.php';
require_once __DIR__ . '/controller/CCliente.php';
$cliente = new CCliente();
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
    case 'generarPDFCliente':
        $cliente->generarPDFCliente();
        break;
    default:
        echo "Acción no válida";
}
