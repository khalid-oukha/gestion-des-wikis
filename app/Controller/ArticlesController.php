<?php
namespace App\Controller;

use App\Model\userModel;
use App\Model\WikiModel;

class ArticlesController
{

    public function index(){
        $obj = new WikiModel();
        $author = new userModel();
        $wikis = $obj->fetchRecentWikis(1000);
        $topauthors = $author->fetchTopAuthors();
        // var_dump($topauthors);die;
        Controller::GetView("articles",['wikis' => $wikis,'topauthors' => $topauthors]);
    }
}