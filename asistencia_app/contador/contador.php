<?php
// Iniciar sesión solo si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Archivo de visitas
$archivo = __DIR__ . "/visitas.txt";

// Crear archivo si no existe
if (!file_exists($archivo)) {
    file_put_contents($archivo, "0", LOCK_EX);
}

// Leer visitas
$visitas = (int) file_get_contents($archivo);

// Contar solo si no se ha contado en esta sesión
if (empty($_SESSION['visitado'])) {
    $visitas++;
    file_put_contents($archivo, (string)$visitas, LOCK_EX);
    $_SESSION['visitado'] = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(135deg, #f0f2f5, #e3e9f0);
            text-align: center; 
            margin: 0;
            padding: 0;
        }
        h2 { 
            color: #333; 
            margin-top: 50px; 
            font-size: 28px;
        }
        .contador { 
            background: #fff; 
            display: inline-block; 
            padding: 20px 50px; 
            border-radius: 12px; 
            box-shadow: 0px 4px 15px rgba(0,0,0,0.2); 
            font-size: 26px; 
            color: #007BFF;
            margin-top: 20px;
        }
        .contador-widget {
            position: fixed;
            bottom: 15px;
            right: 15px;
            background: #007BFF;
            color: #fff;
            padding: 8px 15px;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
            opacity: 0.9;
        }
        .contador-widget:hover {
            opacity: 1;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Bienvenido al Sistema de Asistencia</h2>
    <div class="contador">
        Visitas registradas: <strong><?php echo number_format($visitas); ?></strong>
    </div>
        <!-- Widget de contador -->
<div class="contador-widget">
    👀 Visitas: <strong><?php echo number_format($visitas); ?></strong>
</div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Sistema de Asistencia - Contador de visitas activo
    </div>
</body>
</html>
