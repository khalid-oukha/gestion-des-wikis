<?php
namespace App\Controller;

use App\Model\WikiModel;

class ArticlesController
{

    public function index(){
        $obj = new WikiModel();
        $wikis = $obj->fetchRecentWikis(1000);
        Controller::GetView("articles",['wikis' => $wikis]);
    }
}