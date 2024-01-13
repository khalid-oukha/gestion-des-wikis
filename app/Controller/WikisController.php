<?php

namespace App\Controller;

use App\Model\categorieModel;
use App\Model\userModel;
use App\Model\WikiModel;

class WikisController extends Controller
{
    public function index()
    {
        $article = new WikiModel();
        $articles = $article->fetchAllWikis();
        Controller::GetView("dashboard\wikis", ["articles" => $articles]);

    }
    public function addwiki()
    {
        if (Controller::isLogedin()) {

            $article = new WikiModel();
            $categorie = new categorieModel();
            $user = new userModel();
            $categories = $categorie->getAllCategories();
            $users = $user->getAllUsers();

            Controller::GetView("dashboard\addwiki", ["categories" => $categories, "users" => $users]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function insertWiki()
    {
        if (Controller::isLogedin()) {

            $article = new WikiModel();
            $article->AddWiki($_POST);
            header("location:\wikis\wikis");

        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function updateWiki($id)
    {
        if (Controller::isLogedin()) {

            $article = new WikiModel();
            $categorie = new categorieModel();
            $user = new userModel();
            $categories = $categorie->getAllCategories();
            $users = $user->getAllUsers();
            $articles = $article->fetchwikiById($id);
            Controller::GetView("dashboard\updateWiki", ["categories" => $categories, "users" => $users, "id" => $id, "articles" => $articles]);

        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function submitUpdatedData()
    {
        if (Controller::isLogedin()) {

            $article = new WikiModel();
            $id = $_POST['id'];
            unset($_POST['id']);
            $article->updateWiki($_POST, $id);
            header("location:\wikis\wikis");

        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function deleteWiki($id)
    {
        if (Controller::isLogedin()) {

            $article = new WikiModel();
            $article->deleteWiki($id);
            header("location:\wikis\wikis");
            
        } else {
            Controller::RedirectToNotFound();
        }
    }

    //update status : 
    public function acceptWiki($id)
    {
        if (Controller::isAdmin()) {

            $article = new WikiModel();
            $article->acceptWiki($id);
            header("location:\wikis\wikis");
        } else {
            Controller::RedirectToNotFound();
        }
    }
    public function RejectWiki($id)
    {
        if (Controller::isAdmin()) {
            $article = new WikiModel();
            $article->RejectWiki($id);
            header("location:\wikis\wikis");
        } else {
            Controller::RedirectToNotFound();
        }
    }
    public function ArchiveWiki($id)
    {
        if (Controller::isAdmin()) {

            $article = new WikiModel();
            $article->ArchiveWiki($id);
            header("location:\wikis\wikis");
        } else {
            Controller::RedirectToNotFound();
        }
    }
}
