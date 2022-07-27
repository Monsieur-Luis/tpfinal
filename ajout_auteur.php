<?php
    include_once('include/header.php'); 
    require_once 'controleurs/auteurs.php';
    
    if (isset($_POST['boutonAjouter'])) {        
        $controleurAuteur=new ControleurAuteur;
        $controleurAuteur->ajouter();
    }
?>

<html>

    <div class="container">

      <h1 class="mt-3">Ajouter un auteur</h1>

      <form method="POST">
        <div>
          <div class="mb-3">
            <label for="nom" class="form-label">Nom *</label>
            <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
            <input class="form-control" type="text" id="nom" name="nom" required maxlength="25">
          </div>
          <div class="mb-3">
            <label for="prenom" class="form-label">Prenom *</label>
            <!-- Attention! Vos validations doivent être cohérentes avec le champ correspondant dans la BD! -->
            <input class="form-control" type="text" id="prenom" name="prenom" required maxlength="25">
          </div>
        </div>


        <button class="btn btn-primary" role="button" name="boutonAjouter" type="submit">Ajouter l'auteur</button>
      </form>
    <hr>
      <a href="administration_module_personnel.php">Retour à la liste d'auteurs</a>
    </div>
    
    <?php include_once('include/footer.php'); ?>
</html>