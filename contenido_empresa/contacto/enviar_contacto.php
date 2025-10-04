<?php
// enviar_contacto.php - Procesar formulario de contacto

$exito = false;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    // Validación básica
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Ruta del archivo donde se guardarán los mensajes
        $archivo = __DIR__ . "/mensajes_contacto.txt";

        // Formato del mensaje
        $registro = "Fecha: " . date("Y-m-d H:i:s") . PHP_EOL .
                    "Nombre: $nombre" . PHP_EOL .
                    "Email: $email" . PHP_EOL .
                    "Mensaje: $mensaje" . PHP_EOL .
                    "------------------------------" . PHP_EOL;

        // Guardar mensaje
        if (file_put_contents($archivo, $registro, FILE_APPEND | LOCK_EX) !== false) {
            $exito = true;
        } else {
            $error = "No se pudo guardar el mensaje. Intenta nuevamente.";
        }
    } else {
        $error = "Por favor, completa todos los campos.";
    }
} else {
    // Si no viene desde POST, volver al formulario
    header("Location: contacto.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Empresa XYZ</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f9; text-align:center; padding:50px; }
        .box { background:#fff; max-width:600px; margin:0 auto; padding:30px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
        h2 { color:#007bff; margin-bottom:20px; }
        p { font-size:16px; color:#333; margin-bottom:20px; }
        a { display:inline-block; margin:8px; padding:12px 20px; background:#007bff; color:#fff; text-decoration:none; border-radius:6px; }
        a:hover { background:#0056b3; }
    </style>
</head>
<body>
<div class="box">
    <?php if ($exito): ?>
        <h2>✅ Mensaje enviado correctamente</h2>
        <p>Gracias <strong><?php echo htmlspecialchars($nombre); ?></strong>, hemos recibido tu mensaje y te contactaremos a la brevedad.</p>
    <?php else: ?>
        <h2>❌ Error al enviar el mensaje</h2>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <a href="contacto.php">Volver al formulario</a>
    <a href="mensajes_contacto.php">Leer mensajes enviados</a>
    <a href="../../index.php">Ir al inicio</a>
</div>
</body>
</html>
