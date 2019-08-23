<?php require ("view/require/head.php"); ?>     
  <nav class="navbar navbar-light navbar-expand-lg border-bottom shadow" style="background-color: #e3f2fd;">
    <div class="container">
        <h5 class="font-weight-bold font-italic ">FORTEROCHE Jean<br><small>Auteur et écrivain</small></h5>
    </div>
  </nav>
<body class="bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar" style="background-color: #e3f2fd;">
        <ul class="navbar-nav">
          <li class="nav-item border-bottom  text-center">
            <a class="nav-link" href="index.php?page=admin">Admin</a>
          </li>
          <li class="nav-item border-bottom  text-center">
            <a class="nav-link" href="index.php?page=signalementAdmin">Modération</a>
          </li>
          <li class="nav-item border-bottom  text-center ">
                <a class="nav-link" href="index.php">Retour sur le site</a>
          </li>
          <li class="nav-item border-bottom  text-center ">
            <a href ="index.php?page=deconnexion" class="nav-link text-danger">Déconnexion</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <?= $content ?>
      </div>
    </div>
  </div>
</body>
<?php  require ("view/require/script.php"); ?>