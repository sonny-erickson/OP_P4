<?php 
session_start();
require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');


try
{
	if(isset($_GET['page']))
	{
		var_dump($_GET['page']);
		if($_GET['page'] === 'home')
		{
			home();
		}
		else if($_GET['page'] === 'post')
		{
			post($_GET['id']);
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
		else if($_GET['page'] === 'mention')
		{
			mention();
		}
		// Route du bouton signalé (comm +1)
		else if($_GET['page'] === 'signale')
		{
			signale($_GET['id'], $_GET['postId']);
		}
		else if($_GET['page'] === 'error')
		{
			error();
		}
		// ----------------------------------------------------------> AUTH
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
		else if($_GET['page'] === 'addComment')
		{
			addcomment($_GET['id'], $_POST['author'], $_POST['comment']);	
		}
		// ----------------------------------------------------------> ADMIN
		else if($_GET['page'] === 'admin')
		{
			admin();
		}
		else if($_GET['page'] === 'newArticle')
		{
			newArticle();
		}
		//route affichage dans l'admin des commentaires 
		else if($_GET['page'] === 'signalementAdmin')
		{
			signalementAdmin();
		}
		else if($_GET['page'] === 'approuverComm')
		{
			approuverComm($_GET['id']);
		}
		else if($_GET['page'] === 'deleteComm')
		{
			deleteComm($_GET['id']);
		}
		//Suppression article
		else if($_GET['page'] === 'deleteArticle')
		{
			deleteArticle($_GET['id']);
		}
		else if($_GET['page'] === 'editArticle')
		{
			editArticle($_GET['id']);
		}
		else if($_GET['page'] === 'editArticleSend')
		{
			editArticleSend($_GET['id']);
		}
		
		//Accés aux pages à  si et seulement si Connecté !!
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
   var_dump($errorMessage);
   require ("index.php?page=error");
}

