<!DOCTYPE html>
<html>

<head>
    <title>Nuevo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <h2>Registrar Proyecto</h2>
    <form method="POST" action="index.php?accion=crearproyecto">
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripcion:</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <div class="mb-3">
            <label>Cliente:</label>
            <select class="form-select" name="cbxidcli" id="">
                <option value="" selected>seleccione</option>
                <?php
                foreach ($cliente as $c) {
                ?>
                    <option value="<?= $c['idcliente'] ?>"><?= $c['nombre'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php?accion=cargarproyecto" class="btn btn-secondary">Cancelar</a>
    </form>

</body>

</html>