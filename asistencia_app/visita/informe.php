<?php
require_once "../modelo/Empleados.php";
$empleadoModel = new Empleado();
$resultados = $empleadoModel->obtenerInforme();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Informe de Asistencia</title>
<style>
body{font-family:Arial,sans-serif;background:#f9f9f9}
h2{text-align:center;color:#333}
table{border-collapse:collapse;width:80%;margin:20px auto;background:#fff}
th,td{border:1px solid #ccc;padding:10px;text-align:center}
th{background:#007BFF;color:#fff}
tr:nth-child(even){background:#f2f2f2}
/* Botón Volver */
.btn-home{display:block;width:200px;margin:20px auto;padding:12px;background:#2575fc;color:#fff;font-weight:bold;text-align:center;text-decoration:none;border-radius:8px;transition:background 0.3s}
.btn-home:hover{background:#1a5edb}
</style>
</head>
<body>
<h2>Informe de Asistencia y Horas Trabajadas</h2>
<table>
<tr>
<th>Empleado</th>
<th>Entrada</th>
<th>Salida</th>
<th>Horas Trabajadas</th>
</tr>
<?php if(!empty($resultados)): ?>
<?php foreach($resultados as $fila): ?>
<tr>
<td><?php echo htmlspecialchars($fila['nombre'].' '.$fila['apellido']); ?></td>
<td><?php echo htmlspecialchars($fila['entrada']); ?></td>
<td><?php echo htmlspecialchars($fila['salida']); ?></td>
<td><?php echo (int)$fila['horas_trabajadas']; ?> hrs</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr><td colspan="4">No hay registros disponibles</td></tr>
<?php endif; ?>
</table>

<!-- Botón para volver al inicio -->
<a href="../index.php" class="btn-home">Volver al inicio</a>

<?php include "../contador/contador.php"; ?>
</body>
</html>
