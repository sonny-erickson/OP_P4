<?php 

require('controllers/controller.php');
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
			contact($_GET['id']);
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
   require('view/viewError.php');
}

