<?php $title = " Jean Forteroche - Éditer un chapitre" ?>
<?php
require "verif_session.php";
?>
<?php ob_start(); ?>


 <div class="template-middle">
                          <h1 class="title-page">Modifier le chapitre</h1>
                          
                          <a href="administration">

                            <div class="goback">
                              <i class="far fa-arrow-alt-circle-left"></i>
                              <span class="goback-text">Retour</span>
                            </div>

                          </a>



      <form class="backend-form" action="index.php?action=actualiser-chapitre&id=<?= $chapter['id'] ?>" method="post">

                    <div class="form-field-title">
                      <input name="titleUpdate" class="input-text" value="<?= nl2br(htmlspecialchars($chapter['title'])) ?>"/>
                    </div>

                    <div class="form-field-title">
                      <textarea name="contentUpdate">
                        <?= (html_entity_decode($chapter['content'])) ?>
                      </textarea>
                    </div>

                    <div class="form-field">
                      <input class="submit-btn" onclick="Confirmed()" type="submit" value="Éditer">
                    </div>
   
    </form>


</div> 

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.tiny.cloud/1/r2r72l74grxy2k5mc796g3assni76fmzuauxwwee4p48znti/tinymce/5/tinymce.min.js"></script>
<script>
  tinymce.init({
    themes: "advanced",
    selector: 'textarea',
    height: 500,
    width: '100%',
    menubar: false,
    forced_root_block : false,
    force_br_newlines : false,
    force_p_newlines : false,
    plugins: [
      'advlist autolink link lists image charmap print preview anchor textcolor ',
      'searchreplace visualblocks code fullscreen',
       "contextmenu textcolor paste fullpage textcolor",
      'insertdatetime media table contextmenu paste code help',
      
    ],
    toolbar: ' insert | undo redo | styleselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help ',
    entity_encoding : "raw",
  });
</script>

<script>
  function Confirmed() {
    confirm("Etes vous sur de vouloir modifier ce chapitre ?")
  }
</script>


<?php $content = ob_get_clean(); ?>
<?php require('view/backend/template.php'); ?>
