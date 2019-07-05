<?php $title = 'Profil'; ?>
<?php ob_start(); ?>
<div class="text-center text-light mt-3 mb-3">
<h1 >Profil</h1>
<a href ="index.php?page=deconnexion"><button type="button" class="btn btn-danger btn-lg">Déco</button></a>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'templateAuth.php' ?>
