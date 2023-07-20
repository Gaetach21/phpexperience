<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - TP : Page protégée par mot de passe</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("includes/logo.php")?>
  	<!-- En-tete-->
  	<?php include("includes/header.php")?>
  

    


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
    background-color: #f1f1f1;

}
      .section p ul li a
{
  color: #fff;
  text-decoration: none;
  padding: 10px;
  font-weight: 700;
  font-size: 20px;
}
    </style>

<div id="main">


    
 <div class="section">
  <h1>TP : Page protégée par mot de passe</h1>
  <p>Nous allons protéger le contenu d'une page par mot de passe .</p>
  <h2>Prérequis</h2>
  <ul>
     <li>afficher du texte avec echo ;</li>
     <li>utiliser les variables (affectation, affichage…) ;</li>
     <li>transmettre des variables via une zone de texte d'un formulaire ;</li>
     <li>utiliser des conditions simples ( if  , else  ).</li>
  </ul>
  <h2>Objectifs</h2>
  <p>Nous allons mettre en ligne une page web pour donner des informations confidentielles à certaines 
  personnes. Cependant, pour limiter l'accès à cette page, il faudra connaître un mot de passe.</p>
  <h2>Structure des pages PHP</h2>
  <p>Nous allons créer deux pages web :</p>
  <ul>
    <li><strong>formulaire.php</strong> : contient un simple formulaire comme vous savez les faire ;</li>
    <li><strong>secret.php</strong> : contient les « codes secrets » mais ne les affiche que si on lui donne le mot de passe.</li>
  </ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>