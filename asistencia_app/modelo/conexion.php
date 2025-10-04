<?php
class Conexion {
    private $host = "localhost";
    private $db = "empresa_xyz";
    private $user = "root";
    private $pass = "";

    public function conectar() {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db};charset=utf8",
                $this->user,
                $this->pass
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>