<?php

class Manager {

  protected function dbConnect() {
    $db = new PDO('mysql:host=xnlnakinxe364.mysql.db;dbname=xnlnakinxe364;charset=utf8', 'xnlnakinxe364', 'Caramel53');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  
}


