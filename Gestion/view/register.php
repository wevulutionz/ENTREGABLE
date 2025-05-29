<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h4 class="text-center mb-4">Crear cuenta</h4>

    <?php if (!empty($mensaje)) echo "<div class='alert alert-info'>$mensaje</div>"; ?>
    <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

    <form method="POST" action="">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="d-grid">
            <button type="submit" name="registrar" class="btn btn-success">Registrar</button>
        </div>
    </form>

    <p class="mt-3 text-center">
        ¿Ya tienes cuenta? <a href="../index.php?accion=iniciar">Iniciar sesion</a>
    </p>
</div>

</body>
</html>
