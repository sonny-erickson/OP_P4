
<?php  $title = "Page d'acceuil"; ?>
<?php ob_start(); ?>
               
    <div id="entete" class="container-fluid">
        <div class="container">
            <h1 class="text-center text-light">BILLET SIMPLE POUR L'ALASKA</h1>
            <p class="text-center text-light">Nouveau roman de Jean Forteroche</p>
        </div>
    </div>
    <div class="container bg-secondary pt-3 pb-3 text-danger">
        <h2>CONTENU</h2>
    <?php foreach ($posts as $post):
    ?>
        <div class="container-fluid">
            <strong><?php echo  htmlspecialchars($donnees['titre']) ?></strong>
            <?php echo htmlspecialchars($donnees['contenu'])  . ' : ' .htmlspecialchars($donnees['id']).' / le'.htmlspecialchars($donnees['date_created']). '</br>'; ?>
        </div>
    <?php endforeach; ?>
    </div>
        
    <?php $content = ob_get_clean(); ?>
    <?php require('view/template.php'); ?>
    
  