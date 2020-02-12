
<?php ob_start(); ?>

<section class="template-big">

  <a href="index.php?action=chapitres">
      <div class="goback">
        <i class="far fa-arrow-alt-circle-left"></i>
        <span class="goback-text">Retour</span>
      </div>
  </a>

<div class="content">
  <div class="row">
    
    <h1 class="title"><?= (html_entity_decode($chapter['title'])) ?></h1><h3>Jean Forteroche</h3>
    <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i><?= $chapter['created_date']; ?> </em></p>
 <div class="item"><p style="text-align: justify;">
        <?=(html_entity_decode($chapter['content'])) ?>
 </div>
 

 <br/>
 <br/>
<h2 class="subtitle-page">Commentaires</h2>

<?php
while ($comment = $comments->fetch())  
{
?>

    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <a  onclick="Signal()" href="index.php?action=signaler-commentaire&id=<?=($comment['id'])?>" >Signaler le commentaire</a>
<?php
}
?>
  

<div class="containerCom">
  <h2 class="subtitle-page">Ecrivez votre commentaire</h2>

  <form class="form-group" action="index.php?action=ajout-commentaire&id=<?= $chapter['id'] ?>" method="post">
    
    <div class="form-group">
      <label>Entrez votre nom</label>
      <input class="text" placeholder="Entrez votre nom" type="text" id="author" name="author" />
    </div>
    <div class="form-group">
      <label>Entrez votre commentaire</label>
      <textarea class="text" placeholder="Laissez votre commentaire ici." required id="comment" name="comment"></textarea>
    </div>
    <div class="form-group">
      <input class="btn btn-primary" onclick="Confirmed()" type="submit" value="Envoyer" />
    </div>
  
  </form>

</div class="containerCom">
</section>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
