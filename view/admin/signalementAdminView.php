<?php $title = 'Signalement'; ?>
<?php ob_start() ?>
    <div class="text-center">
		<h1 class="mt-4">Page de modération</h1>
		<p>Gestion des commentaires</p>
	</div>
	<div class="row">
		<div class="container mt-4">
			<table class="table table-striped">
			  <thead class=" white-text">
			    <tr class="table-info">
			      <th scope="col">Commentaire</th>
			      <th scope="col">De</th>
				  <th scope="col">Article n°</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <?php 
			  foreach ($comments as $comment) :
			  ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?= $comment['comment']; ?></th>
			      <td><?= $comment['author']; ?></td>
				  <td><?= $comment['post_id']; ?></td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm"><a class="text-light" href="index.php?page=approuverComm&amp;id=<?= $comment['id']?>">Approuver</a></button>
					<button type="button" class="btn btn-danger btn-sm" onclick =" return confirm('Etes-vous sûr ?')"><a class="text-light" href="index.php?page=deleteComm&amp;id=<?= $comment['id']?>">Effacer</a></button>
			      </td>
			    </tr>
			    <tr>
			  </tbody>
			  <?php endforeach; ?>
			</table>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php' ?>