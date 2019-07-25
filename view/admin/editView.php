<?php $title = 'Modification billet'; ?>
<?php ob_start() ?>
<form class="mt-4" action="index.php?page=editArticleSend" method ="POST">
    <h1 class="text-center mt-4">Modification de l'article</h1>
    <?php if(isset($erreur))
    {
      echo '<div class="container alert alert-danger text-center" role="alert">'.$erreur.'</div>';
    }
    if(isset($accept))
      {
        echo '<div class="container alert alert-success text-center" role="alert">'.$accept.'</div>';
      }
?>
    <div class="form-group" >
        <label for="name">Titre de l'article</label>
        <input type="text" class="form-control mb-2" name="titleArticle" id="name" value="<?= htmlspecialchars($editArticle['title']); ?>">
        <input type="hidden" name="id" value="<?= $editArticle['id']; ?>">
    </div>
    <textarea class="form-control" name="contentArticle" id="mytextarea" rows="3"><?= htmlspecialchars($editArticle['content']); ?></textarea>
    <div class="row d-flex justify-content-center pb-3">
        <button type="submit" name="AddArticle" class="btn btn-primary btn-md
          shadow rounded mt-3">Envoyer</button>
    </div>
</form>
<?php $content = ob_get_clean() ?>
<?php require 'templateAdmin.php' ?>