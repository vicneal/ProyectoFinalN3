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

    public function updateRoles($data)
    {
        $id = intval($_POST["id"]); //id del ususario
        $mail = $_POST["email"];
        $rol_modificado = $_POST["rol"];
        $estado = intval($_POST["estado"]);
        $rol_antiguo = $_POST["rol_antiguo"];

        // Actualizar el rol en la tabla Usuarios
        $consultaPreparada = $this->db->prepare("UPDATE {$this->table} SET correo_electronico = :email, rol = :rol, activo = :estado WHERE id_usuario = :id");
        $consultaPreparada->bindParam(':id', $id); //id del usuario
        $consultaPreparada->bindParam(':email', $mail);
        $consultaPreparada->bindParam(':rol', $rol_modificado);
        $consultaPreparada->bindParam(':estado', $estado);

        $consultaPreparada->execute();
        if ($rol_antiguo == "ADMIN" && $rol_modificado == "MAESTRO") {
            //echo "vamos a insertar un nuevo maestro en la tabla maestros";
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
        } else if ($rol_antiguo == "ADMIN" && $rol_modificado == "ALUMNO") {
            echo "vamos a insertar un nuevo alumno en la tabla alumnos";
            $insertarAlumno = $this->db->query("INSERT INTO alumnos (id_usuario, fecha_nacimiento, direccion)
            VALUES ($id, '2000-02-20', '')");
            $ultimoIdAlumno = $this->db->lastInsertId();
            $insertarNuevMmatricula_alumnos_clases = $this->db->query("INSERT INTO Matricula_Alumnos_Clases ( id_alumno, id_clase, calificacion)
            VALUES( '$ultimoIdAlumno', 6, NULL)");
        } else if ($rol_antiguo == "ALUMNO" && $rol_modificado == "ADMIN") {

            $idAlumno = $this->db->query("select a.id_alumno as id_alumno, u.id_usuario,u.nombre from alumnos a
            inner join usuarios u
            on u.id_usuario = a.id_usuario
            where u.id_usuario= $id");
            $resultado = $idAlumno->fetch(PDO::FETCH_ASSOC);

            $idAlumno = $resultado["id_alumno"];

            $queryEliminarMAC = $this->db->query("delete from matricula_alumnos_clases where id_alumno = $idAlumno");
            $queryEliminarAlumno = $this->db->query("delete from alumnos where id_alumno = $idAlumno");
        } else if ($rol_antiguo == "MAESTRO" && $rol_modificado == "ALUMNO") {

            $idMaestro = $this->db->query("select m.id_maestro as id_maestro, u.id_usuario,u.nombre from maestros m
            inner join usuarios u
            on u.id_usuario = m.id_usuario
            where u.id_usuario= $id");
            $resultado = $idMaestro->fetch(PDO::FETCH_ASSOC);

            $idMaestro = $resultado["id_maestro"];

            $queryEliminarRMC = $this->db->query("delete from relacion_maestros_clases where id_maestro = $idMaestro");
            $queryEliminarMaestro = $this->db->query("delete from maestros where id_maestro = $idMaestro");

            echo "vamos a insertar un nuevo alumno en la tabla alumnos";
            $insertarAlumno = $this->db->query("INSERT INTO alumnos (id_usuario, fecha_nacimiento, direccion)
            VALUES ($id, '2000-02-20', '')");
            $ultimoIdAlumno = $this->db->lastInsertId();
            $insertarNuevMmatricula_alumnos_clases = $this->db->query("INSERT INTO Matricula_Alumnos_Clases ( id_alumno, id_clase, calificacion)
            VALUES( '$ultimoIdAlumno', 6, NULL)");
        } else if ($rol_antiguo == "ALUMNO" && $rol_modificado == "MAESTRO") {

            $idAlumno = $this->db->query("select a.id_alumno as id_alumno, u.id_usuario,u.nombre from alumnos a
            inner join usuarios u
            on u.id_usuario = a.id_usuario
            where u.id_usuario= $id");
            $resultado = $idAlumno->fetch(PDO::FETCH_ASSOC);

            $idAlumno = $resultado["id_alumno"];

            $queryEliminarMAC = $this->db->query("delete from matricula_alumnos_clases where id_alumno = $idAlumno");
            $queryEliminarAlumno = $this->db->query("delete from alumnos where id_alumno = $idAlumno");

            //echo "vamos a insertar un nuevo maestro en la tabla maestros";
            $insertarMaestro = $this->db->query("INSERT INTO maestros (id_usuario, fecha_nacimiento, direccion)
            VALUES ($id, '2005-02-20', '')");
            $ultimoIdMaestro = $this->db->lastInsertId();
            $insertarNuevaRelacionMaestroClase = $this->db->query("insert into relacion_maestros_clases (id_maestro, id_clase) values('$ultimoIdMaestro',6)");
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
                                    where u.rol = 'MAESTRO' and u.activo = 1 and u.id_usuario <> 16"
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

        // echo "$id_usuario, $id_maestro, $id_relacion_maestro_clase, $email, $nombre, $apellido, $direccion, $fecha, $claseAsignada";

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
    public function deleteMaestro($id)
    {
        $id_usuario = intval($_GET["id"]);

        $idMaestro = $this->db->query("select m.id_maestro as id_maestro, u.id_usuario,u.nombre from maestros m
        inner join usuarios u
        on u.id_usuario = m.id_usuario
        where u.id_usuario= $id_usuario");
        $resultado = $idMaestro->fetch(PDO::FETCH_ASSOC);

        $idMaestro = intval($resultado["id_maestro"]);

        echo $idMaestro;

        $queryEliminarRMC = $this->db->query("delete from relacion_maestros_clases where id_maestro = $idMaestro");
        $queryEliminarMaestro = $this->db->query("delete from  maestros  where id_maestro= $idMaestro");
        $eliminarUsuario = $this->db->query("delete from usuarios where id_usuario= $id_usuario");

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
            where u.rol ='ALUMNO' "
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
    public function deleteAlumno($id)
    {
        $id_usuario = intval($_GET["id"]);
        echo "$id_usuario";

        $idAlumno = $this->db->query("select a.id_alumno as id_alumno, u.id_usuario,u.nombre from alumnos a
            inner join usuarios u
            on u.id_usuario = a.id_usuario
            where u.id_usuario= $id_usuario");
        $resultado = $idAlumno->fetch(PDO::FETCH_ASSOC);

        $idAlumno = $resultado["id_alumno"];

        echo "$idAlumno";

        $queryEliminarMAC = $this->db->query("delete from matricula_alumnos_clases where id_alumno = $idAlumno");
        $queryEliminarAlumno = $this->db->query("delete from alumnos where id_alumno = $idAlumno");
        $eliminarUsuario = $this->db->query("delete from usuarios where id_usuario= $id_usuario");

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

        var_dump($data);
        $queryInsertUsuario = $this->db->query("INSERT INTO Usuarios ( dni, nombre, apellido, correo_electronico, contrasena, rol, activo) 
        values('$dni','$nombre','$apellido','$email','$contrasena','AlUMNO','1')");

        $ultimoIdUsuario = $this->db->lastInsertId();

        $queryInsertAlumno = $this->db->query("INSERT INTO Alumnos ( id_usuario, fecha_nacimiento, direccion)
        VALUES('$ultimoIdUsuario','$fecha','$direccion')");


        $ultimoIdAlumno = $this->db->lastInsertId();

        $queryInsertMAC = $this->db->query("INSERT INTO Matricula_Alumnos_Clases ( id_alumno, id_clase, calificacion)
        VALUES( '$ultimoIdAlumno', 6, NULL)");

        header("Location: /administradores/alumnos");
    }
    public function readClase()
    {
        $res = $this->db->query(
            "SELECT 
            c.id_clase,
            rmc.id_relacion,
            mac.id_matricula,
            c.nombre AS nombre_clase,
            m.id_maestro,
            CONCAT(u.nombre, ' ', u.apellido) AS nombre_maestro,
            COUNT(DISTINCT mac.id_alumno) AS cantidad_alumnos
        FROM clases c
        LEFT JOIN relacion_Maestros_Clases rmc ON c.id_clase = rmc.id_clase
        inner JOIN maestros m ON rmc.id_maestro = m.id_maestro
        LEFT JOIN usuarios u ON m.id_usuario = u.id_usuario
        LEFT JOIN matricula_Alumnos_Clases mac ON c.id_clase = mac.id_clase
        where c.id_clase <> 6
        GROUP BY c.id_clase, m.id_maestro, nombre_maestro,rmc.id_relacion,mac.id_matricula
        ORDER BY c.id_clase"
        );
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function maestrosList()
    {

        $res = $this->db->query("select u.nombre as nombre_maestro, u.id_usuario ,m.id_maestro from usuarios u
        inner join maestros m on m.id_usuario = u.id_usuario");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function updateClase($data)
    {
        $id_clase = intval($_POST["id_clase"]);
        $id_maestroActual = intval($_POST["id_maestro"]);
        $id_relacion = intval($_POST["id_relacion"]);
        $nombre_clase = $_POST["nombre_clase"];
        $maestroAsignado = intval($_POST["maestroAsignado"]);

        echo "id de la clase =$id_clase, id antiguo del maestro asiganado a la clase =$id_maestroActual, nombre de la clase =$nombre_clase, id del nuevo maestro asignado=$maestroAsignado, ide relacion $id_relacion";

        $modificarNombreClase = $this->db->query("UPDATE clases
                                                SET nombre = '$nombre_clase'
                                                WHERE id_clase = $id_clase");

        if ($id_maestroActual !== $maestroAsignado) {
            $modificarRelacionMaestroClase = $this->db->query("update relacion_maestros_clases set id_maestro= $maestroAsignado where id_relacion = $id_relacion");
        } else {
            $modificarRelacionMaestroClase = $this->db->query("update relacion_maestros_clases set id_maestro= $id_maestroActual where id_relacion = $id_relacion");
        }

        header("Location: /administradores/clases");
    }
    public function insertClase($data)
    {

        $nombre_clase = $_POST["nombre_clase"];
        $maestroAsignado = $_POST["maestroAsignado"]; //id del maestro asignado


        $queryInsertClase = $this->db->query("INSERT INTO Clases ( nombre, cupo_maximo, activo)
        VALUES( '$nombre_clase', 20, true)");

        $ultimoIdClase = $this->db->lastInsertId();

        $queryInsertRMC = $this->db->query("INSERT INTO Relacion_Maestros_Clases ( id_maestro, id_clase)
        VALUES( '$maestroAsignado', '$ultimoIdClase')");

        header("Location: /administradores/clases");
    }
    public function deleteClase($data)
    {
        $id_clase = intval($_GET["id"]);
        $id_rcm = intval($_GET["id_rcm"]);
        $id_mac = intval($_GET["id_mac"]);

        echo "$id_clase, $id_rcm, $id_mac";

        if ($id_mac == 0) {
            $updateRMC = $this->db->query("update relacion_maestros_clases set id_clase=6 where id_relacion =$id_rcm");
            $deleteClase = $this->db->query("delete from clases where id_clase = $id_clase");
        } else {
            $updateRMC = $this->db->query("update relacion_maestros_clases set id_clase=6 where id_relacion =$id_rcm");
            $updateMAC = $this->db->query("update matricula_Alumnos_Clases set id_clase=6, calificacion=null where id_matricula =$id_mac");
            $deleteClase = $this->db->query("delete from clases where id_clase = $id_clase");
        }
        //array(3) { ["id"]=> string(2) "10" ["id_rcm"]=> string(2) "35" ["id_mac"]=> string(0) "" } id_mac me da un string vacio cuandono hay alumnos inscritos en esa clase


        header("Location: /administradores/clases");
    }
}