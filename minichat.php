<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | un minichat</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("includes/logo.php")?>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    
            <div id="main">

  <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>

      <div class="container mt-5">
        <div style="width: 400px; float: left;">
      <h1>Un Minichat</h1>
      <form action="minichat_post.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" class="form-control" /><br/>
<label for="message">Message</label> : <input type="text" name="message" id="message" class="form-control"/><br/>
<input type="submit" value="Envoyer" class="form-control bg-primary" />
</p>
</form>
</div>

<div style="width: 500px; margin-left: 450px;">
<h1>Améliorations du minichat</h1>
<ul>
  <li><a href="minichat2.php">Retenir le pseudo</a></li>
  <li><a href="minichat3.php">Afficher les anciens messages</a></li>
</ul>
</div>


<h1>Les derniers messages</h1>

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
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 5');

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