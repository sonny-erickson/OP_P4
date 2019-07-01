<?php $title = 'ONE article'; ?>
<?php ob_start(); ?>

<div class="container text-light">
<h4 class="text-warning border-top border-bottom"><strong><?= htmlspecialchars($post['title']); ?></strong></a> le <?= htmlspecialchars($post['date_created']); ?></h4>
	        <p class="text-light text-justify"> <?= htmlspecialchars($post['content']); ?></p>
	<a  class=" text-danger" href="index.php?page=home">Retour aux articles</a>
	<h2 class="border-bottom">Commentaires</h2>
	<?php 
	foreach ($comments as $comment) :
	?>
	<strong class="border-bottom"><?= htmlspecialchars($comment['author']);?> le <?= htmlspecialchars($comment['date_comment']);?></strong></br>
	
	<p class="text-justify border-bottom">
		<?= htmlspecialchars($comment['comment']); ?>
	</p>
	<?php endforeach; ?>
	<form action="index.php?page=addComment&amp;id=<?= $post['id'] ?>" method="post">
	  <div class="form-group">
	    <label for="author">Auteur</label>
	    <input type="text" class="form-control" id="author" name="author" required>
	  </div>
	  <div class="form-group">
	    <label for="comment">Commentaire</label>
	    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
	  </div>
	  <button type="submit" class="btn btn-warning">Submit</button>
	</form>
	
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'view/template.php';?>