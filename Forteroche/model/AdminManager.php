<?php

require_once("Manager.php");

class AdminManager extends Manager {

  public function login($user) {

if(!empty($_POST) && !empty($_POST['user']) && !empty($_POST['password'])){

    $db = $this->dbConnect();

    $dataUser = $db->prepare('SELECT id, password FROM membre WHERE user = :user' );
    $dataUser->execute(['user' => $user]);
    $resultat = $dataUser->fetch();
    
    
    if (isset($_POST['user']) AND $_POST['user']){
		// Comparaison du pass envoyé via le formulaire avec la base
		$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
		
		    if ($isPasswordCorrect) {
		      return $resultat;
}
}}}}