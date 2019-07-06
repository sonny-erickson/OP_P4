<?php $title = 'Profil'; ?>
<?php ob_start(); ?>
<div class="text-center text-light mt-3 mb-3">
    <h1>Profil de</h1>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'templateAdmin.php' ?>
