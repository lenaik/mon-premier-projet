<?php
if(!isset($_SESSION['connected'])) {
  header("Location: accueil");
  exit();
}
?>