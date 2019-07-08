<?php $title = 'Admin'; ?>
<?php ob_start() ?>
	<div class="text-center">
		<h1 class="mt-4">Administration</h1>
	</div>
	<div class="row">
		<div class="container mt-4 text-center">
			<button type="button" class="btn btn-success border-bottom"><a href='index.php?page=newArticle' class='text-light';>Nouvelle article</a></button>
		</div>
		<h3 class="ml-4 mt-5">Voici la listes des articles :</h3>
		<div class="container mt-4">
			<table class="table table-striped">
			  <thead class=" white-text">
			    <tr class="table-info">
			      <th scope="col">#</th>
			      <th scope="col">Titre</th>
			      <th scope="col">Contenu</th>
			      <th scope="col">Date</th>
				  <th scope="col">Nb commentaires</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <?php foreach ($posts as $post):?>
			  <?php $contentExtrait = htmlspecialchars(substr($post['content'],0,40));?>
			  <tbody>
			    <tr>
			      <th><?= htmlspecialchars($post['id']); ?></th>
			      <td><?= htmlspecialchars($post['title']); ?></td>
			      <td><?= $contentExtrait; ?></td>
			      <td> <?= htmlspecialchars($post['date_created']); ?></td>
				  <td>@mdo</td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			  </tbody>
			  <?php endforeach; ?>
			</table>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php'?>
		