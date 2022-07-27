<?php
include_once('include/header.php');
require_once 'controleurs/auteurs.php';

$controleurAuteur = new ControleurAuteur;

if (isset($_POST['boutonEditer'])) {
    $controleurAuteur->editer();
}
?>

<html>

<div class="container">

    <h1 class="mt-3">Éditer un auteur</h1>

    <?php
    $controleurAuteur->afficherFormulaireEditionAuteur();
    ?>

    <a href="administration_module_personnel.php">Retour à la liste d'auteurs</a>
</div>

<?php include_once('include/footer.php'); ?>

</html>