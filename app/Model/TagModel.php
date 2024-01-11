<?php

namespace App\Model;

use PDO;
use PDOException;
use config\Connection;

class TagModel extends Crud
{
    public $con;

    public function __construct()
    {
        $db = Connection::getdatabaseObj();
        $this->con = $db->getConnection();
    }

    public function getAllTags()
    {
        return $this->read("tag");
    }

    public function addtag($data)
    {
        $this->create("tag", $data);
    }

    public function deleteTag($id)
    {
        $this->delete("tag", $id);
    }

    public function updatetag($id)
    {
        return $this->getRecordById("tag", $id);
    }

    public function submitupdatetag($data, $id)
    {
        $this->update("tag", $data, $id);
    }

    public function getTags($id)
    {
        try {
            $query = "SELECT t.NAME FROM tagwiki
        INNER JOIN tag t
        ON tagwiki.id_tag=t.id
        WHERE tagwiki.id_wiki = 1;";
            $stmt = $this->con->query($query);
            $records = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $records;
        } catch (PDOException $e) {
            echo "error fetching tags" . $e->getMessage();
        }
    }
}
