<?php
$siteRootPath = '/auto-enchere/';
?>
<!-- Ici je ne met que le menu -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Auto Enchere</a>
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>">Accueil</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/detail.offre.php">Detail offre</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/connexion.php">Connexion</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/inscription.php">Inscription</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $siteRootPath; ?>pages/depot.php">Depot</a>
      </li>
    </ul>
  </div>
</nav>