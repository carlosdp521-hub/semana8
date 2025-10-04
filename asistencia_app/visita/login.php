<?php
// login.php - Vista de inicio de sesión
session_start();

// Crear un token CSRF simple si no existe
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso al Sistema</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            width: 320px;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from {opacity:0; transform:translateY(-20px);}
            to {opacity:1; transform:translateY(0);}
        }
        h2 { margin-bottom: 20px; color: #333; }
        label { display:block; text-align:left; margin:10px 0 5px; font-weight:bold; color:#444; }
        input[type="text"], input[type="password"] {
            width:100%; padding:10px; margin-bottom:15px;
            border:1px solid #ccc; border-radius:8px; font-size:14px;
            transition:border 0.3s, box-shadow 0.3s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            border:1px solid #2575fc; outline:none;
            box-shadow:0 0 5px rgba(37,117,252,0.4);
        }
        input[type="submit"] {
            width:100%; padding:12px; background:#2575fc; border:none;
            color:#fff; font-size:16px; font-weight:bold;
            border-radius:8px; cursor:pointer; transition:background 0.3s, transform 0.2s;
        }
        input[type="submit"]:hover { background:#1a5edb; transform:scale(1.03); }
        .note { font-size:13px; color:#777; margin-top:10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Acceso al Sistema</h2>

        <form method="POST" action="../controlador/controlador.php">
            <label>Usuario:</label>
            <input type="text" name="usuario" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <input type="hidden" name="accion" value="login">
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf); ?>">

            <input type="submit" value="Ingresar">
        </form>

        <div class="note">Ingrese sus credenciales para continuar</div>
        <?php include "../contador/contador.php"; ?>
    </div>
</body>
</html>
