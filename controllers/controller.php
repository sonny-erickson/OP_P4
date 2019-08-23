<?php

function home()
{
	$model = new Model();
	$posts = $model -> getPosts();
	require ('view/viewAcceuil.php');
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
function post($id)
{
	if (isset($id) AND $id >0)
	{
		$model = new Model();
		$post = $model -> getPost($id);
		if(!empty($post))
		{
			$comments = $model -> getComments($id);
			require('view/viewPost.php');
		}
		else
		{
			throw new Exception("Erreur");
		}
	}
	else
	{
		echo 'Pas d\'article !';
	}
}
function signale($id, $postId)
{
	extract($_POST);
	if(isset($id) AND !empty($id)) 
		{
			$model = new Model();
			$model ->signaleComm($id);
			header("Location: index.php?page=post&id=" . $postId);
		}
}
function addcomment($postId, $comment)
{
	if(isset($postId) && $postId > 0)
	{	$model = new Model();
		$newComment = $model ->postComment($postId, $comment, $_SESSION['id_member']);
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
		throw new Exception ("ERREUR BILLETS");
	}
}
