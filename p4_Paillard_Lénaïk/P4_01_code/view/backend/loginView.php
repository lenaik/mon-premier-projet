<?php $title = " Jean Forteroche - Espace de connexion" ?>
<?php ob_start(); ?>


<session class="login-page">
  
         <h1 class="title-page">Espace d'administration</h1>

              <h2 class="subtitle-page">Veuillez vous connecter pour accéder à votre espace d'administration.</h2>
                  <h3 class="subtitle-page">Si vous n'êtes l'administrateur du site, veuillez quitter cette page. MERCI</h3>

                    <form class="login-form" action="login" method="post" autocomplete="off" >

                        <div class="login-form-top">

                            <div class="form-field">
                                <input type="password" id="user" class="input-text" name="user" placeholder="Nom d'utilisateur" required/>
                            </div>

                            <div class="form-field">
                                <input type="password" id="password" name="password" class="input-text" placeholder="Mot de passe" required />
                            </div>

                        </div>

                        <div class="form-field">
                            <input class="submit-btn" type="submit" name ="formsend" id="formsend" value="Envoyer">
                        </div>

                    </form>
</session>


<?php $content = ob_get_clean(); ?>
<?php require('view/backend/template.php'); ?>

