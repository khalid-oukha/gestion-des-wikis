<?php

namespace App\Controller;

use App\Model\TagModel;

class TagsController extends Controller
{


    public function index()
    {
        if (Controller::isAdmin()) {
            $tag = new TagModel();
            $tags = $tag->getAllTags();
            Controller::GetView("dashboard/tags", ['tags' => $tags]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function addTag()
    {
        $tag = new TagModel();
        $tag->addTag($_POST);
        header("location:\wikis\\tags");
    }

    public function deleteTag($id)
    {
        if (Controller::isAdmin()) {
            $tag = new TagModel();
            $tag->deleteTag($id);
            header("location:\wikis\\tags");
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function updateTag($id)
    {
        if (Controller::isAdmin()) {

            $tag = new TagModel();
            $tags = $tag->updateTag($id);
            Controller::GetView("dashboard\updateTag", ["tags" => $tags]);
        } else {
            Controller::RedirectToNotFound();
        }
    }

    public function submitUpdateTag()
    {
        if (Controller::isAdmin()) {

            $tag = new TagModel();
            $id = $_POST['id'];
            unset($_POST['id']);

            $tag->submitupdateTag($_POST, $id);
            header("location:\wikis\\tags");
        } else {
            Controller::RedirectToNotFound();
        }
    }
}
