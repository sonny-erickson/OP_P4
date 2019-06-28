
<?php  $title = "Connectez-vous"; ?>
<?php ob_start(); ?>
  <div class="container">
    <h4 class="text-center pb-3 pt-5 ">CONNECTION</h4>
    <form class="text-center">
        <div class="row d-flex justify-content-center">
          <div class="form-group pb-2">
              <label for="exampleInputEmail1">Adresse Mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
          </div>
        </div>
        <div class="row d-flex justify-content-center pb-3">
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
          </div>
        </div>
        <div class="row d-flex justify-content-center pb-3">
          <button type="submit" class="btn btn-success btn-md
          shadow rounded">Envoyer</button>
        </div>
    </form>
    <div class="text-center">
      <p>
        Toujours pas de compte ? <a href="view/inscription.php">Inscrivez-vous ici !</a>
      </p>
    </div>
  </div>
  <?php $content = ob_get_clean(); ?>
  <?php require('view/template.php'); ?>
       