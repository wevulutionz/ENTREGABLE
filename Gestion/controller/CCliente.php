<?php
require_once __DIR__ . '/../model/Cliente/clientemodel.php';
class CCliente
{

    public function cargarCli()
    {
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=logout");
            exit;
        }

        $clientes = clientemodel::obtenerTodos();

        include __DIR__ . '/../view/Clienteview/cargarCliente.php';
    }

    public function crearCli()
    {
        if (!isset($_SESSION['usuario'])) {
            header("Location: ../index.php?accion=logout");
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            clientemodel::insertar($nombre, $email, $telefono);
            header("Location: index.php?accion=cargarcliente");
            exit;
        }

        include __DIR__ . '/../view/Clienteview/crearCliente.php';
    }

    public function eliminarCli()
    {
        $id = $_GET['id'];
        if ($id) {
            clientemodel::eliminar($id);
        }
        header("Location: index.php?accion=cargarcliente");
        exit;
    }
}
