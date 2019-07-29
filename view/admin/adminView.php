<?php $title = 'Admin'; ?>
<?php ob_start() ?>
	<div class="text-center">
		<h1 class="mt-4">Administration</h1>
	</div>
	<div class="row">
		<div class="container mt-4 text-center">
			<button type="button" class="btn btn-success border-bottom"><a href='index.php?page=newArticle' class='text-light';> + Nouvel article</a></button>
		</div>
		<?php 
		if(isset($accept))
		{
			echo '<div class="container alert alert-success text-center" role="alert">'.$accept.'</div>';
		}
		?>
		<h3 class="ml-4 mt-5">Voici la listes des articles :</h3>
		<div class="container mt-4">
			<table class="table table-striped">
			  <thead class=" white-text">
			    <tr class="table-info">
			      <th scope="col">#</th>
			      <th scope="col">Titre</th>
			      <th scope="col">Contenu</th>
			      <th scope="col">Date</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <?php foreach ($posts as $post):?>
			  <?php $contentExtrait = (substr(strip_tags(htmlentities($post['content'])),0,60));?>
			  <tbody>
			    <tr>
			      <th><?= htmlspecialchars($post['id']); ?></th>
			      <td><?= htmlspecialchars($post['title']); ?></td>
			      <td><?= $contentExtrait; ?></td>
			      <td> <?= htmlspecialchars($post['date_created']); ?></td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm" ><a class="text-light" href="index.php?page=editArticle&amp;id=<?= $post['id']?>">Modifier</a></button>
					<button type="button" class="btn btn-danger btn-sm " onclick =" return confirm('Etes-vous sûr ?')"><a class="text-light" href="index.php?page=deleteArticle&amp;id=<?= $post['id']?>">Effacer</a></button>
			      </td>
			    </tr>
			  </tbody>
			  <?php endforeach; ?>
			</table>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php'?>
		