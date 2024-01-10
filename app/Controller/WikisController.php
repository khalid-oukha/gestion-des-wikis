<?php
namespace App\Controller;

use App\Model\categorieModel;
use App\Model\userModel;
use App\Model\WikiModel;

class WikisController extends Controller{
    public function index(){
        $article = new WikiModel();
        $articles = $article->fetchAllWikis();
        Controller::GetView("dashboard\wikis",["articles" => $articles]);
    }
    public function addwiki(){
        $article = new WikiModel();
        $categorie = new categorieModel();
        $user = new userModel();
        $categories = $categorie->getAllCategories();
        $users = $user->getAllUsers();

        Controller::GetView("dashboard\addwiki",["categories" => $categories,"users" => $users]);
    }
    public function updateWiki($id){
        $article = new WikiModel();
        $categorie = new categorieModel();
        $user = new userModel();
        $categories = $categorie->getAllCategories();
        $users = $user->getAllUsers();
        Controller::GetView("dashboard\updateWiki",["categories" => $categories,"users" => $users,"id" => $id]);
    }
    public function insertWiki(){
        $article = new WikiModel();
        // var_dump($_POST);die;
        $article->AddWiki($_POST);
        header("location:\wikis\dashboard\wikis");
    }

    public function submitUpdatedData(){
        $article = new WikiModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        $article->updateWiki($_POST,$id);

    }
}