<?php

namespace App\Controller;

class Controller
{

    public static function GetView($view, $data = [])
    {
        extract($data);
        include "../app/View/$view.php";
    }

    //check if the user is loged in and if its an admin
    public static function isAdmin()
    {
        if (isset($_SESSION['id']) && $_SESSION['role'] == "admin") {
            return true;
        } else {
            return false;
        }
    }

    
    //check if the user is loged
    public static function isLogedin()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
    }

    //send to error404 page
    public static function RedirectToNotFound()
    {
        $redirect = URL_DIR . 'error404';
        header("Location: $redirect");
    }
}
