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
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="jquery-3.6.0.js"></script>
    <title>phpexperience | Liste des news</title>
    <style type="text/css">
        .disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
      }
      .success{
            width: 100%;
            border: 1px solid rgb(177,216,216);
            padding: 20px;
            margin: 20px;
            background-color: rgba(177,216,216,0.5);
            border-radius: 5px;
            color: green;
            font-size: 1.2em;
        }
    	#main h2, th, td {text-align: center;}
        table {border-collapse: collapse; border: 2px solid black; margin: auto;}
        th, td {border: 1px solid black; padding: 10px;}
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
  

    


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    
        <div id="main">
            <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['name']; ?>!</h1>
    <?php
    if ($_SESSION['name'] == 'gaetan') {
      echo "<p>C'est votre espace admin.</p>";
    }
    else
    {
      echo "<p>C'est votre espace utilisateur.</p>";
    }
    ?>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>


        	<h2><a href="rediger_news.php">Ajouter une news</a></h2>

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

// Vérification 1: est-ce qu'on peut poster une news
if (isset($_POST['titre']) AND isset($_POST['contenu'])) 
{
   // On vérifie si c'est une modification de news ou pas
    if ($_POST['id_news'] == 0) {
    // Ce n'est pas une modification, on crée une nouvelle entrée dans la table
    // Insertion du message à l'aide d'une requête préparée
       $req = $bdd->prepare('INSERT INTO news (titre, contenu, date_creation) VALUES (?, ?, NOW())');
       $req->execute(array($_POST['titre'], $_POST['contenu'])); 
    } else {
        // C'est une modification, on met juste à jour le titre et le contenu
        $req = $bdd->prepare('UPDATE news set titre=:nvtitre, contenu=:nvcontenu WHERE id=:nvid');
        $req->execute(array('nvtitre'=>$_POST['titre'], 'nvcontenu'=>$_POST['contenu'], 
        'nvid'=>$_POST['id_news'])); 
    }
}
// Vérification 2 : est-ce qu'on peut supprimer une news?
if (isset($_GET['supprimer_news'])) 
    // Si on demande de supprimer une news
{
    // Alors on supprime la news correspondante
    $req = $bdd->query('DELETE FROM news WHERE id ='.$_GET['supprimer_news']);
}
?>
<p>
<table>
    <tr>
        <th>Modifier</th>
        <th>Supprimer</th>
        <th>Titre</th>
        <th>Date</th>
    </tr>
    <?php
    $retour = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM news ORDER BY date_creation DESC');

    while ($donnees = $retour->fetch())
    {
    ?>
    <tr>
        <th><a href="rediger_news.php?modifier_news=<?php echo $donnees['id']; ?>">Modifier</a></th>
        <th><a href="liste_news.php?supprimer_news=<?php echo $donnees['id']; ?>">Supprimer</a></th>
        <th><?php echo htmlspecialchars($donnees['titre']); ?></th>
        <th><?php echo htmlspecialchars($donnees['date_creation_fr']); ?></th>
    </tr>

<?php
} // Fin de la boucle des billets
$retour->closeCursor();
?>
</table>
</p>


            </div>
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    