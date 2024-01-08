<?php
namespace App\Model;
use config\Connection;
use PDO;
use PDOException;

class WikiModel extends Crud{
    
    public $con;

    public function __construct()
    {
        $db = Connection::getdatabaseObj();
        $this->con = $db->getConnection();
    }
    public function fetchAllWikis()
    {
        return $this->read('wiki');
    }

    public function fetchRecentWikis($limit)
    {
        try{
            $query="SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id
            WHERE status='published'
            order by created_at DESC LIMIT $limit ";

            $stmt=$this->con->query($query);
            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        }catch(PDOException $e){
            echo "error fetching top 4 wikis" . $e->getMessage();
            return [];
        }
    }
}


