<?php
namespace App\Controller;
class Controller
{
    public static function GetView($view,$data = []){
        extract($data);
        include "../app/View/$view.php";
    }
}