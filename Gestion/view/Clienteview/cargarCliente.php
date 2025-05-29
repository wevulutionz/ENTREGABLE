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
                                <a class="nav-link text-white" href="index.php?accion=cargarcliente">Clientes</a>
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
                            <h2>Lista de Clientes</h2>
                            <a href="index.php?accion=crearcliente" class="btn btn-primary mb-3">Nuevo Cliente</a>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($clientes as $c) {
                                    ?>
                                        <tr>
                                            <td><?= $c['idcliente'] ?></td>
                                            <td><?= $c['nombre'] ?></td>
                                            <td><?= $c['email'] ?></td>
                                            <td><?= $c['telefono'] ?></td>
                                            <td>
                                                <a href="index.php?accion=eliminarcliente&id=<?= $c['idcliente'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este cliente?')">Eliminar</a>
                                                <a href="index.php?accion=generarPDFCliente&id=<?= $c['idcliente'] ?>" class="btn btn-secondary btn-sm">PDF</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>