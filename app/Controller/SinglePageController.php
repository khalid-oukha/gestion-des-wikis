<?php
namespace App\Controller;
class SinglePageController
{
    public function index(){
        Controller::GetView("SinglePage");
    }
}