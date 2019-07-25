<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('models/modelAdmin.php');
require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');

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
    

    // if(isset($id) AND !empty($id));
    //{
        //editPost($id);
        //header("Location: index.php?page=admin&accept=".$accept);
    //} 
}