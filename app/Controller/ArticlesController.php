<?php

namespace App\Controller;

use App\Model\userModel;
use App\Model\WikiModel;

class ArticlesController
{

    public function index()
    {
        $obj = new WikiModel();
        $author = new userModel();
        $wikis = $obj->fetchAllPublishedwikis();
        $topauthors = $author->fetchTopAuthors();
        Controller::GetView("articles", ['wikis' => $wikis, 'topauthors' => $topauthors]);
    }

    public function livesearch()
    {
        $input = $_POST['query'];
        // var_dump($input);die;
        $obj = new WikiModel();
        $result = $obj->search($input);
        echo json_encode($result);
    }
}
