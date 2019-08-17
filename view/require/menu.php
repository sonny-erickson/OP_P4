
<header>
  <div class="small_screen">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg border-bottom shadow">
      <div class="container">
          <h5 class="font-weight-bold font-italic text-warning">FORTEROCHE Jean</br><small class="text-light">Auteur et écrivain</small></h5>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=qui_suis_je">Qui suis-je</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=ouvrages">Mes ouvrages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Espace membre
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-warning" href="index.php?page=inscription">S'INSCRIRE</a>
                <a class="dropdown-item text-warning" href="index.php?page=connection">SE CONNECTER</a>
                <a class="dropdown-item text-danger" href="index.php?page=deconnexion">DECONNEXION</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>		
    <?php if(isset($_SESSION['id_member']) AND ($_SESSION['rang']== 0))
    { ?>
            <div class="container-fluid bg-warning text-center"> Bienvenue <?= $_SESSION['pseudo'] ?>. Vous êtes connecté, vous pouvez commenté</div>
    <?php 
    } ?>
    <?php if(isset($_SESSION['id_member']) AND ($_SESSION['rang']== 1))
    { ?>
            <div class="container-fluid bg-warning text-center"> Bienvenue ADMIN</div>
    <?php 
    } ?>
    
  </div>  
</header>
