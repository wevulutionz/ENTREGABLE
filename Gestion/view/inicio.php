<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php?accion=logout");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-md-block bg-dark text-white min-vh-100">
            <div class="p-3">
                <h5 class="text-white">Menú</h5>
                <hr class="text-white">
                <div class="mb-2">
                    <strong>Tablas</strong>
                    <ul class="nav flex-column ms-2">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../index.php?accion=cargarcliente">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?accion=proyectos">Proyectos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="col-md-10 ms-sm-auto px-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                <div class="container-fluid justify-content-end">
                    <span class="navbar-text me-3">
                        Usuario: <?= $_SESSION['usuario']; ?>
                    </span>
                    <a href="../index.php?accion=logout" class="btn btn-outline-danger btn-sm">Cerrar sesión</a>
                </div>
            </nav>

            <div class="mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido <?=$_SESSION['usuario'];?>!!!</h5>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
