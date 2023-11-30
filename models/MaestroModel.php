<?php


class MaestroModel
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
    public function idMaestro($idUsuario)
    {
        $res = $this->db->query("SELECT
                                    m.id_maestro as id_maestro
                                FROM
                                    maestros m
                                INNER JOIN
                                    usuarios mu ON m.id_usuario = mu.id_usuario
                                WHERE
                                    m.id_usuario = $idUsuario");

        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function alumnosClase($idMaestro)
    {
        $res = $this->db->query("select
                    a.id_alumno,
                    u.nombre AS nombre_alumno,
                    u.apellido AS apellido_alumno,
                    u.id_usuario,
                    m.id_maestro,
                    mu.nombre AS nombre_maestro,
                    rmc.id_clase AS id_clase_maestro,
                    c.nombre AS nombre_clase,
                    mac.calificacion
                from
                    matricula_Alumnos_Clases mac
                inner join
                    alumnos a ON mac.id_alumno = a.id_alumno
                inner join
                    usuarios u ON a.id_usuario = u.id_usuario
                inner join
                    clases c ON mac.id_clase = c.id_clase
                left join
                    relacion_Maestros_Clases rmc ON c.id_clase = rmc.id_clase
                left join
                    maestros m ON rmc.id_maestro = m.id_maestro
                left join
                    usuarios mu ON m.id_usuario = mu.id_usuario
                where
                    m.id_maestro = $idMaestro");

        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}