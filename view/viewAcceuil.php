
<?php  $title = "Page d'acceuil"; ?>
<?php ob_start(); ?>
               
    <div id="entete" class="container-fluid">
        <div class="container ">
            <h1 class="text-center text-light ">BILLET SIMPLE POUR L'ALASKA</h1>
            <p class="text-center text-light ">Nouveau roman de Jean Forteroche</p>
        </div>
    </div>
    <div class="container bg-secondary pt-3 pb-3 text-danger">
        <div class="container">
	        <h1 class="text-light text-center">Voici les articles</h1>
	        <?php foreach ($posts as $post):?>
	        <h4 class="text-warning border-top border-bottom" ><strong><?= htmlspecialchars($post['title']); ?></strong></a> le <?= htmlspecialchars($post['date_created']); ?></h4>
	        <p class="text-light text-justify"> <?= htmlspecialchars($post['content']); ?></br>
                <a href="index.php?page=post&amp;id=<?= $post['id']?>">Plus d'infos....</a>
            </p>
	        <?php endforeach; ?>
        </div>
    </div>
        
    <?php $content = ob_get_clean(); ?>
    <?php require ('view/template.php'); ?>
    
  