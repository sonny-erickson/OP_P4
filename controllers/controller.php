<?php
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');

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
		echo 'Pas de commentaires !';
	}
}
function addcomment($postId, $author, $comment)
{
	if(isset($postId) && $postId > 0)
	{
		if (!empty($author) && (!empty($author)))
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
		else
		{
			throw new Exception ("Erreur: champs non remplis");
		}
	}
	else
	{
		throw new Exception ("ERREUR BILLETS");
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
function mention()
{
	require ('view/viewMentionsLegales.php');
}
function error()
{
	require ('view/viewError.php');
}
function signale($id, $postId)
{
    extract($_POST);
	if(isset($id) AND !empty($id)) 
		{
			signaleComm($id);
			header("Location: index.php?page=post&id=" . $postId);
		}
}