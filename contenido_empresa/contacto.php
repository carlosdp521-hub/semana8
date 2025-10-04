<?php
// contacto.php - Página "Contacto"
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contacto - Empresa XYZ</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Segoe UI',Arial,sans-serif; background:#f4f4f9; color:#333; }
    header { background:#007bff; color:#fff; padding:20px; text-align:center; }
    nav a { margin:0 15px; color:#fff; text-decoration:none; font-weight:bold; }
    nav a:hover { text-decoration:underline; }
    .content { max-width:800px; margin:40px auto; padding:20px; background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
    h2 { color:#007bff; margin-bottom:15px; }
    form { display:flex; flex-direction:column; }
    label { margin:10px 0 5px; font-weight:bold; }
    input, textarea { padding:10px; border:1px solid #ccc; border-radius:6px; font-size:14px; }
    textarea { resize:vertical; min-height:100px; }
    button { margin-top:15px; padding:12px; background:#007bff; color:#fff; font-weight:bold; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#0056b3; }
    footer { text-align:center; padding:15px; background:#eee; margin-top:30px; }
</style>
</head>
<body>

<header>
    <h1>Empresa XYZ</h1>
    <nav>
        <a href="../index.php">Inicio</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="servicios.php">Servicios</a>
        <a href="contacto.php">Contacto</a>
    </nav>
</header>

<div class="content">
    <h2>Contáctanos</h2>
    <p>Si deseas más información sobre nuestros servicios o agendar una reunión, completa el siguiente formulario:</p>

    <form method="post" action="enviar_contacto.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mensaje:</label>
        <textarea name="mensaje" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Empresa XYZ - Todos los derechos reservados.
</footer>

</body>
</html>
