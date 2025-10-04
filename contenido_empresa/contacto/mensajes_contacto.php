<?php
// Archivo de mensajes guardados
$archivo = __DIR__ . "/mensajes_contacto.txt";
$mensajes = [];

// Leer y procesar el archivo si existe
if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $bloques = explode("------------------------------", trim($contenido));

    foreach ($bloques as $bloque) {
        $lineas = array_filter(array_map("trim", explode(PHP_EOL, $bloque)));
        if (!empty($lineas)) {
            $registro = [];
            foreach ($lineas as $linea) {
                if (stripos($linea, "Fecha:") === 0) {
                    $registro['fecha'] = trim(substr($linea, 6));
                } elseif (stripos($linea, "Nombre:") === 0) {
                    $registro['nombre'] = trim(substr($linea, 7));
                } elseif (stripos($linea, "Email:") === 0) {
                    $registro['email'] = trim(substr($linea, 6));
                } elseif (stripos($linea, "Mensaje:") === 0) {
                    $registro['mensaje'] = trim(substr($linea, 8));
                }
            }
            if (!empty($registro)) {
                $mensajes[] = $registro;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes de Contacto - Empresa XYZ</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f9; padding:30px; }
        h2 { text-align:center; color:#007bff; margin-bottom:20px; }
        table { width:90%; margin:0 auto; border-collapse:collapse; background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
        th, td { padding:12px; border:1px solid #ddd; text-align:left; }
        th { background:#007bff; color:#fff; }
        tr:nth-child(even) { background:#f9f9f9; }
        .acciones { text-align:center; margin-top:20px; }
        .acciones a { display:inline-block; margin:0 10px; padding:10px 20px; background:#007bff; color:#fff; text-decoration:none; border-radius:6px; }
        .acciones a:hover { background:#0056b3; }
        .mensaje { white-space: pre-line; }
    </style>
</head>
<body>
    <h2>📬 Mensajes de Contacto</h2>

    <table>
        <tr>
            <th>Fecha</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        <?php if (!empty($mensajes)): ?>
            <?php foreach ($mensajes as $m): ?>
            <tr>
                <td><?php echo htmlspecialchars($m['fecha'] ?? ""); ?></td>
                <td><?php echo htmlspecialchars($m['nombre'] ?? ""); ?></td>
                <td><?php echo htmlspecialchars($m['email'] ?? ""); ?></td>
                <td class="mensaje"><?php echo htmlspecialchars($m['mensaje'] ?? ""); ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="4" style="text-align:center;">No hay mensajes registrados.</td></tr>
        <?php endif; ?>
    </table>

    <div class="acciones">
        <a href="contacto.php">📩 Volver al formulario</a>
        <a href="../../index.php">🏠 Ir al inicio</a>
    </div>
</body>
</html>
