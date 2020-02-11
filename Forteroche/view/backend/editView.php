<?php $title = " Jean Forteroche - Éditer un chapitre" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="template-middle">
  <div class="template-middle">
    <h1 class="title-page">Modifier le chapitre</h1>
    
    <a href="http://localhost/Forteroche/view/backend/dashBoard.php">
      <div class="goback">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span class="goback-text">Retour</span>
      </div>
    </a>

    <ul>
    <?php
        while ($donnees = $req->fetch())
      {
        $id = $donnees['id'];
    ?>
      <li class="feature">
        <a href="index.php?action=editer-chapitre&id="><?= htmlspecialchars($donnees['title']); ?></a>
        <i class="fas fa-edit"></i>
      </li>
    <?php
      }
      var_dump($donnees);
      $req->closeCursor();
    ?>
  </ul>




<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
