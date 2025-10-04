<?php
require_once "Conexion.php";

class Empleado {
    private $conn;

    public function __construct() {
        $db = new Conexion();
        $this->conn = $db->conectar();
    }

    // Obtener todos los empleados
    public function obtenerEmpleados() {
        $stmt = $this->conn->prepare("SELECT id_empleado, nombre, apellido, numero_identificacion FROM empleados ORDER BY nombre, apellido");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Registrar asistencia
    public function registrar($id_empleado, $tipo) {
        try {
            $sql = "INSERT INTO asistencia (id_empleado, tipo, fecha_hora) VALUES (:id, :tipo, NOW())";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id_empleado, PDO::PARAM_INT);
            $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (Exception $e) {
            error_log("Error al registrar asistencia: " . $e->getMessage());
            return false;
        }
    }

    // Obtener informe de asistencia
    public function obtenerInforme() {
        $sql = "
            SELECT e.nombre, e.apellido, 
                   MIN(a.fecha_hora) AS entrada,
                   MAX(a.fecha_hora) AS salida,
                   TIMESTAMPDIFF(HOUR, MIN(a.fecha_hora), MAX(a.fecha_hora)) AS horas_trabajadas
            FROM asistencia a
            JOIN empleados e ON e.id_empleado = a.id_empleado
            WHERE a.tipo IN ('entrada','salida')
            GROUP BY e.id_empleado, DATE(a.fecha_hora)
            ORDER BY e.id_empleado, entrada
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>