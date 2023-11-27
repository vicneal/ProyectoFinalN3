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
        $id = intval($_POST["id"]); //id del ususario
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

        $consultaPreparada->execute();
        if ($rol_antiguo == "ADMIN" && $rol_modificado == "MAESTRO") {
            echo "vamos a insertar un nuevo maestro en la tabla maestro";
            $insertarMaestro = $this->db->query("INSERT INTO maestros (id_usuario, fecha_nacimiento, direccion)
            VALUES ($id, '2005-02-20', '')");
            $ultimoIdMaestro = $this->db->lastInsertId();
            $insertarNuevaRelacionMaestroClase = $this->db->query("insert into relacion_maestros_clases (id_maestro, id_clase) values('$ultimoIdMaestro',6)");
        } else if ($rol_antiguo == "MAESTRO" && $rol_modificado == "ADMIN") {

            $idMaestro = $this->db->query("select m.id_maestro as id_maestro, u.id_usuario,u.nombre from maestros m
            inner join usuarios u
            on u.id_usuario = m.id_usuario
            where u.id_usuario= $id");
            $resultado = $idMaestro->fetch(PDO::FETCH_ASSOC);

            $idMaestro = $resultado["id_maestro"];

            $queryEliminarRMC = $this->db->query("delete from relacion_maestros_clases where id_maestro = $idMaestro");
            $queryEliminarMaestro = $this->db->query("delete from maestros where id_maestro = $idMaestro");
        }

        header("Location: /administradores/permisos");
    }

    public function showTeachers()
    {
        $res = $this->db->query(
            "   SELECT u.id_usuario, m.id_maestro, rc.id_relacion, u.nombre, u.apellido, u.correo_electronico,m.direccion, m.fecha_nacimiento, c.nombre as clase_asignada from usuarios u
                                    left join   maestros m on  m.id_usuario = u.id_usuario
                                    left join relacion_maestros_clases rc on rc.id_maestro = m.id_maestro
                                    left join clases c on c.id_clase = rc.id_clase
                                    where u.rol = 'MAESTRO' and u.activo = 1"
        );
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function asignaturas()
    {

        $res = $this->db->query("select id_clase, nombre from clases");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateMaestros($data)
    {
        $id_usuario = $_POST["id_usuario"];
        $id_maestro = $_POST["id_maestro"];
        $id_relacion_maestro_clase = $_POST["id_relacion_maestro_clase"];
        $email = $_POST["email"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $fecha = $_POST["fecha"];
        $claseAsignada = $_POST["claseAsignada"];

        echo "$id_usuario, $id_maestro, $id_relacion_maestro_clase, $email, $nombre, $apellido, $direccion, $fecha, $claseAsignada";

        if ($id_relacion_maestro_clase !== $claseAsignada) {
            $modificarRMC = $this->db->prepare("update relacion_maestros_clases set id_clase = :nuevaClase where id_relacion = :idRelacion;");
            $modificarRMC->bindParam(':nuevaClase', $claseAsignada);
            $modificarRMC->bindParam(':idRelacion', $id_relacion_maestro_clase);
            $modificarRMC->execute();
        }


        $modificarMaestro = $this->db->prepare("update maestros set direccion= :nuevaDireccion, fecha_nacimiento= :nuevaFecha where id_maestro = :idMaestro");
        $modificarMaestro->bindParam(':nuevaDireccion', $direccion);
        $modificarMaestro->bindParam(':nuevaFecha', $fecha);
        $modificarMaestro->bindParam(':idMaestro', $id_maestro);
        $modificarMaestro->execute();

        $modificarMaestro = $this->db->prepare("update usuarios set nombre= :nomb, apellido= :ape, correo_electronico = :email  where id_usuario = :idUsuario");
        $modificarMaestro->bindParam(':nomb', $nombre);
        $modificarMaestro->bindParam(':ape', $apellido);
        $modificarMaestro->bindParam(':email', $email);
        $modificarMaestro->bindParam(':idUsuario', $id_usuario);
        $modificarMaestro->execute();

        header("Location: /administradores/maestros");
    }

    public function insertMaestro($data)
    {
        var_dump($data);
        //datos del nuevo usuario
        $email = $_POST["email"];
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $contrasena = $_POST["dni"];
        //datos maestro
        $fecha = $_POST["fecha"];
        $direccion = $_POST["direccion"];
        //dato clase
        $claseAsignada = $_POST["claseAsignada"];

        echo $claseAsignada;

        $queryInsertUsuario = $this->db->query("INSERT INTO Usuarios ( dni, nombre, apellido, correo_electronico, contrasena, rol, activo) 
        values('$dni','$nombre','$apellido','$email','$contrasena','MAESTRO','1')");

        $ultimoIdUsuario = $this->db->lastInsertId();

        $queryInsertMaestro = $this->db->query("INSERT INTO Maestros ( id_usuario, fecha_nacimiento, direccion)
        VALUES('$ultimoIdUsuario','$fecha','$direccion')");

        $ultimoIdMaestro = $this->db->lastInsertId();

        if ($claseAsignada == "") {
            $queryInsertRMC = $this->db->query("INSERT INTO Relacion_Maestros_Clases ( id_maestro, id_clase)
        VALUES('$ultimoIdMaestro',6)");
        }

        $queryInsertRMC = $this->db->query("INSERT INTO Relacion_Maestros_Clases ( id_maestro, id_clase)
        VALUES('$ultimoIdMaestro','$claseAsignada')");
        header("Location: /administradores/maestros");
    }
    public function showAlumnos()
    {
        $res = $this->db->query(
            "SELECT u.id_usuario,a.id_alumno, u.dni, u.nombre, u.apellido, u.correo_electronico, a.direccion , a.fecha_nacimiento  from usuarios u 
            left join alumnos a on
            a.id_usuario = u.id_usuario
            where u.rol ='ALUMNO' AND activo =1"
        );
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateAlumnos($data)
    {

        $dni = $_POST["dni"];
        $id_usuario = $_POST["id_usuario"];
        $email = $_POST["email"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];

        $id_alumno = $_POST["id_alumno"];
        $direccion = $_POST["direccion"];
        $fecha = $_POST["fecha"];

        echo "$dni, $id_usuario, $id_alumno, $email, $nombre, $apellido, $direccion, $fecha";


        $modificarAlumno = $this->db->prepare("update alumnos set direccion= :nuevaDireccion, fecha_nacimiento= :nuevaFecha where id_alumno = :idAlumno");
        $modificarAlumno->bindParam(':nuevaDireccion', $direccion);
        $modificarAlumno->bindParam(':nuevaFecha', $fecha);
        $modificarAlumno->bindParam(':idAlumno', $id_alumno);
        $modificarAlumno->execute();

        $modificarUsuario = $this->db->prepare("update usuarios set dni= :dni, nombre= :nomb, apellido= :ape, correo_electronico = :email  where id_usuario = :idUsuario");
        $modificarUsuario->bindParam(':dni', $dni);
        $modificarUsuario->bindParam(':nomb', $nombre);
        $modificarUsuario->bindParam(':ape', $apellido);
        $modificarUsuario->bindParam(':email', $email);
        $modificarUsuario->bindParam(':idUsuario', $id_usuario);
        $modificarUsuario->execute();

        header("Location: /administradores/alumnos");
    }
    public function insertAlumno($data)
    {
        //datos del nuevo usuario
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contrasena = $_POST["dni"];
        //datos alumno
        $fecha = $_POST["fecha"];
        $direccion = $_POST["direccion"];

        $queryInsertUsuario = $this->db->query("INSERT INTO Usuarios ( dni, nombre, apellido, correo_electronico, contrasena, rol, activo) 
        values('$dni','$nombre','$apellido','$email','$contrasena','AlUMNO','1')");

        $ultimoIdUsuario = $this->db->lastInsertId();

        $queryInsertAlumno = $this->db->query("INSERT INTO Alumnos ( id_usuario, fecha_nacimiento, direccion)
        VALUES('$ultimoIdUsuario','$fecha','$direccion')");

        header("Location: /administradores/alumnos");
    }

    // header("Location: /administradores/maestros");

}