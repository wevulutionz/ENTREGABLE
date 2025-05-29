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


    public function generarPDFCliente()
    {
        require __DIR__ . '/../fpdf/fpdf.php';

        $id = $_GET['id'] ?? null;

        $cliente = clientemodel::obtenerPorId($id);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Ficha de Cliente', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'ID: ', 0);
        $pdf->Cell(100, 10, $cliente['idcliente'], 0, 1);

        $pdf->Cell(40, 10, 'Nombre: ', 0);
        $pdf->Cell(100, 10, iconv('UTF-8', 'windows-1252', $cliente['nombre']), 0, 1);

        $pdf->Cell(40, 10, 'Email: ', 0);
        $pdf->Cell(100, 10, $cliente['email'], 0, 1);

        $pdf->Cell(40, 10, 'Telefono: ', 0);
        $pdf->Cell(100, 10, $cliente['telefono'], 0, 1);
        $pdf->Cell(40,10,'Hola mundo',0,1);

        $pdf->Output('I', 'cliente_' . $cliente['idcliente'] . '.pdf');
        exit;
    }
}
