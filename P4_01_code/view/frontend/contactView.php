<?php $title = " Contact"; ?>
<?php

session_unset();
session_destroy();
?>
<?php ob_start(); ?>
<div class='Axel'>
<h1>Me contacter</h1>

	<p>Pour plus de renseignements : </p>
		<a href="mailto:contact@Forteroche.fr">Me contacter par mail.</a>
</div>	
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>

