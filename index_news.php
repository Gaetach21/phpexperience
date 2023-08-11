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
    <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="jquery-3.6.0.js"></script>
    <title>phpexperience | Des news sur votre site</title>
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
      #main h3
{
    background-color:#64abfb;
    color:white;
    font-size:1.2em;
    margin-bottom:0px;
    text-align: center;
}
#news p
{
    background-color:#CCCCCC;
    margin-top:0px;
    font-size:0.9em;
}
#news
{
    box-sizing: border-box;
    border-radius: 5px;
    padding: 10px 20px;
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

        	<h1>Bienvenue sur mon système de news!</h1>
<div class="container">
<div class="row">
<?php
// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

// On détermine le nombre total de news
$sql = 'SELECT COUNT(*) AS nb_news FROM news';

// On prépare la requête
$query = $bdd->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre de news
$result = $query->fetch();

$nbNews = (int) $result['nb_news'];

// On détermine le nombre de news par page
$parPage = 6;

// On calcule le nombre de pages total
$pages = ceil($nbNews / $parPage);

// Calcul de la 1ère news de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y \') AS date_creation_fr FROM news ORDER BY date_creation DESC LIMIT :premier, :parpage';

// On prépare la requête
$query = $bdd->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();



//on recupère chaque entrée une à une pour l'afficher
while ($donnees = $query->fetch())
{
?>
<div class="col-md-4" id="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?><br>
        <em>Publié le <?php echo $donnees['date_creation_fr']; ?></em>
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
$query->closeCursor();
?>
</div> 
</div>

<nav style="margin-top: 0px;">
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="index_news.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="index_news.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="index_news.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
    </nav>



<div style="margin-top: 50px;">
    <a href="liste_news.php"  style="text-decoration: underline; font-size: 1.2em;">Liste des news</a> | 
    <a href="rediger_news.php"  style="text-decoration: underline; font-size: 1.2em; margin-right: 25px;">Rédiger une news</a>
  </div>
            </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    