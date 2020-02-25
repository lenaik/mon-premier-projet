<?php $title = " Contact"; ?>
<?php $header = "header" ?>
<?php $headerTop = "header-top" ?>
<?php ob_start(); ?>
<div class='Axel'>
<h1>Me contacter</h1>

	<p>Pour plus de renseignements : </p>
		<a href="mailto:contact@Forteroche.fr">Me contacter par mail.</a>
</div>	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

