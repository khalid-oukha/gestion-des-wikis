<?php

namespace App\Controller;

use App\Model\categorieModel;
use App\Model\userModel;
use App\Model\WikiModel;

class CategoriesController extends Controller
{

    public function index()
    {
        $categorie = new categorieModel();
        $categories = $categorie->getAllCategories();
        Controller::GetView("dashboard\categories", ["categories" => $categories]);
    }

    public function addCategorie(){
        $categorie = new categorieModel();
        $categories = $categorie->addCategorie($_POST);
        header("location:\wikis\categories");
    }
    public function deleteCategorie($id){
        $categorie = new categorieModel();
        $categorie->deleteCategorie($id);
        header("location:\wikis\categories");
    }

    public function updateCategorie($id){
        $categorie = new categorieModel();
        // $id = $_POST['id'];
        // unset($_POST['id']);
        $categories = $categorie->updateCategorie($id);
        // var_dump($categories);die;
        Controller::GetView("dashboard\updateCategorie",["categories" => $categories]);
    }

    public function submitUpdateCategorie(){
        $categorie = new categorieModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        // var_dump($id);die;

        $categorie->submitupdateCategorie($_POST,$id);
        header("location:\wikis\categories");

    }

    
}
