<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>Registrar Cliente</h2>
<form method="POST" action="index.php?accion=crearcliente">
    <div class="mb-3">
        <label>Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Teléfono:</label>
        <input type="text" name="telefono" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="index.php?accion=cargarcliente" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>
