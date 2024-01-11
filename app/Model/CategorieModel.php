<?php
namespace App\Model;
use PDO;
USE PDOException;
use config\Connection;
class categorieModel extends Crud{
    public function getAllCategories(){
    return $this->read("categorie");
    }

    public function addCategorie($data){

            $this->create("categorie",$data);

    }
    public function deleteCategorie($id)
    {
        $this->delete("categorie", $id);
    }

    public function updateCategorie($id){
        return $this->getRecordById("categorie", $id);
    }

    public function submitupdateCategorie($data,$id){
        $this->update("categorie",$data,$id);
    }


    

}