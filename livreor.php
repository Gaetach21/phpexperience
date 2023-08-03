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
    <title>phpexperience | un livre d'or</title>
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
    table, th, td {border: 2px solid white; 
      padding: 5px;
      border-collapse: collapse;}
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
      <h1>Un Livre d'or</h1>
      <div class="formulaire">

        <form action="livreor.php" method="post">
          <p><strong>Mon site s'il vous plait? Laissez-moi un message!</strong></p>
           <label for="pseudo">Votre pseudo</label><br> 
            <input type="text" name="pseudo" id="pseudo" placeholder="Rentre ton pseudo" maxlength="8" required="required"> <br>
            <label for="message">Message</label><br> 
            <textarea name="message" id="message" placeholder="Rentre ton message"  required="required"></textarea><br>
            <input type="submit" name="Envoyer" value="Envoyer" />
            <input type="reset" name="reset" value="Réinitialiser" />
    </form>

</div>

</div>

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
// On teste si le pseudo et le message ont été envoyés
if (isset($_POST['pseudo']) AND isset($_POST['message'])) 
{

// On teste si le pseudo et le message ne sont pas vides
if (!$_POST['pseudo'] == "" AND !$_POST['message'] == "") 
{

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO livreor (pseudo, message, date_creation) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));

}
else
{
// Redirection du visiteur vers la page du livre d'or
header('Location: livreor.php'); 
}
}


// Etape2
// On écrit les liens vers chacune des pages
// On met dans une variable le nombre de messages qu'on veut par page
$nombreDeMessagesParPage = 5;
// On récupère le nombre total de messages
$retour = $bdd -> prepare('SELECT COUNT(*) AS nb_messages FROM livreor');
$retour->execute();
$donnees = $retour -> fetch();
$totalDesMessages = (int) $donnees['nb_messages'];
// On calcule le nombre de pages à créer
$nombreDePages = ceil($totalDesMessages / $nombreDeMessagesParPage);


//Nous avons decidé d'utiliser un tableau pour afficher cette etiquette.  
echo'<table width=100%>  
<tr>  
<th width=900px bgcolor=green>pseudo</th>  
<th width=85% bgcolor=green>Message</th>  
</tr>  
</table>'; 

// Etape3
// On affiche les messages
// Vérification sur la page
if (isset($_GET['page']) && is_numeric($_GET['page']) && ($_GET['page'] > 0))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
}


 // Calcul du 1er message de la page
$premier = ($page * $nombreDeMessagesParPage) - $nombreDeMessagesParPage; 
//Utilisation d'une requête préparée :
$retour = $bdd->prepare('SELECT * FROM livreor ORDER BY id DESC LIMIT :premier, :nombreDeMessagesParPage');
$retour->bindValue(':premier', $premier, PDO::PARAM_INT);
$retour->bindValue(':nombreDeMessagesParPage', $nombreDeMessagesParPage, PDO::PARAM_INT);
$retour->execute();


//on recupère chaque entrée une à une pour l'afficher
while ($donnees = $retour->fetch())
{
    echo'<table><tr><td width=900px bgcolor=#6495ED>
    <strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> a écrit : <br />' .$donnees['date_creation'].'</td><td  width=85% bgcolor=#cccccc>'. htmlspecialchars($donnees['message']) . '</td></table> ';
}
 

 // Puis on fait une boucle pour écrire les liens vers chacune des pages
echo 'page : ';
for($i=1; $i<=$nombreDePages; $i++)
{
  echo ' <a href="livreor.php?page=' . $i . '">' . $i . '</a> ';
}

 
$retour->closeCursor();

?>
     
      </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
