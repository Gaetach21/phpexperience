<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | un minichat</title>
  </head>

  <body> 
  <div id="main">

  	<div class="container mt-5">

<?php
// Création du Cookie
 
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);


// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}


// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat3.php');
?>
  	</div> 
  </div> 
  </body>
</html>