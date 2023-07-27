<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["name"])){
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
    <title>phpexperience | Des news sur votre site</title>
    <style type="text/css">
    	#main h1, h3 {text-align: center;}
    	#main h3 {background-color: black; color: white; font-size: 0.9em; margin-bottom: 0px;}
    	.news p {background-color: #cccccc; margin-top: 0px;}
    	.news {width: 70%; margin: auto;}
    	a {text-decoration: none;color: blue;}
    </style>
  </head>

  <body>
    <!-- Logo-->
    <section class="banniere" id="banniere">
<div class="contenu">
<h1>phpexperience</h1>
<a href="dashboard.php" class="btn" style="background-color: rgb(128,128,128);">Tableau de bord</a>

<!-- <h1>J'apprends le PHP</h1>
<p>Aujourd'hui nous sommes le 
<?php
// echo date('d/m/Y h:i:s');
?>
</p> -->

</div>
</section>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <style type="text/css">
      .disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
      }
    </style>


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    
        <div id="main">
  <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['name']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>

        	<h1>Bienvenue sur mon système de news!</h1>
        	<p>Voici les dernières news : </p>

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

// On récupère les 5 dernières news
$retour = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM news ORDER BY date_creation DESC LIMIT 0, 2');

while ($donnees = $retour->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>   
    <p>
    <?php
    // On affiche le contenu de la news
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    </p>
</div>
<?php
} // Fin de la boucle des billets
$retour->closeCursor();
?>


<div style="margin-top: 50px;">
    <a href="liste_news.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Liste des news</a>
    <a href="rediger_news.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Rédiger une news</a>
  </div>
            </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    