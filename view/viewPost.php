<?php $title = 'ONE article'; ?>
<?php ob_start(); ?>

<div class="container text-light ">
	<h4 class="text-warning border-top border-bottom mt-5"><strong><?= htmlspecialchars($post['title']); ?></strong></a> le <?= htmlspecialchars($post['date_created']); ?></h4>
	<img src="assets/images/articleimg.jpg" alt="articleimg">
	<p class="text-light text-justify mt-4"> <?= htmlspecialchars($post['content']); ?></p>
	<a  class=" text-danger" href="index.php?page=home">Retour aux articles</a>
	<h3 class="mt-5 mb-4">Commentaires :</h3>
	<?php 
	foreach ($comments as $comment) :
	?>
	<div class="jumbotron jumbotron-fluid text-dark p-2">
		<h5 class="border-bottom"><?= htmlspecialchars($comment['author']);?> le <?= htmlspecialchars($comment['date_comment']);?><button type="submit" class="btn btn-outline-danger btn-sm ml-4"><a href="index.php?page=signalé&amp;id=<?= $comment['id']?>" class="text-dark">Signaler</a></button></h5>
		<p class="text-justify">
			<?= htmlspecialchars($comment['comment']); ?>
		</p>
	</div>
	<?php endforeach; ?>
	<h3 class="mt-5 mb-4">Pour laissez un commentaire :</h3>
	<form action="index.php?page=addComment&amp;id=<?= $post['id'] ?>" method="post">
	  <div class="form-group">
	    <label for="author">Auteur</label>
	    <input type="text" class="form-control" id="author" name="author" required>
	  </div>
	  <div class="form-group">
	    <label for="comment">Commentaire</label>
	    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
	  </div>
	  <button type="submit" class="btn btn-warning mb-4">Submit</button>
	</form>
	
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php';?>