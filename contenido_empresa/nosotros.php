<?php
// nosotros.php - Página "Nosotros"
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nosotros - Empresa XYZ</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Segoe UI',Arial,sans-serif; background:#f4f4f9; color:#333; }
    header { background:#007bff; color:#fff; padding:20px; text-align:center; }
    nav a { margin:0 15px; color:#fff; text-decoration:none; font-weight:bold; }
    nav a:hover { text-decoration:underline; }
    .content { max-width:900px; margin:40px auto; padding:20px; background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
    h2 { color:#007bff; margin-bottom:15px; }
    p { line-height:1.7; margin-bottom:15px; }
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
        <a href="contacto/contacto.php">Contacto</a>
    </nav>
</header>

<div class="content">
    <h2>¿Quiénes Somos?</h2>
    <p>En <strong>Empresa XYZ</strong> somos líderes en el desarrollo de software especializado en la gestión de recursos humanos. Nuestro objetivo es ayudar a las organizaciones a optimizar sus procesos de asistencia, control de horarios y cálculo de salarios.</p>
    <p>Contamos con un equipo de profesionales apasionados por la innovación tecnológica, comprometidos con ofrecer soluciones modernas y seguras.</p>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Empresa XYZ - Todos los derechos reservados.
</footer>

</body>
</html>
