<?php
include_once('controleurs/categories.php');
include_once('controleurs/nouvelles.php');
include_once('include/header.php');
?>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">

    <?php
    $controllerCategories = new ControleurCategorie;
    $controllerCategories->afficherNomCategorie();
    ?>

  </h1>
  <!-- Afficher la liste de toutes nouvelles ACTIVES appartenant à la catégorie sélectionnée en ordre chronologique (de la plus récente à la plus ancienne) -->
  <!-- L'affichage est à votre discrétion -->

  <?php
  $controllerNouvelles = new ControleurNouvelle;
  $controllerNouvelles->afficherNouvellesParCategorie();
  ?>

</div>

<?php include_once('include/footer.php'); ?>