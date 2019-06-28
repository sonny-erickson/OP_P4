<?php $title = 'Inscription'; ?>
<?php ob_start() ?>
  <div class="jumbotron">
    <h3 class="text-center pt-3 mb-3">Pour créer un compte : </h3>
    <form>
     <div class="row d-flex justify-content-center">
        <div class="form-group pb-1">
          <label for="exampleInputEmail1">Pseudo</label>
          <input type="text" class="form-control" id="exampleInputPseudo1" placeholder="Entrez votre Pseudo">
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-1">
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Tapez mot de passe">
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-1">
        <div class="form-group">
          <label for="exampleInputPassword2"> Confirmation du mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Retapez mot de passe">
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="form-group pb-1">
          <label for="exampleInputEmail2">Adresse Mail</label>
          <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Entrez votre mail">
        </div>
      </div>
      <div class="row d-flex justify-content-center pb-1">
        <button type="submit" class="btn btn-success btn-md
        shadow rounded">Envoyer</button>
      </div>
    </form>
  </div>
<?php $content = ob_get_clean() ?>
<?php require 'view/template.php' ?>