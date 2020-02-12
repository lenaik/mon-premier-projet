<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<body>

<form method ="post">
	<input type="text" name="pseudo" id="pseudo" placeholder="Votre identifiant" required><br/>
	<input type="text" name="email"  placeholder="Votre email" required><br/>
	<input type="submit" name="formsend" id="formsend" >	
</form>

<?php
   
  include 'Manager.php';
  global $db;

    $q = $db->prepare("INSERT INTO membre(user,email,password) VALUES(:user,:email,:password)");
    $q->execute([
    	'user'=>'Forteroche',
    	'email'=> 'Forteroche@sfr.com',
    	'password'=>'azer',
    ]);
    
    if(isset($_POST['formsend'])){

    	$user = $_POST['user'];
    	$email = $_POST['email'];

    if(!empty($user) && !empty($id) && !empty($email)){

          echo "Votre Pseudo : ".$user."<br/>";
          echo "Votre email: ".$email."<br/>";
      }

    }
?>


</body>
</html>