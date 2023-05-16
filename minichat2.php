<?php
    session_start();
 
    $pseudo_tchat = "gaetan@21";
    if(!empty($_POST['pseudo']))//Si un pseudo a été rentré dans le formulaire
    {
        $pseudo_tchat = securisation_variable($_POST['pseudo']);//on l'affecte
        setcookie('nom', $pseudo_tchat, time() + 365*24*3600, null, null, false, true);//On créé le cookie
    }
    elseif(!empty($_COOKIE['nom']))//Si aucun pseudo dans le formulaire, mais un pseudo retenu par un cookie
    {
        $pseudo_tchat = $_COOKIE['nom'];//On l'affecte
    }
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Retenir le pseudo</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
  <div id="main">

  	<div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
  		<h3>Minichat - Retenir le pseudo</h3>
  		<form action="minichat_post.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" class="form-control" value =" <?php echo $pseudo_tchat; ?> " /><br/>
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
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
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
 
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>