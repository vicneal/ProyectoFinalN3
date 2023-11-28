<?php
class Model
{
    protected $db;
    protected $table;

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
    /**
     * Metodo para obtener todos los datos de una tabla
     */
    public function all()
    {
        $res = $this->db->query("select * from {$this->table} where id_usuario <> 16 and rol <> 'ELIMINADO'");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    /**
     * Metodo para obtener un registro por su id
     * @param string $id id del usuario a buscar
     * @return array $data arreglo con los datos del usuario.
     */
    public function find($id)
    {
        $consultaPreparada = $this->db->prepare("select * from {$this->table} where id = :id");
        $consultaPreparada->bindParam(':id', $id);
        $consultaPreparada->execute();

        $data = $consultaPreparada->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function create($data)
    {
        $keys = array_keys($data);
        $keysString = implode(", ", $keys);

        $valuesString = implode(", :", $keys);  // Usa las claves como marcadores de posición

        $query = "INSERT INTO {$this->table} ($keysString) VALUES (:{$valuesString})";

        $consultaPreparada = $this->db->prepare($query);

        foreach ($data as $key => &$value) {
            $consultaPreparada->bindParam(":$key", $value);
        }

        $consultaPreparada->execute();

        if ($consultaPreparada) {
            $ultimoId = $this->db->lastInsertId();
            $data = $this->find($ultimoId);
            return $data;
        } else {
            return "No se pudo crear el cliente";
        }
    }

    /**
     * Metodo para modificar un registro por su id
     * @param string $id id del usuario a buscar
     * @return array $data arreglo con los datos del usuario.
     */

    public function update($data)
    {


        $updateFields = '';
        foreach ($data as $key => $value) {
            $updateFields .= "$key = :$key, ";
        }
        $updateFields = rtrim($updateFields, ', ');

        $consultaPreparada = $this->db->prepare("UPDATE {$this->table} SET $updateFields WHERE id = :id");
        $consultaPreparada->bindParam(':id', $_SESSION["update_empledo_id"]);

        foreach ($data as $key => &$value) {
            $consultaPreparada->bindParam(":$key", $value);
        }

        $consultaPreparada->execute();
    }


    public function destroy($id)
    {
        $consultaPreparada = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $consultaPreparada->bindParam(':id', $id, PDO::PARAM_INT);
        $consultaPreparada->execute();
    }
}