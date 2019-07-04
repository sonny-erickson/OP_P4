<?php 
require("view/require/head.php");
require("view/require/menu.php");
require("view/require/script.php"); 
?>
<body>
	<div>
		<div class="container mt-4">
			<button type="button" class="btn btn-success ">Add New</button>
		</div>
		<div class="container mt-4">
			<table class="table">
			  <thead class=" white-text">
			    <tr class="table-success">
			      <th scope="col">#</th>
			      <th scope="col">Title</th>
			      <th scope="col">Content</th>
			      <th scope="col">Date</th>
			      <th scope="col">Action</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Mark</td>
			      <td>Otto</td>
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
			      <td>
			      	<button type="button" class="btn btn-primary btn-sm">Edit</button>
					<button type="button" class="btn btn-danger btn-sm">Delete</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</body>
		