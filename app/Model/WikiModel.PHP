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
        try{
            $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id";
            $stmt = $this->con->query($query);
            $records = $stmt->fetchALL(PDO::FETCH_OBJ);
            return $records;
        }catch(PDOException $e){
            echo "error fetching this article" . $e->getMessage();
        }
    }

    public function AddWiki($data){
        return $this->create("wiki",$data);
    }

    public function updateWiki($data,$id){
        $this->update("wiki",$data,$id);
    }

    public function getArticle($id){
        try{
            $query = "SELECT w.*,u.full_Name,c.NAME FROM wiki w
            INNER JOIN user u
            ON w.user_id=u.id
            INNER JOIN categorie c 
            ON w.categorie_id=c.id
            WHERE status = 'published' and u.id = $id";
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
    


    public function getPublishedWikis(){

        return $this->getElementByColumn("published","wiki","status");
        // try{
        //     $query = "select * from wiki where `status` = 'published'";
        //     $stmt = $this->con->query($query);
        //     $recordes = $stmt->fetchAll(PDO::FETCH_OBJ);
        //     return $recordes;
        // }catch(PDOException $e){
        //     echo "error fetching wikis : " . $e->getMessage();
        // }

    }


    public function getArchivedWikis(){
        return $this->getElementByColumn("archived","wiki","status");
        // try{
        //     $query = "select * from wiki where `status` = 'archived'";
        //     $stmt = $this->con->query($query);
        //     $records = $stmt->fetchAll(PDO::FETCH_OBJ);
        //     return $records ;
        // } 
        // catch(PDOException $e){
        //     echo "error fetching wikis : " . $e->getMessage();
        // }
    }

}


