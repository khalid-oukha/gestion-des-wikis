<?php
namespace App\Controller;
class ArticlesController
{
    public function index(){
        Controller::GetView("articles");
    }
}