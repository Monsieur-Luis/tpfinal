<?php
include_once('include/header.php'); 
    require_once 'controleurs/auteurs.php';

    $controleurAuteur=new ControleurAuteur;

    if (isset($_POST['boutonSupprimer'])) {        
        $controleurAuteur->supprimer();
    }
?>

    <div class="container">
     
    <h1 class="mt-3">Suppression d'un auteur</h1>
    <hr>
    <?php
        
        $controleurAuteur->afficherFormulaireSuppressionAuteur();
    ?>
    
    <hr>
    <a href="administration_module_personnel.php">Retour à la liste d'auteurs</a>
    
    </div>
    <?php include_once('include/footer.php'); ?>