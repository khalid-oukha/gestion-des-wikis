<?php
namespace App\Model;
use PDO;
USE PDOException;
use config\Connection;
class categorieModel extends Crud{
    public function getAllCategories(){
    return $this->read("categorie");
    }
}