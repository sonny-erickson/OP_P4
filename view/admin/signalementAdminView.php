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
			      <th scope="col">Signalement</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row"><?php= $title ?></th>
			      <td><?php= $author?></td>
				  <td><?php= $author?></td>
			      <td><?php= $signalement ?></td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Approuver</button>
					<button type="button" class="btn btn-danger btn-sm">Effacer</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Blabla</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Blabla</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php' ?>