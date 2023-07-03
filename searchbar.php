<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
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
    <link href="css/blog.css" rel ="stylesheet" type="text/css" media="all">
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
      a{
        color: #FA2;
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
    </style>
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

                <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>

  
              <div class="container mt-5">
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

// On récupère les 5 derniers billets
$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

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
$req->closeCursor();
?>

    </div>
            </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>