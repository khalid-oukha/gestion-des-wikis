<?php
namespace App\Model;
use PDO;
use PDOException;
class signupModel extends Crud{
    public function signup($data){
        $this->create("user",$data);
    }
}