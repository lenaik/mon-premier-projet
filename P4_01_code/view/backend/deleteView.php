<?php $title = " Jean Forteroche - Supprimer un chapitre" ?>
<?php
require "verif_session.php";
?>
<?php ob_start(); ?>


<session class="template-middle">

  <h1 class="title-page">Supprimer un chapitre</h1>

    <h2 class="subtitle-page">Veuillez sélectionner le chapitre a supprimer dans la liste.</h2>
    
      <a href="administration">
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
          <li class="feature" >
            <?= htmlspecialchars($donnees['title']); ?>
            <i onclick="Confirmed(<?php echo $id?>)" class="fas fa-trash delete-button"></i>
          </li>
        <?php
          }
          $req->closeCursor();
        ?>
      </ul>

</session>




<script>
  function Confirmed(id) {
    if(confirm("Etes vous sur de vouloir suppimer le chapitre ?"))
    {
      window.location.href = "index.php?action=suppression-chapitre&id="+id;
    } else {
      console.log("Suppression annulée")
    }
  }
</script>


<?php $content = ob_get_clean(); ?>
<?php require('view/backend/template.php'); ?>
