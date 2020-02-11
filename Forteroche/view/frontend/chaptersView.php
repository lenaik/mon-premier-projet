<?php $title = " Un billet Pour l'Alaska - Le roman de Jean Forteroche" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


<section class="container-big">
  <h1 class='title-page'>Retrouvez tous les chapitres</h1>
    
  <div class="wrapper-chapters">
    <div class="content-chapters-left">
      <ul class="list-chapter">
        <?php       
          while ($data = $req->fetch())
          {
            $id = $data['id'];
        ?>         
          <li class="chapters" id="chapter<?= $id ?>"><a href="index.php?action=chapitre&id=<?= $id ?>"><?= $data['title']; ?></a></li>
          <li class="chapters" id="chapter<?= $id ?>"><?= $data['content']; ?></a></li>
          <em><a href="index.php?action=comment<?= $id ?>">Commentaires</a></em>
        <?php
          }
        ?>
      </ul>



    </div>

  </div>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>


