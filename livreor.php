<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | un livre d'or</title>
  </head>
  <style>
  	form
  	{text-align:center;}
  </style>

  <body> 
  <div id="main">

  	<div class="container-fluid p-5 bg-primary text-white text-center">
  		<h1>phpexperience</h1>
  		<p>Toute la force du PHP!</p> 
  	</div>

  	<div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
  		<h3 class="text-center">Un Livre d'or</h3>
  		<div class="formulaire">
  		<form action="livreor.php" method="post" class="form">
  			<p><strong>Mon site s'il vous plait? Laissez-moi un message!</strong></p>
<p>
<label for="pseudo">Votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Rentre ton pseudo" maxlength="8" required/><br/>
<label for="message">Votre message</label> <br /> 
<textarea name="message" id="message" class="form-control"
placeholder="Rentre ton message" rows="8" cols="35" required></textarea><br/>
<input type="submit" value="Envoyer" name="envoyer" class="form-control bg-primary mx-2" />
<input type="reset" value="Réinitialiser" name="reset" class="form-control bg-primary mx-2" />
<input type="button" value="Rafraichir" name="refresh" onclick="location.reload();" class="form-control bg-primary mx-2" />
</p>
</form>
</div>

</div>
</div>


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

// Etape1
// Si le message est envoyé, on l'enregistre
// On teste si le pseudo et le message ont été envoyés
if (isset($_POST['pseudo']) AND isset($_POST['message'])) 
{

// On teste si le pseudo et le message ne sont pas vides
if (!$_POST['pseudo'] == "" AND !$_POST['message'] == "") 
{

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO livreor (pseudo, message, date_creation) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

}
else
{
// Redirection du visiteur vers la page du livre d'or
header('Location: livreor.php'); 
}
}

// Etape2
// On écrit les liens vers chacune des pages
// On met dans une variable le nombre de messages qu'on veut par page
$nombreDeMessagesParPage = 5;
// On récupère le nombre total de messages
$retour = $bdd -> query('SELECT COUNT(*) AS nb_messages FROM livreor');
$donnees = $retour -> fetch();
$totalDesMessages = $donnees['nb_messages'];
// On calcule le nombre de pages à créer
$nombreDePages = ceil($totalDesMessages/$nombreDeMessagesParPage);
// Puis on fait une boucle pour écrire les liens vers chacune des pages
echo 'page:';
for($i=1; $i<=$nombreDePages;$i++)
{
	echo '<a href="livreor.php?page='.$i.'">'.$i.'</a>';
}

//Nous avons decidé d'utiliser un tableau pour afficher cette etiquette.  
echo'<table width=100%>  
<tr>  
<th width=15% bgcolor=green> pseudo</th>  
<th width=85% bgcolor=green><font>Message</font></th>  
</tr>  
</table>'; 
// Etape3
// On affiche les messages
// Vérification sur la page
if (isset($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page'] > 0))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}
 
  
//Utilisation d'une requête préparée :
$reponse = $bdd->prepare('SELECT * FROM livreor ORDER BY id DESC LIMIT :limitebasse,5');
$reponse->bindValue(':limitebasse', '(($page-1)*5)', PDO::PARAM_INT);
$reponse->execute();
 
//on recupère chaque entrée une à une pour l'afficher
while ($donnees = $reponse->fetch())
{
    echo'<table><tr><td width=900px bgcolor=#6495ED>
    <p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> a écrit : <br />' .$donnees['date_creation'].'</td>'. '<td width=85% bgcolor=#cccccc>'. htmlspecialchars($donnees['message']) . '</p> </td></table> ';
}
  

$reponse->closeCursor();

?>
  	</div> 
  </div> 
  </body>
</html>