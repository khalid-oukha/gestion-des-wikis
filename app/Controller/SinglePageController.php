<?php
namespace App\Controller;

use App\Model\TagModel;
use App\Model\WikiModel;

class SinglepageController extends Controller
{
    public function index($id){
        $obj = new WikiModel();
        $tag = new TagModel();
        $singleArticle = $obj->getArticle($id);
        $articleTags = $tag->getTags($id);
        // var_dump($articleTags);die;
        Controller::GetView("SinglePage",['singleArticle' => $singleArticle,'articleTags' => $articleTags]);
    }
}