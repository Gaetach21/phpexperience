<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["name"])){
    header("Location: login.php");
    exit(); 
  }
?>
<?php
@$keywords = $_GET["keywords"];
@$valider = $_GET["valider"];
if (isset($valider) && !empty(trim($keywords))) {
  $words = explode(" ", trim($keywords));
  for ($i=0; $i <count($words) ; $i++)
    $kw[$i] = "contenu like '%".$words[$i]."%'";
 // Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}
 
 $req = $bdd->prepare('SELECT contenu FROM billets WHERE '.implode(" or ", $kw));
 $req -> setFetchMode(PDO::FETCH_ASSOC);
 $req ->execute();
 $tab = $req ->fetchAll();
 $afficher = "oui";
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
    <title>phpexperience | une barre de recherche sur mon blog</title>
    <style type="text/css">
      form{
        padding: 60px; background-color: rgba(0,0,0,0.2);
      }
      input[type="text"]{
        width: 400px; padding: 10px; font-size: 16pt; border:none;outline: none;
      }
      input[type="submit"]{
        width: 200px; padding: 10px; font-size: 16pt; border:none;outline: none;
        background-color: #FA2; cursor: pointer;
      }
      input[type="submit"]:hover{
        background-color: #FC4;
      }
      #resultats{
        width: 620px; font-size: 14pt; margin: 20px auto;
        color: #FFF; text-align: left;
      }
      #resultats ol{
        padding-left: 16px;
        list-style-position: outside;
      }
      #resultats li {
        margin: 14px 0; text-align: justify;
      }
      #resultats ol li {
        color:#111;
      }
      #nbr{
        color: #FA2; font-family: oswald;
        font-size: 16pt; border-bottom: 1px solid #888;
        padding: 10px 0;
      }
      .disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
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
    color: #FA2;
} 
 
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

  
              <div class="container">
      <h1>Une barre de recherche sur mon blog</h1>
      <form name="fo" method="get" action="">
        <input type="text" name="keywords" value="<?php echo $keywords ?>" placeholder="Mots-clés">
        <input type="submit" name="valider" value="Rechercher">
      </form>

        <?php
          if (@$afficher == "oui") {?>
            <div id="resultats">
              <div id="nbr"><?=count($tab)." ".(count($tab)>1 ? "résultats trouvés":"resultat trouvé")?>
              </div>
              <ol>
                <?php for ($i=0; $i<count($tab) ; $i++) {?> 
                  <li><?php echo $tab[$i]["contenu"] ?></li>
               <?php } ?>
              </ol>
            </div>
          <?php }
        ?>


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
  echo ' <a href="searchbar.php?page=' . $i . '">' . $i . '</a> ';
}
$req->closeCursor();
?>


    </div>
            </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>