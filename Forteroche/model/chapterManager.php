
<?php


require_once("Manager.php");
class ChapterManager extends Manager {

  public function getChapters() {
    $db = $this->dbConnect();
    $req = $db->query('SELECT `id`, `title`, `content`, `created_date` FROM chapters ORDER BY id ');
  
    return $req;
  }
  
  public function getChapter($idchapter) {
    
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT `id`, `title`, `content`, `created_date` FROM chapters WHERE id = ?');
    $req->execute(array($idchapter));
    $chapter = $req->fetch();
    return $chapter;
  }

  public function deleteChapter($idChapter) {
    
    $db = $this->dbConnect();
    $delete = $db->prepare('DELETE FROM chapters WHERE id = ?');
    $delete->execute(array($idChapter));

    header('Location: supprimer-chapitre');
  }
  
  public function editChapter($idChapter, $title, $content) {
    
    $db = $this->dbConnect();
    $editChapter = $db->prepare('UPDATE chapters SET title = ? , content = ? WHERE id = ? ');
    $editChapter->execute(array($title, $content, $idChapter));

    header('Location: http://localhost/Forteroche/view/backend/dashBoard.php');    
  }
  public function addChapter($title, $content) {
    
    $db = $this->dbConnect();
    $addChapter = $db->prepare('INSERT INTO chapters( title, content, created_date) VALUES(?, ?, NOW())');
    $addChapter->execute(array($title, $content));

    header('Location: http://localhost/Forteroche/view/backend/dashBoard.php');    
  }
}
