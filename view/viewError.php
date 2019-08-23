<!DOCTYPE html>
<html lang="fr">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>
	  <?php if(isset($title)) : ?>
	  	<?= $title ?> 
	  <?php else : ?>
	  	Projet PHP
	  <?php endif ?>
	  </title>
	  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
		<script>tinymce.init
		({
			// résolution pb affiche <p></p>
			forced_root_block : false,
			force_br_newlines : true,
			force_p_newlines : false
			selector:'#mytextarea',
		});
	  </script>
	  <script type="text/javascript" src="assets/script.js"></script>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="assets/style.css"/>
	</head>
    <body class="bg-danger">
        <div class="text-center align-self-center text-light mt-5">
            <h1>ERREUR 404</h1>
            <p> Vous êtes perdu ?? Retournez à la page d'acceuil</p>
            <button type="button" class="btn btn-success border-bottom align-items-center"><a href='index.php?page=home' class='text-light';> Retour acceuil</a></button>

        </div>
    
    </body>
