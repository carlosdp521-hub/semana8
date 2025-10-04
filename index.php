<?php
// index.php - Página principal de la Empresa XYZ
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Empresa XYZ - Tecnología e Innovación</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        background: rgba(255, 255, 255, 0.95);
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    header h1 {
        color: #007bff;
        font-size: 26px;
    }

    nav a {
        margin: 0 15px;
        text-decoration: none;
        font-weight: bold;
        color: #333;
        transition: color 0.3s;
    }

    nav a:hover {
        color: #007bff;
    }

    .hero {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 50px 20px;
    }

    .hero h2 {
        font-size: 42px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 20px;
        max-width: 600px;
        margin-bottom: 40px;
        line-height: 1.6;
    }

    .btn {
        background: #fff;
        color: #007bff;
        padding: 14px 28px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn:hover {
        background: #f0f0f0;
        transform: translateY(-3px);
    }

    footer {
        background: rgba(255,255,255,0.9);
        text-align: center;
        padding: 15px;
        font-size: 14px;
        color: #555;
        box-shadow: 0 -2px 8px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        header {
            flex-direction: column;
            align-items: flex-start;
        }
        nav {
            margin-top: 10px;
        }
        .hero h2 {
            font-size: 32px;
        }
        .hero p {
            font-size: 16px;
        }
    }
</style>
</head>
<body>

    <header>
        <h1>Empresa XYZ</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="contenido_empresa/nosotros.php">Nosotros</a>
            <a href="contenido_empresa/servicios.php">Servicios</a>
            <a href="contenido_empresa/contacto.php">Contacto</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Bienvenido a Empresa XYZ</h2>
        <p>Desarrollamos soluciones de software innovadoras para la gestión de recursos humanos. 
        Nuestra misión es optimizar el control de asistencia y el cálculo de salarios con herramientas modernas y eficientes.</p>
        <a href="asistencia_app/index.php" class="btn">Entrar al Sistema de Asistencia</a>
    </section>

    <footer>
        &copy; <?php echo date("Y"); ?> Empresa XYZ - Innovación en Software
    </footer>

</body>
</html>
