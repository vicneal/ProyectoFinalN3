<?php
class LoginModel
{
    protected $db;


    public function __construct()
    {
        $config = include($_SERVER["DOCUMENT_ROOT"] . "/config/dataBase.php");

        try {
            $dsn = "mysql:host=" . $config['host'] . "; dbname=" . $config['dbname'];
            $this->db = new PDO($dsn, $config["username"], $config["userPassword"]);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
    }
    public function mostrarUsuariosPorDefecto()
    {
        $res = $this->db->query("SELECT correo_electronico, dni 
        FROM usuarios 
        WHERE id_usuario <> 16 
            AND (correo_electronico = 'admin@admin' 
                OR correo_electronico = 'maestro@maestro' 
                OR correo_electronico = 'alumno@alumno');");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}