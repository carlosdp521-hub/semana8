<?php
session_start();
require_once "../modelo/Empleados.php";

$empleadoModel = new Empleado();
$empleados = $empleadoModel->obtenerEmpleados();

// CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro de Asistencia</title>
<style>
body{font-family:Arial,sans-serif;background:linear-gradient(135deg,#6a11cb,#2575fc);display:flex;height:100vh;justify-content:center;align-items:center;margin:0}
.form-container{background:#fff;padding:30px 40px;border-radius:15px;box-shadow:0 8px 20px rgba(0,0,0,0.2);width:350px;text-align:center}
h2{margin-bottom:20px;color:#333}
label{display:block;text-align:left;margin:10px 0 5px;color:#444;font-weight:bold}
input[type="text"],select{width:100%;padding:10px;margin-bottom:15px;border:1px solid #ddd;border-radius:8px;font-size:14px}
input[type="submit"], .btn-home{width:100%;padding:12px;margin-top:10px;background:#2575fc;border:none;color:#fff;font-size:16px;font-weight:bold;border-radius:8px;cursor:pointer;transition:background 0.3s}
input[type="submit"]:hover, .btn-home:hover{background:#1a5edb}
</style>
</head>
<body>
<div class="form-container">
<h2>Registro de Asistencia</h2>
<form method="POST" action="../controlador/controlador.php">
    <label>Empleado:</label>
    <select name="id_empleado" required>
        <option value="">-- Selecciona un empleado --</option>
        <?php foreach($empleados as $emp): ?>
        <option value="<?php echo $emp['id_empleado']; ?>">
            <?php echo htmlspecialchars($emp['nombre'].' '.$emp['apellido'].' ('.$emp['numero_identificacion'].')'); ?>
        </option>
        <?php endforeach; ?>
    </select>

    <label>Tipo:</label>
    <select name="tipo" required>
        <option value="entrada">Entrada</option>
        <option value="salida">Salida</option>
    </select>

    <input type="hidden" name="accion" value="registrar">
    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf); ?>">

    <input type="submit" value="Registrar">
</form>

<!-- Botón para volver al inicio -->
<form action="../index.php">
    <input type="submit" value="Volver al inicio" class="btn-home">
</form>

<?php include "../contador/contador.php"; ?>
</div>
</body>
</html>
