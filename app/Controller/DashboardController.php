<?php

namespace App\Controller;

use App\Model\categorieModel;
use App\Model\userModel;
use App\Model\WikiModel;

class DashboardController extends Controller
{
    public function index()
    {
        if (Controller::isAdmin()) {

            $user = new userModel();
            $categorie = new categorieModel();
            $wiki = new WikiModel();

            $totalUsers = $user->getAllUsers();
            $totalategories = $categorie->getAllCategories();
            $publishedWikis = $wiki->getPublishedWikis();
            $archivedWikis = $wiki->getArchivedWikis();
            $topauthors = $user->fetchTopAuthors();
            Controller::GetView("dashboard/dashboard", ['totalUsers' => $totalUsers, 'totalategories' =>  $totalategories, 'publishedWikis' => $publishedWikis, 'archivedWikis' => $archivedWikis, 'topauthors' => $topauthors]);
        } else {
            Controller::RedirectToNotFound();
        }
    }
}
