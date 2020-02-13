<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<body>

<form method ="post">
	<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
	<input type="submit" name="formsend" id="formsend" >
	
</form>

<?php
 if(isset($_POST['formsend'])){

  extract($_POST);

   if(!empty($password)){
require_once("../../model/database.php");
              $options = [
                  'cost' => 12,
              ];
              $hashpass = password_hash($password, PASSWORD_BCRYPT, $options)."\n";

              if(password_verify($password, $hashpass)){
                echo "le mot de passe est correct";
              }else{
                echo "ce n'est pas le bon!!!";
              }
      }
       require_once("../../model/database.php");

              global $db;

              $createUser = $db->prepare("INSERT INTO membre(user,email,password) VALUES(:user,:email,:password)");
              $createUser->execute([
              'user'=>'Forteroche2', 
              'email'=> 'Forteroche@ve.com',
              'password'=>$hashpass  

    }
?>


</body>
</html>