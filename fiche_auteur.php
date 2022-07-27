<?php
include_once('include/header.php');
require_once 'controleurs/auteurs.php';
?>
<html>
<div class="container">

    <h1 class="mt-3">Fiche détaillée d'un auteur</h1>
    <hr>
    <?php
    $controleurAuteur = new ControleurAuteur;
    $controleurAuteur->afficherFicheAuteur();
    ?>

    <hr>
    <a href="administration_module_personnel.php">Retour à la liste d'auteurs</a>
</div>

<?php include_once('include/footer.php'); ?>


</html>