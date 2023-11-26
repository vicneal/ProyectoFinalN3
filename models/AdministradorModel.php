<?php
include $_SERVER["DOCUMENT_ROOT"] . "/models/Model.php";

class AdministradorModel extends Model
{
    protected $table = "usuarios";
    public function __construct()
    {
        parent::__construct();
    }
    public function roles()
    {
        $res = $this->db->query("select distinct rol from {$this->table}");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function update($data)
    {
        $id = $_POST["id"];
        $mail = $_POST["email"];
        $rol_modificado = $_POST["rol"];
        $estado = intval($_POST["estado"]);
        $rol_antiguo = $_POST["rol_antiguo"];

        // Actualizar el rol en la tabla Usuarios
        $consultaPreparada = $this->db->prepare("UPDATE {$this->table} SET correo_electronico = :email, rol = :rol, activo = :estado WHERE id_usuario = :id");
        $consultaPreparada->bindParam(':id', $id);
        $consultaPreparada->bindParam(':email', $mail);
        $consultaPreparada->bindParam(':rol', $rol_modificado);
        $consultaPreparada->bindParam(':estado', $estado);

        if ($consultaPreparada->execute()) {
            // Verificamos el nuevo rol y realizamos la inserción o eliminación según sea necesario
            if (($rol_modificado === 'MAESTRO' || $rol_modificado === 'ALUMNO' || $rol_modificado === 'ADMIN') && $rol_modificado !== $rol_antiguo) {
                // Eliminamos el registro correspondiente si cambió a otro rol
                $queryDelete = "";
                $queryUpdateRol = "";

                if ($rol_antiguo === 'MAESTRO') {
                    // Eliminamos el registro de la tabla maestros
                    $queryDelete = "DELETE FROM maestros WHERE id_usuario = :id";
                    // Eliminamos los registros relacionados en relacion_maestros_clases
                    $queryDeleteRelacion = "DELETE FROM relacion_maestros_clases WHERE id_maestro = :id";
                } elseif ($rol_antiguo === 'ALUMNO') {
                    // Eliminamos el registro de la tabla alumnos
                    $queryDelete = "DELETE FROM alumnos WHERE id_usuario = :id";
                    // Eliminamos los registros relacionados en matricula_alumnos_clases
                    $queryDeleteMatricula = "DELETE FROM matricula_alumnos_clases WHERE id_alumno = :id";
                }

                // Ejecutamos las consultas si se han definido
                if (!empty($queryDelete)) {
                    $stmtDelete = $this->db->prepare($queryDelete);
                    $stmtDelete->bindParam(':id', $id);
                    $stmtDelete->execute();
                }

                if (!empty($queryUpdateRol)) {
                    $stmtUpdateRol = $this->db->prepare($queryUpdateRol);
                    $stmtUpdateRol->bindParam(':id', $id);
                    $stmtUpdateRol->execute();
                }

                // Ejecutamos la consulta para eliminar los registros relacionados en relacion_maestros_clases
                if (!empty($queryDeleteRelacion)) {
                    $stmtDeleteRelacion = $this->db->prepare($queryDeleteRelacion);
                    $stmtDeleteRelacion->bindParam(':id', $id);
                    $stmtDeleteRelacion->execute();
                }

                // Ejecutamos la consulta para eliminar los registros relacionados en matricula_alumnos_clases
                if (!empty($queryDeleteMatricula)) {
                    $stmtDeleteMatricula = $this->db->prepare($queryDeleteMatricula);
                    $stmtDeleteMatricula->bindParam(':id', $id);
                    $stmtDeleteMatricula->execute();
                }

                // Puedes agregar más lógica aquí para otros roles si es necesario
            }
            header("Location: /administradores/permisos");
        }
    }

    public function showTeachers()
    {
        $res = $this->db->query(
            "   SELECT  u.nombre, u.apellido, u.correo_electronico,m.direccion, m.fecha_nacimiento, c.nombre as clase_asignada from usuarios u
                                    inner join   maestros m on  m.id_usuario = u.id_usuario
                                    left join relacion_maestros_clases rc on rc.id_maestro = m.id_maestro
                                    left join clases c on c.id_clase = rc.id_clase"
        );
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function asignaturas()
    {

        $res = $this->db->query("select nombre from clases");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}