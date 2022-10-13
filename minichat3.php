<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Afficher les anciens messages</title>
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
  		<h3>Minichat - Afficher les anciens messages</h3>
  		<form action="minichat_post2.php" method="post">
<p>
<label for="pseudo">Votre pseudo</label> <input type="text" name="pseudo" id="pseudo" class="form-control" 
value="<?php
                if(isset($_COOKIE['pseudo']))
                echo htmlspecialchars ($_COOKIE['pseudo']);
                ?>" placeholder="Rentre ton pseudo" maxlength="20" required> <br>
<label for="message">Message</label> <br> <textarea name="message" id="message" class="form-control" placeholder="Rentre ton message" maxlength="255" required></textarea> <br>
<input type="submit" name="Envoyer" value="Envoyer" class="form-control mb-2 bg-primary" />
<input type="reset" name="reset" value="Réinitialiser" class="form-control mb-2 bg-primary" />
<input type="button" name="refresh" value="Rafraichir" onclick="location.reload();" class="form-control mb-2 bg-primary" />
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

/**  Affichage des anciens messages */
 
//Verification
if (isset($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page'] > 0))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
 
  
//Utilisation d'une requête préparée :
$reponse = $bdd->prepare('SELECT id, pseudo, message FROM minichat ORDER BY id DESC LIMIT :limitebasse,10');
$reponse->bindValue(':limitebasse', '(($page-1)*10)', PDO::PARAM_INT);
$reponse->execute();
 
//on recupère chaque entrée une à une pour l'afficher
while ($donnees = $reponse->fetch())
{
    echo'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
//Création de liens suivant et précédent
echo $page > 1 ? '<a href="minichat3.php?page='.($page-1).'"><<< Page Précédente</a> ' : '';
echo '<a href="minichat3.php?page='.($page+1).' ">Page suivante >>> </a>';

$reponse->closeCursor();

?>
  	</div> 
  </div> 
  </body>
</html>