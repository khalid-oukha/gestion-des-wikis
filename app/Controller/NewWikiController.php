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
        if (Controller::isLogedin()) {

            $objcategorie = new categorieModel();
            $categories = $objcategorie->getAllCategories();
            Controller::getView("dashboard\addwiki", ['categories' => $categories]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function create_wiki()
    {
        if (Controller::isLogedin()) {

            $wiki = new WikiModel();
            $data = [];
            $tags = explode(",", $_POST["tags"]);
            $data['title'] = $_POST["title"];
            $data['description'] = $_POST['description'];
            $data['categorie_id'] = $_POST['categorie'];
            $data['content'] = $_POST['content'];
            $data['user_id'] = $_SESSION['id'];
            $wiki->CreateWiki('wiki', $data, $tags);
            header('Location: ../wikis');
        } else {
            Controller::RedirectToNotFound();
        }
    }
}
