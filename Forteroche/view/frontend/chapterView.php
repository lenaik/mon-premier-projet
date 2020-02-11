
<?php $title = $chapter['title'] ?>
<?php $header = "header-chapter" ?>
<?php $headerTop = "header-top-chapter" ?>
<?php ob_start(); ?>

<section class="template-big">
  <div class="template-middle">
    <h1 class="title-page">
      <?= htmlspecialchars($chapter['title']) ?>
    </h1>
    <a href="">
      <div class="goback">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span class="goback-text">Retour</span>
      </div>
    </a>
 <p>
        <?= nl2br(htmlspecialchars($chapter['content'])) ?>
    </p>
    
  </div>
<?php
while ($comment = $comments->fetch())  
{

?>

    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
     <a onclick="Signal()" href="index.php?action=signaler-commentaire&id=<?= htmlspecialchars($comment['id']) ?>" >Signaler le commentaire</a>
<?php
}
?>
  <h2 class="subtitle-page">Commentaires</h2>
  

  <h2 class="subtitle-page">Laissez votre commentaire</h2>

  <form class="contact-form sized-comment" action="index.php?action=ajout-commentaire&id=<?= $chapter['id'] ?>" method="post">
    <div class="form-field">
      <input class="input-text" placeholder="Entrez votre nom" type="text" id="author" name="author" />
    </div>
    <div class="form-field">
      <textarea class="input-text" placeholder="Laissez votre commentaire ici." required id="comment" name="comment"></textarea>
    </div>
    <div class="form-field">
      <input class="submit-btn" onclick="Confirmed()" type="submit" value="Envoyer" />
    </div>
  </form>

  
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
