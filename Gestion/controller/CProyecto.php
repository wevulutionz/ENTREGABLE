<?php
require_once __DIR__ . '/../model/Proyectos/proyectosmodel.php';
require_once __DIR__ . '/../model/Cliente/clientemodel.php';
class CProyecto
{

    public function cargarPro()
    {
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=logout");
            exit;
        }

        $proyectos = proyectosmodel::obtenerTodos();

        include __DIR__ . '/../view/Proyectosview/cargarproyectos.php';
    }

    public function crearPro()
    {
        if (!isset($_SESSION['usuario'])) {
            header("Location: ../index.php?accion=logout");
            exit;
        }
        $cliente = clientemodel::obtenerTodos();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nombre'];
            $des = $_POST['descripcion'];
            $idcli = $_POST['cbxidcli'];
            proyectosmodel::insertar($nom, $des,$idcli);
            header("Location: index.php?accion=cargarproyecto");
            exit;
        }

        include __DIR__ . '/../view/Proyectosview/crearproyectos.php';
    }

    public function eliminarPro()
    {
        $id = $_GET['id'];
        if ($id) {
            proyectosmodel::eliminar($id);
        }
        header("Location: index.php?accion=cargarproyecto");
        exit;
    }


    public function generarPDFProyecto()
    {
        require __DIR__ . '/../fpdf/fpdf.php';

        $idcli = $_GET['idcli'];
        $idpro = $_GET['idpro'];

        $cliente = clientemodel::obtenerPorId($idcli);
        $proyecto = proyectosmodel::obtenerPorId($idpro);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Ficha de Proyecto', 0, 1, 'C');
        $pdf->Ln(10);

        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'ID Proyecto: ', 0);
        $pdf->Cell(100, 10, $proyecto['idproyecto'], 0, 1);

        $pdf->Cell(40, 10, 'Cliente: ', 0);
        $pdf->Cell(100, 10, iconv('UTF-8', 'windows-1252', $cliente['nombre']), 0, 1);

        $pdf->Cell(40, 10, 'Proyecto: ', 0);
        $pdf->Cell(100, 10, iconv('UTF-8', 'windows-1252', $proyecto['nombre']), 0, 1);

        $pdf->Cell(40, 10, 'Email: ', 0);
        $pdf->Cell(100, 10, $cliente['email'], 0, 1);

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'Descripcion ', 0,1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10,iconv('UTF-8', 'windows-1252', $proyecto['descripcion']));

        $pdf->Output('I', 'cliente_' . $cliente['idcliente'] . '.pdf');
        exit;
    }
}
