<?php

function admin()
{
    $model = new Model();
    $posts = $model -> getPosts();
    require 'view/admin/adminView.php';
}
function newArticle()
{   
    if(isset($_POST['AddArticle']))    
    {
        $modelAdmin = new ModelAdmin();
        $title = htmlspecialchars($_POST['titleArticle']);
        $content = htmlspecialchars_decode($_POST['contentArticle']);
        if (!empty($_POST['titleArticle']) AND !empty($_POST['contentArticle']))
        {
            $modelAdmin -> createPost($id, $title, $content,$date_created);
            header("Location:index.php?page=admin");
        }
        else
        {
            $erreur = "Champs non remplis..";
        }
    }
    require 'view/admin/newArticleView.php';
}
function editArticle($id)
{
    extract($_GET);
    $model = new Model();
    $editArticle = $model -> getPost($id);
    require ('view/admin/editView.php');
}
function editArticleSend()
{
    extract($_POST);
    if(isset($AddArticle))   
    {
        if(isset($id) AND !empty($id))
        {
            $modelAdmin = new ModelAdmin();
            $modelAdmin -> editPost($id, $titleArticle, $contentArticle);
            header("Location: index.php?page=admin");
        }
        else 
        {
            echo "Erreur";
        }
    }
}
function deleteArticle($id)
{
    if(isset($id) AND !empty($id))  
    {
        $modelAdmin = new ModelAdmin();
        $modelAdmin -> deletePost($id);
        header("Location: index.php?page=admin");
    }  
}
function signalementAdmin()
{   
    $modelAdmin = new ModelAdmin();
    $comments =  $modelAdmin -> signaleComments();
    require 'view/admin/signalementAdminView.php';
}

function approuverComm($id)
{
        if(isset($id) AND !empty($id))
        {
            $modelAdmin = new ModelAdmin();
            $modelAdmin -> approuverComment($id);
            header("Location: index.php?page=signalementAdmin");
        }
}
function deleteComm($id)
{
        if(isset($id) AND !empty($id))
        {
            $modelAdmin = new ModelAdmin();
            $modelAdmin -> deleteComment($id);
            header("Location: index.php?page=signalementAdmin");
        }
        else
        {
            echo "erreur";
        }
}