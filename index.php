<?php 
session_start();

require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');


try
{
	if(isset($_GET['page']))
	{
		if($_GET['page'] === 'home')
		{
			home();
		}
		else if($_GET['page'] === 'qui_suis_je')
		{
			qui_suis_je();
		}
		else if($_GET['page'] === 'ouvrages')
		{
			ouvrages();
		}
		else if($_GET['page'] === 'contact')
		{
			contact();
		}
		else if($_GET['page'] === 'inscription')
		{
			inscription();
		}
		else if($_GET['page'] === 'connection')
		{
			connection();
		}
		else if($_GET['page'] === 'deconnexion')
		{
			deconnexion();
		}
		else if($_GET['page'] === 'connectionSend')
		{
			connectionSend();
		}
		else if($_GET['page'] === 'post')
		{
			post($_GET['id']);
		}
		else if($_GET['page'] === 'addComment')
		{
			if(isset($_GET['id']) && $_GET['id'] > 0)
			{
				if (!empty($_POST['author']) && (!empty($_POST['comment'])))
				{
					addcomment($_GET['id'], $_POST['author'], $_POST['comment']);
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
		else if (isset($_SESSION['id_member']) AND !empty($_SESSION['id_member']) AND !empty($_SESSION['pseudo']) AND !empty($_SESSION['pseudo']))
		{
			if($_GET['page'] === 'profil')
			{
				profil();
			}
		}
		// else if($_GET['page'] === "route")
	    // {
	    //     controlleur();
	    // }
		else
		{
			home();
		}
	}
	else
		{
			home();
		}
}
catch(Exception $e) 
{ 
   $errorMessage = $e->getMessage();
   require ('view/viewError.php');
}

