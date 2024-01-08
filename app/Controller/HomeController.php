<?php
namespace App\Controller;

use App\Model\WikiModel;

class HomeController 
{
    public function index(){
        $obj = new WikiModel();
        $wikis = $obj->fetchRecentWikis(6);
        Controller::GetView("home",['wikis' => $wikis]);
    }
}