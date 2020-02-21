
<?php $title = "Retrouvez tous les merveilleux chapitres." ?>

<?php ob_start(); ?>
<h1 class="title-chapters">Tous les chapitres:</h1>
<div class="content">    

  <div class="row">
    
    <div class="">

      <?php       
          while ($donnees = $req->fetch())
          {
            $id = $donnees['id'];
            
        ?>  
            
      <h3 class="title"><a href="index.php?action=chapitre&id=<?= $id ?>"><?= $donnees['title']; ?></a></h3>
        
      <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i><?= $donnees['created_date']; ?> </em></p>
      <div class="item"><p style="text-align: justify;"><?= substr(html_entity_decode($donnees['content']), 0,200); ?>......</p></div>  
       <?php
          }
        ?>
    </div>
    
  </div>

       
</div>      

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


