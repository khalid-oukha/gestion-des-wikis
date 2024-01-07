<?php
namespace App\Controller;
class Controller
{
    public static function GetView($view){
        include "../app/View/$view.php";
    }
}