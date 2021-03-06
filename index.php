<?php 
session_start();
require_once ('controllers/controller.php');
require_once ('controllers/controllerAuth.php');
require_once ('controllers/controllerAdmin.php');
require_once ('models/Manager.php');
require_once ('models/model.php');
require_once ('models/modelAuth.php');
require_once ('models/modelAdmin.php');

try
{
	if(isset($_GET['page']))
	{
		if($_GET['page'] === 'home')
		{
			home();
		}
		else if($_GET['page'] === 'post' AND isset($_GET['id']))
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
		// --------------------------> AUTH
		else if($_GET['page'] === 'inscription')
		{
			inscription();
		}
		else if($_GET['page'] === 'connection')
		{
			connection();
		}
		else if($_GET['page'] === 'connectionSend')
		{
			connectionSend();
		}
		else if($_GET['page'] === 'deconnexion')
		{
			deconnexion();
		}
		else if($_GET['page'] === 'addComment')
		{
			addcomment($_GET['id'], $_POST['comment']);	
		}
		//Accés aux pages si et seulement si Connecté !!
		else if (isset($_SESSION['id_member']) AND !empty($_SESSION['id_member']) AND isset($_SESSION['pseudo']) AND !empty($_SESSION['pseudo']))
		{
			if ($_SESSION['rang'] == 1)
			{
				// ------------------------------> ADMIN
				if($_GET['page'] === 'admin')
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
			}		
			else 
			{
				throw new Exception("Erreur");
			}
		}
		// else if($_GET['page'] === "route")
	    // {
	    //     controlleur();
	    // }
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
   header ('Location: index.php?page=error');	
}

