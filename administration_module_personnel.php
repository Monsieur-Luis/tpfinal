<?php include_once('include/header.php'); 
require_once 'controleurs/auteurs.php';
?>

  <!-- Page Content -->
  <div class="container">
  
	<h1 class="my-4">Administration - Module personnel</h1>
	
	<a class="btn btn-primary"  role="button" href="ajout_auteur.php" class="btn btn-primary float-right" aria-label="Ajouter un auteur">
        Ajouter un auteur
    </a>
	<!-- Cette section doit permettre de gérer (lister, ajouter, modifier et supprimer) des enregistrement d'une table que vous avez ajoutée à la base de données. -->
	<!-- Vous pouvez réaliser cette demande en utilisant plusieurs pages php (une pour l'ajout, une pour l'édition et une pour la suppression) ou utiliser des composants dialog ou Modals -->
	<!-- Il doit être impossible d'accéder à cette page sans être préalablement connecté. Si un utilisateur non connecté essaie d'accéder à la page, un message d'erreur doit s'afficher -->
	
	<?php
        $controleurAuteurs=new ControleurAuteur;
        $controleurAuteurs->afficherTableauAvecBoutonsActionAuteurs();
    ?>
	
  </div>

<?php include_once('include/footer.php'); ?>