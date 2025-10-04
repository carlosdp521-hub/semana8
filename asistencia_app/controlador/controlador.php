<?php
session_start();
require_once "../modelo/Empleados.php";

// Verificar CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Acceso no autorizado.");
}

$empleado = new Empleado();

if (isset($_POST['accion']) && $_POST['accion'] === 'registrar') {
    $id_empleado = $_POST['id_empleado'] ?? null;
    $tipo = $_POST['tipo'] ?? null;

    if ($id_empleado && $tipo) {
        $registrado = $empleado->registrar($id_empleado, $tipo);
        if ($registrado) {
            header("Location: ../visita/registro_asistencia.php?status=ok");
        } else {
            header("Location: ../visita/registro_asistencia.php?status=error");
        }
        exit;
    }
}
