<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Le blog de Forteroche</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="public/images/jean.jpg"/>
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="http://localhost/Forteroche/public/css/styleBlog.css" rel="stylesheet" /> 
  </head>
      
  <body>

    <header class="header">

        <img src="http://localhost/Forteroche/public/images/fond%20d%20ecran.jpg" alt="alaska">

      <div class="intro">
        <div class="container">
          <h1><?= $title ?></h1>
         
        </div>
      </div>

    </header> 

<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container">   
    <div class="burger"></div>
      <div class="navbar-header">
            <a class="navbar-brand" href="index.php?action=accueil">Blog Jean Forteroche</a>
      </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?action=chapitres">Tous les chapitres</a></li>
            <li><a href="index.php?action=contact">Contact</a></li>
          </ul>
          <ul class="nav auth navbar-nav">
           <ul class="nav navbar-nav navbar-right">                        
           <?php if (isset($_SESSION['connected'])) { ?>
              <li><a>Vous êtes connecté</a><li>
                      <li><a href="index.php?action=administration"> Tableau de bord</a></li>
                               
            <?php } 
            else { ?>
                      <li><a href="index.php?action=espace-connexion"></i>Espace Administrateur</a></li>                                        
            <?php } ?>       
        </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
        
<div class="row">
              
    <div class="col-sm-9">
          <h1 class="title-page"></h1>
          
    <div class="item"><p style="text-align: justify;">
      <?= $content ?>  
    </div>

</div>


  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
  ></script>
  <script>
$(function() {
    var i = 0;
    slideCount = 5;
    function timeout() {
      setTimeout(function() {
        // Move $("#quote" + i) off to the left
        $("#quote" + i).animate({
          right: "120%"
        }, 2000);
        // Change selected quote
        i++;
        if(i > (slideCount - 1)) {
          i = 0;
        }
        // Move $("#quote" + i) to right side then back to middle
        $("#quote" + i).css("right", "-60%");
        $("#quote" + i).animate({
          right: "20%"
        }, 1500);
        timeout();
      }, 3500);
    };
    timeout();
  });

  $('.resume').hide();
  $('.resume:lt(1)').show();

  let chapters = $('.chapters');
  for (i=0; i<chapters.length; i++) {
    if (i % 2 == 0 ) {
      chapters[i].style.backgroundColor = "#4a4c52"
    } else {
      chapters[i].style.backgroundColor = "#dbdfe7"
    }
  }

  $('.chapters').click(function(){
    var id = $(this).attr('id');
    var all_resume = $('.resume');
    for (i=0;i<all_resume.length;i++){
      if (all_resume[i].classList.contains(id)){
        all_resume[i].style.display = 'flex';
      } else {
        all_resume[i].style.display = 'none';
      }
    } 
  });

</script>
  </body>
</html>
