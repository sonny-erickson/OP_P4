
<footer>
  <div class="container-fluid bg-dark">
    <h5 class="pt-3 text-center text-light border-bottom border-light">Vous pouvez aussi me suivre sur  :</h5>     
    <div class="row">
      <div class=" offset-md-4 col-md-4 offset-md-4 d-flex justify-content-center">
        <a href="#"><img src="assets/images/facebook-icon.png" alt="facebook"></a>
        <a href="#"><img src="assets/images/instagram-icon.png" alt="insta"></a>
        <a href="#"><img src="assets/images/twitter-icon.png" alt="twitter"></a>
      </div>
    </div>
    <p class="text-center text-light mb-0 pb-3 pt-3">Ce projet à été réalisé par Petot Sonny pour le projet 4 d'OpenClassroom <br> <a href="index.php?page=mention" class="text-warning">Mentions légales </a>
      <?php
      if(isset($_SESSION['id_member']) AND ($_SESSION['rang']== 1))
      { ?>
      <a href="index.php?page=admin" class="text-warning">- Administration</a>
    </p>    
    <?php 
    } ?>

  </div>
</footer>



