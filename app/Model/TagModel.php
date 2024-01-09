<?php
namespace App\Model;
use PDO;
USE PDOException;
use config\Connection;
class TagModel{
    public $con;

    public function __construct()
    {
        $db = Connection::getdatabaseObj();
        $this->con = $db->getConnection();
    }
    public function getTags($id){
        try{
        $query="SELECT t.NAME FROM tagwiki
        INNER JOIN tag t
        ON tagwiki.id_tag=t.id
        WHERE tagwiki.id_wiki = 1;";
        $stmt = $this->con->query($query);
        $records = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $records;
        }
        catch(PDOException $e){
            echo "error fetching tags" . $e->getMessage();
        }
    }
}