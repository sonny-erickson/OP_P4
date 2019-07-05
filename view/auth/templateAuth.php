<?php 
	require("../require/head.php");
?>     
    <nav class="navbar navbar-light navbar-expand-lg border-bottom shadow" style="background-color: #e3f2fd;">
      <div class="container">
          <h5 class="font-weight-bold font-italic ">FORTEROCHE Jean</br><small>Auteur et écrivain</small></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item mr-3">
                <a class="nav-link" href="index.php">Retour sur le site</a>
              </li>
              <li class="nav-item ml-3 ">
              <a href ="index.php?page=deconnexion"><button type="button" class="btn btn-danger ">Déconnexion</button></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
<body class="bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar" style="background-color: #e3f2fd;">
        <ul class="navbar-nav ">
          <li class="nav-item border-bottom  text-center">
            <a class="nav-link" href="index.php">Profil</a>
          </li>
          <li class="nav-item border-bottom  text-center">
            <a class="nav-link" href="index.php">Admin</a>
          </li>
          <li class="nav-item border-bottom  text-center">
            <a class="nav-link" href="index.php">Modération</a>
          </li>
          
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <?= $content ?>
      </div>
    </div>
  </div>
</body>
<?php   
    require("../require/script.php"); 
?>