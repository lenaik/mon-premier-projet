<!DOCTYPE html>

<html>

  <head>
      <meta charset="utf-8" />
      <title>Le blog de Forteroche</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="public/images/jean.jpg"/>
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
       <link href="public/css/your-path-to-fontawesome/css/all.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <link href="public/css/styleBlog.css" rel="stylesheet" /> 
  </head>
      
  <body>

    <header class="header">

      <img src="public/images/fond%20d%20ecran.jpg" alt="alaska">

     
        <div class="container">
          <h1 class="titleAccueil"><?= $title ?></h1>         
        </div>
      

    </header> 

<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container">

      <div class="navbar-header">
            <a class="navbar-brand" href="accueil"><i id="iconMenu" class="fas fa-home"></i>Blog Jean Forteroche</a>
      </div>


        <div id="navbar" class="collapse navbar-collapse">

              <ul class="nav navbar-nav">

                  <li><a href="chapitres"><i id="iconMenu" class="fas fa-book"></i>Tous les chapitres</a></li>
                  <li><a href="contact"><i id="iconMenu" class="fas fa-at"></i>Contact</a></li>                
                                      
                        <?php
                        
                        if (isset($_SESSION['connected']))
                        { 
                          echo '<li><a href="administration"><i id="iconMenu" class="fas fa-tachometer-alt"></i>Tableau de bord</a></li>'; 
                          echo'<li><a href="deconnexion"><i id="iconMenu" class="fas fa-sign-out-alt"></i>Déconnexion</a></li>';   
                        }
                        else
                        {

                           echo '<li><a href="espace-connexion"><i id="iconMenu" class="fas fa-user-lock"></i>Espace Administrateur</a></li>';
                        }
                                                                        
                        ?>
                
                </ul>
                

            </div>
    </div>
</nav>
    
    
<div class="row">

          <h1 class="title-page"></h1>

    <div class="item"><p style="text-align: justify;">
      <?= $content ?>  
    </div>

</div>


  <script>
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
  </script>
 
  </body>
</html>
