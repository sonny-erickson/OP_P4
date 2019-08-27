<?php $title = 'Signalement'; ?>
<?php ob_start() ?>
    <div class="text-center">
		<h2 class="mt-4">Page de modération</h2>
		<p>Gestion des commentaires</p>
	</div>
	<div class="row">
		<div class="container mt-4">
			<div class="table-responsive">
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
						<th scope="row"><?= (substr(strip_tags($comment['comment']),0,30)). '...'; ?></th>
						<td><?= $comment['pseudo']; ?></td>
						<td><?= $comment['post_id']; ?></td>
						<td>
							<a class="btn btn-primary btn-sm mt-1" style="width: 75px;height: 31px;font-size: 12px;" href="index.php?page=approuverComm&amp;id=<?= $comment['id']?>">Approuver</a>
							<a class="btn btn-danger btn-sm mt-1" style="width: 75px;height: 31px;font-size: 13px;" onclick =" return confirm('Etes-vous sûr ?')" href="index.php?page=deleteComm&amp;id=<?= $comment['id']?>">Effacer</a>
						</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php' ?>