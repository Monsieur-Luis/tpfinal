<?php include_once('include/header.php');
include_once('controleurs/modulePersonnel.php');

?>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4">Module personnel</h1>
  <h2>Afficher la date de début de la lecture d'un livre, la date de fin ainsi que le titre.</h2>
  <hr>

  <?php
  $controllerPersonnel = new ControleurModulePersonnel;
  $controllerPersonnel->ObtenirTous();
  ?>
  <!-- Affichez les enregistrement de la table que vous avez ajoutée à la base de données. -->

</div>

<?php include_once('include/footer.php'); ?>