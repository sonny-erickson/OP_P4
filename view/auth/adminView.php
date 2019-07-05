<?php $title = 'Admin'; ?>
<?php ob_start() ?>
	<div class="text-center">
		<h1 class="mt-4">Administration</h1>
		<p>Bienvenue ..., ce blog contient ... articles et ... commentaires</p>
	</div>
	<div class="row">
		<div class="container mt-4 text-center">
			<button type="button" class="btn btn-success border-bottom">Nouvelle article</button>
		</div>
		<h3 class="ml-4 mt-5">Voici la listes des articles :</h3>
		<div class="container mt-4">
			<table class="table table-striped">
			  <thead class=" white-text">
			    <tr class="table-info">
			      <th scope="col">#</th>
			      <th scope="col">Titre</th>
			      <th scope="col">Contenue</th>
			      <th scope="col">Date</th>
				  <th scope="col">Nb commentaires</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>@mdo</td>
				  <td>@mdo</td>

			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Jacob</td>
			      <td>Thornton</td>
			      <td>@fat</td>
				  <td>@mdo</td>

			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Larry</td>
			      <td>the Bird</td>
			      <td>@twitter</td>
				  <td>@mdo</td>

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
<?php require 'templateAuth.php' ?>
		