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
    <title>phpexperience | Rédiger une news</title>
    <style type="text/css">
    	.disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
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

        	<h3 style="text-align: center;">
            <a href="liste_news.php">Retour à la liste des news</a></h3>

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

if (isset($_GET['modifier_news'])) 
// Si on demande de modifier une news
{
    // On récupère les infos de la correspondante
    $retour = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM news WHERE id ='.$_GET['modifier_news']);
    $donnees = $retour->fetch();
    // On place le titre et le contenu dans des variables simples
    $titre = $donnees['titre'];
    $contenu = $donnees['contenu'];
    $id_news = $donnees['id'];
    // Cette variable va servir pour se souvenir que c'est une modification
}else
// C'est qu'on rédige une nouvelle news
{
  $titre = '';
  $contenu = '';
  $id_news = 0;  
  // La variable vaut 0, donc on se souviendra que ce n'est pas une modification
}
?>

<div class="container">
       <form method="post" action="liste_news.php">
        <label for="titre">Titre</label><br> 
        <input type="text" name="titre" value="<?php echo $titre; ?>">  <br>
            <label for="contenu">Contenu</label><br> 
            <textarea name="contenu" cols="50" rows="10">
            <?php echo $contenu; ?>
        </textarea><br>
        <input type="hidden" name="id_news" value="<?php echo $id_news; ?>">
            <input type="submit" name="Envoyer" value="Envoyer" />
    </form>
  </div> 


            </div>
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    