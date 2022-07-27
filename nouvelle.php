<?php include_once('include/header.php');
include_once('controleurs/nouvelles.php');
?>

<html>
<!-- Page Content -->
<div class="container">

  <?php
  $controllerNouvelles = new ControleurNouvelle;
  $controllerNouvelles->afficherNouvelle();
  ?>

</div>

<?php include_once('include/footer.php'); ?>

</html>