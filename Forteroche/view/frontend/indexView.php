<?php $title = " Bienvenue sur le blog littéraire de Jean Forteroche." ?>
<?php

session_unset();
session_destroy();
?>
<section>
        <div class="containerBio">
<i class="fas fa-feather fa-3x"></i>
            <div class="bio">
                              
                <h2 class="title-bio">Présentation de l'illustre Jean Forteroche.</h2>

                        <div class="sign">
                            <img src="http://localhost/Forteroche/public/images/jean.jpg" class="thumbnail cover" alt="Jean" />
                        </div>

                        <p class="paraBio">
                          Jean Forteroche est né le 4 mai 1964 à Ortona (province de Chieti, dans les Abruzzes), est un écrivain. Il naît dans un petit village italien, Ortona, marqué par une enfance catholique, devenant même enfant de chœur, sa mère l'imagine avec une carrière de curé. À saisir ans, il s'engage dans la Marine italienne. Il la quitte en 1982. Deux ans plus tard, en 1984, il rencontre Gabriel Pontello, célèbre écrivain et qu'il lui donne le goût de l'écriture.
                        </p>

              </div> 

          </div>
<i class="fas fa-bookmark fa-3x"></i>
          <div class="content">
              
                <h1 class="title-chapter">Extrait d'un chapitre à succès :</h1>
               
                        <div class="row">
                           
                          <div class="">
                              
                            <h2 class="title-chapter"><a href="index.php?action=chapitre&id=58">La singulière tristesse du gâteau au citron</a></h2>

                            <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i>25 Février 2020 </em></p>

                            <div class="item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut bibendum ligula. Suspendisse ut sem in sapien volutpat ultricies. Nullam cursus eros id libero hendrerit vulputate. Pellentesque tincidunt faucibus iaculis. Pellentesque fermentum risus felis, gravida tristique enim molestie eu. Sed a scelerisque purus. Vivamus eu tincidunt mi, at porttitor metus. Proin euismod venenatis ipsum luctus blandit. Sed sit amet porttitor quam. Nunc libero purus, malesuada et finibus eget, eleifend dapibus purus. Donec eget leo a enim convallis dignissim quis sit amet est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam imperdiet rutrum justo, sed blandit velit efficitur vitae. Sed finibus eros ut nisi dapibus, eu dictum metus aliquet. Etiam ullamcorper ligula in hendrerit aliquet.<p style="text-align: justify;"></p></div>

                          </div>

                        </div>

          </div>

        </div> 
 
</section>


<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>
