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
    <title>phpexperience | un blog avec des commentaires</title>
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
        <h1>Les commentaires du blog</h1>
        <p><a href="index_commentaires.php">Retour à la liste des billets</a></p>



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


if(isset($_GET['billet']) AND !empty($_GET['billet'])) {
   $idBillet = htmlspecialchars($_GET['billet']);
   $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
  $req->execute(array($idBillet));
  $donnees = $req->fetch();
  }
  
  ?>
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em>le <?php echo $donnees['date_creation_fr']; ?></em>
    </h3>
    
    <p>
    <?php
    echo nl2br(htmlspecialchars($donnees['contenu']));

    ?>
    </p>
</div>






<h1>Publier un commentaire</h1>
<div class="formulaire">

        <form method="post">
           <label for="auteur">Auteur</label><br> 
            <input type="text" name="auteur" id="auteur" placeholder="Entrez votre nom" required="required"> <br>
            <label for="commentaire">Commentaire</label><br> 
            <textarea name="commentaire" id="commentaire" placeholder="Entrez votre commentaire"  required="required"></textarea><br>
            <input type="submit" name="Envoyer" value="Publier" />
    </form>

</div>

<?php
  
      if(isset($_POST['auteur'],$_POST['commentaire'])){
        $auteur = htmlspecialchars($_POST['auteur']);
         $commentaire = htmlspecialchars($_POST['commentaire']);
         $idBillet = htmlspecialchars($_GET['billet']);
         
          $ins = $bdd->prepare("INSERT INTO commentaires SET id_billet ='".$idBillet."',  auteur='".$auteur."', commentaire='".$commentaire."',date_commentaire = NOW()");
          $ins->execute(array($auteur, $commentaire, $idBillet));
                
}   
?>

<h1>Liste des commentaires</h1>

<?php
if(isset($_GET['billet']) AND !empty($_GET['billet'])) {
    $idBillet = htmlspecialchars($_GET['billet']);
$commentaires = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = ? ORDER BY date_commentaire DESC LIMIT 0, 5');
   $commentaires->execute(array($idBillet));
while ($donnees = $commentaires->fetch())
{
?>
<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong> <em>(Posté le <?php echo $donnees['date_commentaire_fr']; ?>)</em></p>
<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>
<?php
} // Fin de la boucle des commentaires
}

?>

  


  	</div> 
  </div> 
<?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>