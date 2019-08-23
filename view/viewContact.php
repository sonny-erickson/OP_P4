<?php $title = 'Contact'; ?>
<?php ob_start() ?>
  <div class="contact container text-light">
    <h3 class="text-center pt-3 mb-2">Laissez-moi un message : </h3>
    <form action="index.php?page=home" method="post" class="mt-5 mb-5" role="form">                  
      <div class="form-group">
        <label for="name">Votre nom</label>
        <input type="text" class="form-control mb-2" name="name" id="name" value="">
        <label for="email">Votre Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="nom@exemple.com" value="">
      </div>
      <div class="form-group">
        <label for="message">Votre message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-warning shadow mt-2" name="contactSend">Envoyer</button>
    </form>
  </div>
<?php $content = ob_get_clean() ?>
<?php require 'view/template.php' ?>