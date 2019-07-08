<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('models/modelAdmin.php');
require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');


function profil()
{
    require 'view/admin/profilView.php';
}
function admin()
{
    $posts = getPosts();
    require 'view/admin/adminView.php';

}
function signalement()
{
    require 'view/admin/signalementView.php';
}

function newArticle()
{   
    if(isset($_POST['AddArticle']))    
    {
        $title = htmlspecialchars($_POST['titleArticle']);
        $content = htmlspecialchars($_POST['contentArticle']);
        if (!empty($_POST['titleArticle']) AND !empty($_POST['contentArticle']))

        {
            createPost($id, $title, $content,$date_created);
            header("Location:index.php?page=admin");
        }
        else
        {
            echo "Champs non remplis..";
        }
    }
    require 'view/admin/newArticleView.php';
}