<?php $title = 'Admin'; ?>
<?php ob_start() ?>
	<div class="text-center">
		<h1 class="mt-4">Administration</h1>
	</div>
	<div class="row">
		<div class="container mt-4 text-center">
			<a class="btn btn-success border-bottom text-light" href='index.php?page=newArticle'> + Nouvel article</a>
		</div>
		<h3 class="ml-4 mt-5">Voici la listes des articles :</h3>
		<div class="container mt-4">
			<div class="table-responsive">
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
				<?php $contentExtrait = (substr(strip_tags($post['content']),0,40)). '...';?>
				<tbody>
					<tr>
					<th><?= htmlspecialchars($post['id']); ?></th>
					<td><?= (substr(strip_tags(htmlspecialchars($post['title'])),0,20)); ?></td>
					<td><?= $contentExtrait; ?></td>
					<td> <?= htmlspecialchars($post['date_created']); ?></td>
					<td>
						<button type="button" class="btn btn-primary btn-sm mt-1" id="adminButton"><a class="text-light" href="index.php?page=editArticle&amp;id=<?= $post['id']?>">Modifier</a></button>
						<button type="button" class="btn btn-danger btn-sm mt-1" id="adminButton" onclick =" return confirm('Etes-vous sûr ?')"><a class="text-light" href="index.php?page=deleteArticle&amp;id=<?= $post['id']?>">Effacer</a></button>
					</td>
					</tr>
				</tbody>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php'?>
		