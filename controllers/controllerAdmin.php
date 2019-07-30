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
function signalementAdmin()
{   
    $comments = getComments($id);
    if($signalement > 0)
    {
        signaléComments($postId);
    }
    require 'view/admin/signalementAdminView.php';
}

function newArticle()
{   
    if(isset($_POST['AddArticle']))    
    {
        $title = htmlspecialchars($_POST['titleArticle']);
        $content = htmlspecialchars_decode($_POST['contentArticle']);
        if (!empty($_POST['titleArticle']) AND !empty($_POST['contentArticle']))
        {
            createPost($id, $title, $content,$date_created);
            header("Location:index.php?page=admin&accept" .$accept="Article ajouté !");
            $accept="Article ajouté !";
        }
        else
        {
            $erreur = "Champs non remplis..";
        }
    }
    require 'view/admin/newArticleView.php';
}
function deleteArticle($id)
{
    if(isset($id) AND !empty($id))  
    {
        deletePost($id);
        header("Location: index.php?page=admin&accept=".$accept);
    }  
}
function editArticle($id)
{
    extract($_GET);
    $editArticle = getPost($id);
    require ('view/admin/editView.php');
}
function editArticleSend()
{
    extract($_POST);
    if(isset($AddArticle))   
    {
        if(isset($id) AND !empty($id))
        {
            editPost($id, $titleArticle, $contentArticle);
            header("Location: index.php?page=admin&accept=".$accept);
        }
        else 
        {
            echo "Errereur";
        }
    }
}