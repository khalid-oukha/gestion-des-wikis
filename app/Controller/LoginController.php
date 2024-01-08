<?php
namespace App\Controller;

class LoginController{
    public function index(){
        Controller::GetView("Login");
    }
}