<?php

namespace App\Controller;

use App\Model\Crud;

class LoginController
{
    public function index()
    {
        Controller::GetView("Login");
    }

    public function loginHandller()
    {
        $loginErrors = array();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $obj = new Crud();
        $user = $obj->unique($email, "user", "email");
        if ($user > 0) {
            $pwdCheck = password_verify($password, $user['password']);
            if ($pwdCheck) {
                // Password is correct, set session variables
                $redirect = URL_DIR . 'home';
                $_SESSION['id'] = $user['id'];
                $_SESSION['full_name'] = $user['full_Name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                // var_dump($_SESSION);die;
                if ($_SESSION['role'] == "admin") {
                    header("Location: $redirect");
                } else {
                    header("Location: $redirect");
                }
            } else {
                $loginErrors["password"] = "invalide password";
                $redirect = URL_DIR . 'login';
                header("Location: $redirect");
            }
        } else {
            $loginErrors["email"] = "invalide email";
        }
        $_SESSION['errors'] = $loginErrors;
    }

    public function logout()
    {
        $redirect = URL_DIR . 'login';

        session_unset();
        session_destroy();
        header("Location: $redirect");
    }
}
