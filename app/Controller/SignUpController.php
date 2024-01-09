<?php
namespace App\Controller;

use App\Model\Crud;
use App\Model\signupModel;
class SignUpController{
    public function index(){
        Controller::GetView("signup");
    }

    public function registerUser(){
        $errors = array();

        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birthday = $_POST['birthday'];
        $objCrud = new Crud();

            if(ValidationController::validateFullname($uname)){
                $errors['password'] = "username must not contain special characters";
            }
            if(ValidationController::validateEmail($email)){
                $errors['emailform'] = "not valid Email ";
            }
            if(ValidationController::validatePassword($password)){
                $errors['password'] = "username must not contain special characters";
            }
            if(ValidationController::validateEmail($email)){
                $errors['emailform'] = "not valid Email ";
            }
            if(count($objCrud->unique($email,"user","email"))>0){
                $errors['emailform'] = "email already exist";
            }

            if(count($errors)==0){
                $userData = [
                    'full_name' => $uname ,
                    'email' => $email,
                    'birthday' => $birthday,
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                $user = new signupModel();
                $user->signup($userData);
                $redirect = URL_DIR . 'login';
                header("Location: $redirect");
            }else{
                $_SESSION['errors']=$errors;
                $redirect = URL_DIR . 'signup';
                header("Location: $redirect");
            }

    }
}