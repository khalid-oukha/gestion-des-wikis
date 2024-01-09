<?php

namespace App\Model;

use config\Connection;
use PDO;
use PDOException;

class Crud
{

    public $con;

    public function __construct()
    {
        $db = Connection::getdatabaseObj();
        $this->con = $db->getConnection();
    }

    public function create($tableName, $data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
            $query = "INSERT INTO `$tableName` ($columns) VALUES ($values)";
            $stmt = $this->con->prepare($query);
            $stmt->execute($data);
            echo "Record added successfully!";
        } catch (PDOException $e) {
            echo "Error creating record: " . $e->getMessage();
        }
    }





    public function read($tableName)
    {
        try {
            $query = "SELECT * FROM `$tableName` ";
            $stmt = $this->con->query($query);
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; 
        }
    }

    public function update($tableName, $data, $id)
    {
        try {
            $update_arr = [];
            foreach ($data as $column => $value) {
                $update_arr[] = "$column = :$column";
            }
            $update_arr = implode(", ", $update_arr);

            $query = "UPDATE `$tableName` SET $update_arr WHERE id = :id";
            $data['id'] = $id;

            $stmt = $this->con->prepare($query);
            $stmt->execute($data);

            echo "Record updated successfully!";
        } catch (PDOException $e) {
            echo "Error updating record: " . $e->getMessage();
        }
    }

    public function delete($tableName, $id)
    {
        try {
            $query = "DELETE FROM `$tableName` WHERE ID = :id";

            $stmt = $this->con->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            // Output a success message
            echo "Record deleted successfully!";
        } catch (PDOException $e) {
            // Handle errors
            echo "Error deleting record: " . $e->getMessage();
        }
    }
    public function getRecordById($tableName, $id)
    {
        $query = "SELECT * FROM $tableName WHERE id = :id";
        $stmt = $this->con->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public  function unique(string $value, string $table, string $column)
    {
        $query = "SELECT COUNT(*) FROM {$table} WHERE {$column} = :value";
        $stmt = $this->con->prepare($query);
        $stmt->bindValue(':value', $value);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        if ($count > 0) {
            return true;
        }
        return false;
    }
}
