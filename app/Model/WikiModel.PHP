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
    public function getArticle($id){
        try{
            $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id
            WHERE status='published' and u.id = $id";
            $stmt = $this->con->query($query);
            $records = $stmt->fetch(PDO::FETCH_OBJ);
            return $records;
        }catch(PDOException $e){
            echo "error fetching this article" . $e->getMessage();
        }

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
    public function fetchTopAuthors(){
        try{
            $query="SELECT u.full_Name,COUNT(u.id) AS number_wikis FROM user u 
            INNER JOIN wiki t
            ON u.id=t.user_id
            WHERE u.role='author'
            GROUP BY u.id
            LIMIT 5;
            ";
            $stmt=$this->con->query($query);
            $records=$stmt->fetchAll(PDO::FETCH_OBJ);
            return $records;
        }
        catch(PDOException $e){
            echo "error fetching records" . $e->getMessage();
        }
    }
}

