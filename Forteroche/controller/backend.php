<?php

require_once('model/AdminManager.php');
require_once('model/ChapterManager.php');


function login($user, $password) {
  $adminManager = new AdminManager();
  $dataUser = $adminManager->login($user);
  if ($dataUser === false) {
    throw new Exception('Connexion impossible !');
  }
  else {
    $_SESSION['utilisateur'] =  $dataUser['id'];
    header('Location:index.php?action=administration');
  }
}

function displayDashboard() {
  require('view/backend/dashBoard.php');
}

function displayLogin() {
  require('view/backend/loginView.php');
}

function displayRappel() {
  require('view/backend/reminder.php');
}

function displayCreate() {
  require('view/backend/createView.php');
}

function createChapter( $title, $content) {
  $addManager = new ChapterManager();
  $chapter = $addManager->addChapter($title, $content);
}

function displayEdit() {
  $postManager = new ChapterManager(); // Création d'un objet
  $req = $postManager->getChapters();
  require('view/backend/editView.php');
}


function displayEditChapter() {
  $editManager = new ChapterManager();
  $chapter = $editManager->getChapter($_GET['id']);
  require('view/backend/chapterViewEdit.php');
}

function editChapter($id, $title, $content) {
  $updateManager = new ChapterManager();
  $chapter = $updateManager->editChapter($id, $title, $content);
}

function displayDelete() {
  $postManager = new ChapterManager(); // Création d'un objet
  $req = $postManager->getChapters();
  require('view/backend/deleteView.php');
}


function deleteChapter($id) {
  $deleteManager = new ChapterManager();
  $chapter = $deleteManager->deleteChapter($id);
}


function displayModerate() {
  $commentManager = new CommentManager();
  $comments = $commentManager->getSignaledComments(1);
  require('view/backend/moderateView.php');
}

function deleteComment($id) {
  $deleteManager = new CommentManager();
  $comment = $deleteManager->deleteComment($id);
}

function SignalComment($id) {
  $signalManager = new CommentManager();
  $comment =  $signalManager->SignalComment($id);
}

function unSignalComment($id) {
  $cancelManager = new CommentManager();
  $comment =  $cancelManager->unSignalComment($id);
}

