<?php
namespace App\Controller;

use App\Model\WikiModel;

class HomeController extends Controller
{
    public function index(){
        $obj = new WikiModel();
        $wikis = $obj->fetchRecentWikis();
        // var_dump($wikis);die;
        // include "../app/View/home.php";

        Controller::GetView("home",['wikis' => $wikis]);
    }
}