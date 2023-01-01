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
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

// On teste si le pseudo et le message existent bien
if (isset($_POST['pseudo']) AND isset($_POST['message'])) {

// On teste si le pseudo et le message ne sont pas vides
if (!$_POST['pseudo'] == "" AND !$_POST['message'] == "") {

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
}
else

// Si le pseudo et le message sont vides et ont été envoyés
{
header('Location: minichat.php'); 
}
}
?>
  	</div> 
  </div> 
  </body>
</html>