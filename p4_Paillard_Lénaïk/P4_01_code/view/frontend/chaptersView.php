<?php $title = "Retrouvez tous les merveilleux chapitres." ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php
session_unset();
session_destroy();
?>
<?php ob_start(); ?>

<h1 class="title-chapters">Tous les chapitres:</h1>
    <div class="content">    

        <div class="indexChapters">
            
            

                    <?php       
                        while ($donnees = $req->fetch())
                        {
                          $id = $donnees['id'];
                          
                      ?>  
                          
                    <h1 class="title"><a href="index.php?action=chapitre&id=<?= $id ?>"><?= $donnees['title']; ?></a></h1>
                      
                    <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i><?= $donnees['created_date']; ?> </em></p>
                    <div class="extrait"><p style="text-align: justify;"><?= substr(html_entity_decode($donnees['content']), 0,200); ?>......</p>
                    </div>  
                    <i class="fas fa-box"></i> 
                        <?php
                        }
                        ?>
                      
           
            
        </div>
               
    </div>      

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


