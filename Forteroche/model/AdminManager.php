<?php

require_once("Manager.php");

class AdminManager extends Manager {

  public function loggin($user, $password) {

    $db = $this->dbConnect();

    $dataUser = $db->prepare('SELECT id, password FROM membre WHERE user = :user' );
    $dataUser->execute(['user' => $_POST['user']]);
    $user = $dataUser->fetch();
    }}