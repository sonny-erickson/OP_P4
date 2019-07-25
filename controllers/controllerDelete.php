<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('models/modelAdmin.php');
require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');

function deleteArticle($id)
{
    if(isset($id) AND !empty($id))  
    {
        deletePost($id);
        header("Location: index.php?page=admin&accept=".$accept);
    }  
}