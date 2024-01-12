<?php

namespace App\Controller;
use App\Model\categorieModel;
use App\Model\WikiModel;
use PDO;
use PDOException;

class NewWikiController extends Controller
{
    public function index()
    {
        $objcategorie = new categorieModel();
        $categories = $objcategorie->getAllCategories();
        // var_dump($categories);die;
        Controller::getView("dashboard\addwiki",['categories' => $categories]);

    }

    public function create_wiki(){
        $wiki = new WikiModel();
        $data=[];
        $tags = explode(",", $_POST["tags"]);
        $data['title']=$_POST["title"];
        $data['description'] = $_POST['description'];
        $data['categorie_id'] = $_POST['categorie'];
        $data['content'] = $_POST['content'];
        $data['user_id'] = $_SESSION['id'];
        // var_dump($tags);die;

        $wiki->CreateWiki('wiki', $data, $tags);
        header('Location: ../wikis');

    }
    
    // public function create_wiki()
    // {
    //     $Wiki = new WikiModel();
    //     $data = [];
    //     $tags = explode(",", $_POST["tags"]);
    //     $data['title'] = $_POST['title'];
    //     $data['description'] = $_POST['Description'];
    //     $data['category_id'] = $_POST['category'];
    //     $data['content'] = $_POST['content'];
    //     $data['author_id'] = $_SESSION['id'];
    //     // var_dump($data);die;
    //     $Wiki->CreateWiki('wiki', $data, $tags);
    //     header('Location: ../wikis');
    // }

}