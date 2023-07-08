<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
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
    <title>phpexperience - Toute la force du PHP!</title>
  </head>

  <body>
<header>
      <a href="" class="logo disabled">phpexperience</a>
      <ul class="navbar">
        <li><a href="" class="disabled">Accueil</a></li>
      <li><a href="cours.php#main">Cours</a></li>
      <li><a href="mestp.php">Travaux Pratiques</a>
      <ul style="text-align: center;">
        <li><a href="minichat_tp.php#main">un minichat</a></li>
        <li><a href="livreor_tp.php#main">un livre d'or</a></li>
        <li><a href="index_commentaires.php#main">un blog</a></li>
        <li><a href="authentication_page.php#main">L'authentification</a></li>
      </li>
      </ul>
      <li><a href="download.php">Téléchargement</a>
      <ul style="text-align: center;">
        <li><a href="sublimetext.php#main">Sublime Text</a></li>
        <li><a href="wampserver.php#main">Wamp Server</a></li>
        <li><a href="firefox.php#main">Mozilla Firefox</a></li>
        <li><a href="chrome.php#main">Google Chrome</a></li>
      </li>
      </ul>
      <li><a href="contact.php">Contact</a></li>
      </ul>
    </header> 

    <style type="text/css">
      .disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
      }
    </style>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    <style type="text/css">
    	.section
{
	text-align: justify; 
    color: #181818;
    padding: 10px;
    font-size: 1.2em;
    font-family: sans-serif; 

}
      .section p ul li a
{
  color: #fff;
  text-decoration: none;
  padding: 10px;
  font-weight: 700;
  font-size: 20px;
}
      #first-section
{
	background-color: #f1f1f1;
}

    </style>

<div id="main">

    <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
    </div>
    
 <div id="first-section" class="section">
 	<h1>Réalisez vos sites web dynamiques grace au langage PHP</h1>
 	<p>Découvrez dans cette section toute la puissance du PHP à travers nos réalisations</p>
 	      <ul style="list-style-type: disc;">
        <li><a href="authentication_page.php">une page d'authentification</a></li>
        <li><a href="minichat.php">un minichat</a></li>
        <li><a href="livreor.php">un livre d'or</a></li>
        <li><a href="index_commentaires.php">un blog avec des commentaires</a></li>
        <li><a href="upload.php">upload de fichiers</a></li>
        <li><a href="index_news.php">un système de news</a></li>
        <li><a href="connectes.php">nombre de visiteurs connectés</a></li>
        <li><a href="searchbar.php">une barre de recherche</a></li>
      	</ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>