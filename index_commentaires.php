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
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="jquery-3.6.0.js"></script>
    <title>phpexperience | un blog avec commentaires</title>
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
      h3
{
    background-color:#64abfb;
    color:white;
    font-size:1.2em;
    margin-bottom:0px;
}
.news p
{
    background-color:#CCCCCC;
    margin-top:0px;
    font-size:0.9em;
}
.news
{
    box-sizing: border-box;
    border-radius: 5px;
    padding: 10px 20px;
    width: 100%;
    max-width: 940px;
    margin: 0 auto;
}

a
{
    text-decoration: none;
    color: blue;
}    </style>


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
  
              <div class="container">
                <h1>Mon super blog !</h1>
        <div class="formulaire">

        <form action="index_commentaires.php" method="post">
           <label for="titre">Titre</label><br> 
            <input type="text" name="titre" id="titre" placeholder="Entrez le titre de l'article" required="required"> <br>
            <label for="contenu">Contenu</label><br> 
            <textarea name="contenu" id="contenu" placeholder="Entrez le contenu"  required="required"></textarea><br>
            <input type="submit" name="Envoyer" value="Publier" />
    </form>

</div>
</div>
        
        <h1>Derniers billets du blog :</h1>
        


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

// Etape1
// Si le message est envoyé, on l'enregistre
// On teste si le titre et le contenu ont été envoyés
if (isset($_POST['titre']) AND isset($_POST['contenu'])) 
{

// On teste si le titre et le contenu ne sont pas vides
if (!$_POST['titre'] == "" AND !$_POST['contenu'] == "") 
{

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO billets (titre, contenu, date_creation) VALUES(?, ?, NOW())');
$req->execute(array($_POST['titre'], $_POST['contenu']));

}
else
{
// Redirection du visiteur vers la page du livre d'or
header('Location: index_commentaires.php'); 
}
}

// On écrit les liens vers chacune des pages
// On met dans une variable le nombre de billets qu'on veut par page
$nombreDeBilletsParPage = 5;
// On récupère le nombre total de billets
$req = $bdd -> prepare('SELECT COUNT(*) AS nb_billets FROM billets');
$req->execute();
$donnees = $req -> fetch();
$totalDesBillets = (int) $donnees['nb_billets'];
// On calcule le nombre de pages à créer
$nombreDePages = ceil($totalDesBillets / $nombreDeBilletsParPage);

// Vérification sur la page
if (isset($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page'] > 0))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}


 // Calcul du 1er billet de la page
$premier = ($page * $nombreDeBilletsParPage) - $nombreDeBilletsParPage; 
//Utilisation d'une requête préparée :
$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :premier, :nombreDeBilletsParPage');
$req->bindValue(':premier', $premier, PDO::PARAM_INT);
$req->bindValue(':nombreDeBilletsParPage', $nombreDeBilletsParPage, PDO::PARAM_INT);
$req->execute();

//on recupère chaque billet pour l'afficher
while ($donnees = $req->fetch())
{
?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    <?php
    // On affiche le contenu du billet
    echo nl2br(htmlspecialchars($donnees['contenu']));
    ?>
    <br />
    <em><a href="commentaires.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>
</div>
<?php
} // Fin de la boucle des billets

 // Puis on fait une boucle pour écrire les liens vers chacune des pages
echo 'page : ';
for($i=1; $i<=$nombreDePages; $i++)
{
  echo ' <a href="index_commentaires.php?page=' . $i . '">' . $i . '</a> ';
}
$req->closeCursor();
?>

    
            </div>
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    