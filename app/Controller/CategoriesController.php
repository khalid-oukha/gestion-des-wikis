<?php

namespace App\Controller;

use App\Model\categorieModel;
use App\Model\userModel;
use App\Model\WikiModel;

class CategoriesController extends Controller
{

    public function index()
    {
        if (Controller::isAdmin()) {
            $categorie = new categorieModel();
            $categories = $categorie->getAllCategories();
            Controller::GetView("dashboard\categories", ["categories" => $categories]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function addCategorie()
    {
        if (Controller::isAdmin()) {

            $categorie = new categorieModel();
            $categories = $categorie->addCategorie($_POST);
            header("location:\wikis\categories");
        } else {
            Controller::RedirectToNotFound();
        }
    }
    public function deleteCategorie($id)
    {
        if (Controller::isAdmin()) {

            $categorie = new categorieModel();
            $categorie->deleteCategorie($id);
            header("location:\wikis\categories");
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function updateCategorie($id)
    {
        if (Controller::isAdmin()) {

            $categorie = new categorieModel();
            $categories = $categorie->updateCategorie($id);
            Controller::GetView("dashboard\updateCategorie", ["categories" => $categories]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function submitUpdateCategorie()
    {
        if (Controller::isAdmin()) {

            $categorie = new categorieModel();
            $id = $_POST['id'];
            unset($_POST['id']);

            $categorie->submitupdateCategorie($_POST, $id);
            header("location:\wikis\categories");
        } else {
            Controller::RedirectToNotFound();
        }
    }
}
