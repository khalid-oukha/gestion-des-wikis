<?php
namespace App\Controller;

use App\Model\WikiModel;

class ArticlesController
{

    public function index(){
        $obj = new WikiModel();
        $wikis = $obj->fetchRecentWikis(1000);
        $topauthors = $obj->fetchTopAuthors();
        // var_dump($topauthors);die;
        Controller::GetView("articles",['wikis' => $wikis,'topauthors' => $topauthors]);
    }
}