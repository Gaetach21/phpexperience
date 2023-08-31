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
    <title>phpexperience | un minichat avec compteur de visiteurs</title>
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
      input[type=text], textarea{
          width: 100%;
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
    </style>


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
        <div class="row">
        <div class="col-sm-6">
      <h1>Un compteur de visiteurs</h1>
      <?php
      try
      {
      $bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $temps_session = 300; // 300 secondes
      $temps_actuel = date("U");
      $user_ip = $_SERVER['REMOTE_ADDR'];

      $req_ip_exist = $bdd->prepare("SELECT * FROM visiteurs WHERE user_ip=?");
      $req_ip_exist -> execute(array($user_ip));
      $ip_existe = $req_ip_exist -> rowCount();

      if ($ip_existe == 0) {
        $add_ip = $bdd->prepare("INSERT INTO visiteurs(user_ip, time_online) VALUES(?,?)");
        $add_ip -> execute(array($user_ip,$temps_actuel));
      }
      else
      {
        $update_ip = $bdd->prepare("UPDATE visiteurs SET time_online = ? WHERE user_ip = ?");
        $update_ip -> execute(array($user_ip,$temps_actuel));
      }
        $session_delete_time = $temps_actuel - $temps_session;
        $del_ip = $bdd->prepare("DELETE FROM visiteurs WHERE time_online < ?");
        $del_ip -> execute(array($session_delete_time));


      $show_user_nbr = $bdd->query("SELECT * FROM visiteurs");
      $user_nbr = $show_user_nbr -> rowCount();
      echo '<p>Il y a actuellement '.$user_nbr;?> visiteur<?php if ($user_nbr == 0 || $user_nbr == 1) {
        echo "";
      } else{echo "s";}?> en ligne sur mon minichat!</p><?php
      }

      catch(PDOException $e)
      {
      echo 'Echec de la connexion : ' .$e->getMessage();
      }

      ?>
      
      <div class="container">
      <h1>Minichat</h1>
      <form action="minichat_post.php" method="post">
        <label for="pseudo">Votre pseudo</label><br> 
        <input type="text" name="pseudo" id="pseudo" value="<?php
                if(isset($_COOKIE['pseudo']))
                echo htmlspecialchars ($_COOKIE['pseudo']);
                ?>" placeholder="Rentre ton pseudo" maxlength="20" required="required"> <br>
            <label for="message">Message</label><br> 
            <textarea name="message" id="message" placeholder="Rentre ton message" maxlength="255" required="required"></textarea><br>
            <input type="submit" name="Envoyer" value="Envoyer" />
            <input type="reset" name="reset" value="Réinitialiser" />
    </form>
  </div> 
</div>

<div class="col-sm-6">
<h1>Les derniers messages</h1>

<?php
// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}
// On se connecte à là base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_articles FROM minichat';

// On prépare la requête
$query = $bdd->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 4;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM minichat ORDER BY id DESC LIMIT :premier, :parpage';

// On prépare la requête
$query = $bdd->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();



//on recupère chaque entrée une à une pour l'afficher
while ($donnees = $query->fetch())
{
    echo'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}
$query->closeCursor();
?>


 

    <nav>
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="connectes.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="connectes.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="connectes.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
    </nav>
    </div>
    </div> 
  </div>

      </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>