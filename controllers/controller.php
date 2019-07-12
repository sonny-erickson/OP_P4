<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');
require_once ('controllers/controllerDelete.php');




function home()
{
	$posts = getPosts();
	require ('view/viewAcceuil.php');
}
function post($id)
{
	if (isset($id) AND $id >0)
	{
		$post = getPost($id);
		$comments = getComments($id);
		require('view/viewPost.php');
	}
	else
	{
		echo 'Pas de commenataires ma gueule !';
	}
}
function addcomment($postId, $author, $comment)
{
	$newComment = postComment($postId, $author, $comment);
	if($newComment !== true)
	{
		throw new Exception ("ERRORRRRRR");
	}
	else
	{
		header('Location: index.php?page=post&id=' . $postId);
	}
}
function qui_suis_je()
{
	require ('view/viewQuiSuisJe.php');
}

function ouvrages()
{
	require ('view/viewOuvrages.php');
}

function contact()
{
	require ('view/viewContact.php');
}
