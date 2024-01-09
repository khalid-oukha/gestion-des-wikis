<?php

namespace App\Controller;

use PDO;
use PDOException;
use config\Connection;

class ValidationController
{
    private static $con;
    public function __construct()
    {
        $db = Connection::getdatabaseObj();
        self::$con = $db->getConnection();
    }

    public static function required($input){
        if(empty(trim($input))){
            return true;
        }
        return false;
    }

    public static function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function validatePassword($password)
    {
        if (strlen($password) < 8 ) {
            return true;
        }
        return false;
    }

    public static function confirmPassword($password, $confirmPassword)
    {

        if ($password !== $confirmPassword || empty($password)) {
            return true;
        }
        return false;
    }

    public static function validateFullname($uname)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $uname)) {
            return true;
        }
        return false;
    }

}
