<?php include_once('include/header.php');
include_once('controleurs/nouvelles.php');
?>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Projet final</h1>

    <!-- Marketing Icons Section -->
    <?php
        $controllerNouvelles=new ControleurNouvelle;
        $controllerNouvelles->afficher3Actives();
    ?>
    <!-- /.row -->
	
  </div>
  <!-- /.container -->


  

<?php include_once('include/footer.php'); ?>
