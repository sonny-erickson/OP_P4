
<?php  $title = "Page d'acceuil"; ?>
<?php ob_start(); ?>
    <div id="entete" class="container-fluid">
        <div class="container" id="titlePosition">
            <h1 class="text-center text-light ">BILLET SIMPLE POUR L'ALASKA</h1>
            <p class="text-center text-light ">Nouveau roman de Jean Forteroche</p>
        </div>
    </div>
    <div class="container bg-secondary pt-3 pb-3">
        <div class="container">
	        <h2 class="text-light">Voici les articles</h2>
	        <?php foreach ($posts as $post):?>
	        <h4 class="text-warning border-top border-bottom mt-3 mb-3  text-center" ><strong><?= htmlspecialchars($post['title']);?></strong></a> le <?= htmlspecialchars($post['date_created']); ?></h4>
	        <div class="text-light text-justify"> 
                <img src="assets/images/articleimg.jpg" alt="articleimg">
                <p>
                <?= (substr(strip_tags($post['content']),0,350)) . " ..."; ?>
                </p>
                <a href="index.php?page=post&amp;id=<?= $post['id']?>" class="text-warning">Plus d'infos....</a>
            </div>
	        <?php endforeach; ?>
        </div>
    </div>
    <?php $content = ob_get_clean(); ?>
    <?php require ("view/template.php"); ?>
    
  