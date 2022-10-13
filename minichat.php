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

  	<div class="container-fluid p-5 bg-primary text-white text-center">
  		<h1>phpexperience</h1>
  		<p>Toute la force du PHP!</p> 
  	</div>

  	<div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
  		<h3>Un Minichat</h3>
  		<form action="minichat_post.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" class="form-control" /><br/>
<label for="message">Message</label> : <input type="text" name="message" id="message" class="form-control"/><br/>
<input type="submit" value="Envoyer" class="form-control bg-primary" />
</p>
</form>
</div>

<div class="col-sm-6">
<h3>Améliorations du minichat</h3>
<ul>
  <li><a href="minichat2.php">Retenir le pseudo</a></li>
  <li><a href="minichat3.php">Afficher les anciens messages</a></li>
</ul>
</div>
</div>

<h3>Les derniers messages</h3>

<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while($donnees = $reponse->fetch())
{
echo'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
  	</div> 
  </div> 
  </body>
</html>