<?php $title = " Jean Forteroche - Éditer un chapitre" ?>
<?php $header = "header-backend" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>

        
<section class="template-big">


  <div class="template-middle">
    <h1 class="title-page">Modifier le chapitre</h1>
    
    <a href="index.php?action=administration">
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
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.tiny.cloud/1/3y0o4z3btq0eswxcaiemnc9mp1rnzmew17ps4dg475gvkdzf/tinymce/5/tinymce.min.js"></script>
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
<?php require('template.php'); ?>
