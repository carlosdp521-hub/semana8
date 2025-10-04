<?php
// servicios.php - Página "Servicios"
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Servicios - Empresa XYZ</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Segoe UI',Arial,sans-serif; background:#f4f4f9; color:#333; }
    header { background:#007bff; color:#fff; padding:20px; text-align:center; }
    nav a { margin:0 15px; color:#fff; text-decoration:none; font-weight:bold; }
    nav a:hover { text-decoration:underline; }
    .content { max-width:1000px; margin:40px auto; padding:20px; background:#fff; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }
    h2 { color:#007bff; margin-bottom:20px; text-align:center; }
    .service { margin-bottom:20px; }
    h3 { margin-bottom:10px; color:#333; }
    p { line-height:1.7; }
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
    <h2>Nuestros Servicios</h2>
    <div class="service">
        <h3>✅ Registro de Asistencia</h3>
        <p>Implementamos sistemas de control de asistencia precisos y fáciles de usar, adaptados a las necesidades de cada empresa.</p>
    </div>
    <div class="service">
        <h3>✅ Cálculo de Salarios</h3>
        <p>Automatizamos el proceso de cálculo de horas trabajadas y sueldos para evitar errores y optimizar tiempos administrativos.</p>
    </div>
    <div class="service">
        <h3>✅ Informes Personalizados</h3>
        <p>Generamos reportes completos y dinámicos que permiten a los administradores tomar mejores decisiones.</p>
    </div>
</div>

<footer>
    &copy; <?php echo date("Y"); ?> Empresa XYZ - Todos los derechos reservados.
</footer>

</body>
</html>
