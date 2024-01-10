<?php
namespace App\Model;
use PDO;
USE PDOException;
use config\Connection;
class userModel extends Crud{

    public function getAllUsers(){
        return $this->read("user");
    }
}