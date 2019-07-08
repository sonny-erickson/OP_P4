<?php $title = 'Création billet'; ?>
<?php ob_start() ?>
<form class="mt-4" method="post" action="">
    <h1 class="text-center mt-4">Nouvel article</h1>
    <div class="form-group">
        <label for="name">Titre de l'article</label>
        <input type="text" class="form-control mb-2" name="titleArticle" id="name" value="">
    </div>
    <textarea class="form-control" name="contentArticle" rows="3">Inscrivez le contenu de l'article!</textarea>
    <div class="row d-flex justify-content-center pb-3">
        <button type="submit" name="AddArticle" class="btn btn-primary btn-md
          shadow rounded mt-3">Envoyer</button>
    </div>
</form>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php' ?>