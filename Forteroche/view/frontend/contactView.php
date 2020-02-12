<?php $title = " Un billet Pour l'Alaska - Formulaire de contact" ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>
<h1>Me contacter</h1>
<p>Pour plus de renseignements : </p>
<a href="mailto:contact@Forteroche.fr">Me contacter par mail.</a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
