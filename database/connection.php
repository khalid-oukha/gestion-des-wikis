<?php
namespace config;
use PDO;
use PDOException;

class Connection {

    private static $instance = null;
    private $connection;


    public function __construct()
    {
         $host = "localhost";
         $dbname="wiki";
         $username = "root";
         $password = "";

         try{
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         }
         catch(PDOException $e){
            echo "connection failed:" . $e->getMessage();
         }
    }

    public static function getdatabaseObj(){
        if(self::$instance===null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function GetConnection(){
        return $this->connection;
    }
}


// $db= Connection::getdatabaseObj();
// $Pdo=$db->GetConnection();