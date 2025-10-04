<?php
// index.php - Página principal de la aplicación de asistencia
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Asistencia - Empresa XYZ</title>
<style>
    /* Reset básico */
    * { margin:0; padding:0; box-sizing:border-box; }

    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #f0f4f8;
        color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 10px;
        color: #007bff;
    }

    p {
        font-size: 18px;
        margin-bottom: 40px;
        max-width: 600px;
        line-height: 1.5;
        text-align: center;
        color: #555;
    }

    .menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
    }

    .card {
        background: #fff;
        border-radius: 12px;
        padding: 30px 40px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 18px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        text-align: center;
        min-width: 220px;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        background: #f9fbff;
    }

    .card span {
        display: block;
        font-size: 35px;
        margin-bottom: 10px;
        color: #007bff;
    }

    footer {
        margin-top: 50px;
        font-size: 14px;
        color: #777;
    }

    @media (max-width: 600px) {
        .card {
            width: 100%;
            padding: 20px;
        }
    }
</style>
</head>
<body>

    <h1>Empresa XYZ</h1>
    <p>Bienvenido al sistema de control de asistencia. Registra tu asistencia y consulta informes de forma rápida y sencilla.</p>

    <div class="menu">
        <a href="visita/registro_asistencia.php" class="card">
            <span>📝</span>
            Registrar Asistencia
        </a>
        <a href="visita/informe.php" class="card">
            <span>📊</span>
            Ver Informe
        </a>
        <a href="../index.php" class="card">
            <span>🏠</span>
            Página Principal
        </a>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Empresa XYZ - Sistema de Asistencia
    </footer>

</body>
</html>
