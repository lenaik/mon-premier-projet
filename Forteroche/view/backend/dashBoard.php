
<?php $title = " Jean Forteroche - Connexion espace d'administration" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <h1 class="title-page">Espace d'administration</h1>
  <h2 class="subtitle-page">Retrouvez toutes les fonctionnalités afin de gérer votre site.</h2>
   <P>Rappel = Nom de d'utilisateur : Breezango, Mot de passe : azer</P>
   <p>Pour tout problème rencontré, veuillez contacter : Anjou Web Création au 06/06/07/04/05</p>
  <ul>  
    <li class="feature"><a href="../../index.php">Voir le site</a></li>
    <li class="feature"><a href="../../index.php?action=nouveau-chapitre">Créer un nouveau chapitre</a></li>
    <li class="feature"><a href="../../index.php?action=chapitres">Lecture des chapitres</a></li>
    <li class="feature"><a href="../../index.php?action=liste-edition">Modifier un chapitre</a></li>    
    <li class="feature"><a href="../../index.php?action=supprimer-chapitre">Supprimer un chapitre</a></li>    
    <li class="feature"><a href="../../index.php?action=moderation">Modération</a></li>
    <li class="feature"><a href="../../index.php?action=rappel">Rappel</a></li>
  </ul>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
