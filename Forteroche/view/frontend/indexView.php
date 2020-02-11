<?php $title = " Modification Le roman de Jean Forteroche" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>


 <div class="containerBio">
  
                     
              
              <div class="bio">

                 <h2 class="title-bio">Présentation du grand, de l'illustre Jean Forteroche.</h2>
                <div class="sign">
                    <img src="public/images/jean.jpg" class="thumbnail cover" alt="Jean" />
                </div>
                <p class="paraBio">
                  Jean Forteroche est né le 4 mai 1964 à Ortona (province de Chieti, dans les Abruzzes), est un écrivain. Il naît dans un petit village italien, Ortona, marqué par une enfance catholique, devenant même enfant de chœur, sa mère l'imagine avec une carrière de curé. À saisir ans, il s'engage dans la Marine italienne. Il la quitte en 1982. Deux ans plus tard, en 1984, il rencontre Gabriel Pontello, célèbre écrivain et qu'il lui donne le goût de l'écriture.
                </p>

              </div>
         
            
  </div>

              <div class="content">
  <h2 class="title-chapter">Mon dernier chef-d'oeuvre :</h2>
  <div class="row">
    
    <div class="">
      <h1 class="title"><a href="index.php?action=chapitre&id=24">Le dernier caribou de la montagne sud.</a></h1>
      <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i> 06 février 2020</em></p>
      <div class="item"><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget purus vitae nisl dignissim eleifend. Vestibulum porttitor nulla pharetra nisi venenatis, non tempus leo condimentum. Cras sit amet neque tincidunt, mollis ante eget, porta odio. Aenean pharetra justo suscipit nisl semper vehicula. Aliquam euismod orci non dolor hendrerit, sed tincidunt mi tincidunt. Aliquam vulputate suscipit purus vitae pulvinar. Phasellus et nibh eu risus porttitor sodales. Integer accumsan ornare hendrerit. Maecenas sed sagittis ex. Maecenas maximus auctor massa, quis dignissim metus faucibus non. Suspendisse at dignissim turpis. Sed sed viverra metus, eu efficitur felis. Quisque id libero sed mi maximus pretium eu nec urna. Mauris in velit ac ex pharetra sagittis luctus ac elit.</p></div>  
    </div>
  </div>
</div>
    </div> <!-- /container -->
  
</section>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
