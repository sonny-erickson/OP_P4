<?php
require ('models/model.php');

function home()
{
	$posts = getPosts();
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