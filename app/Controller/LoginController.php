<?php

namespace App\Controller;

use App\Model\Crud;

class LoginController
{
    public function index()
    {
        if (!Controller::isLogedin()) {

            Controller::GetView("Login");
        
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function loginHandller()
    {
        $loginErrors = array();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $obj = new Crud();
        $user = $obj->getElementByColumn($email, "user", "email");
        if ($user > 0) {
            $pwdCheck = password_verify($password, $user[0]->password);
            if ($pwdCheck) {

                $redirect = URL_DIR . 'home';
                $_SESSION['id'] = $user[0]->id;
                $_SESSION['full_name'] = $user[0]->full_Name;
                $_SESSION['email'] = $user[0]->email;
                $_SESSION['role'] = $user[0]->role;

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
