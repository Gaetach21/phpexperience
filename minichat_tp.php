<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - Travaux Pratiques!</title>
  </head>

  <body>
  	<!-- En-tete-->
  	<?php include("includes/header.php")?>
  

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
   <h1>TP : un minichat</h1>
   <h2>Prérequis</h2>
   <ul>
     <li>transmettre des variables via un formulaire;</li>
     <li>lire dans une table;</li>
     <li>écrire dans une table;</li>
     <li>utiliser PDO et les requêtes préparées.</li>
   </ul>
   <h2>Objectifs</h2>
   <p>On souhaite avoir sur la même page deux zones de texte : une pour écrire votre pseudo, 
    une autre pour écrire votre petit message. Ensuite un bouton <strong>Envoyer</strong> permettra 
  d'envoyer les données à MySQL pour qu'il les enregistre dans une table.</p>
  <p>En dessous, le script devra afficher les 10 derniers messages qui ont été enregistrés en allant 
  du plus récent au plus ancien.</p>
  <h2>Structure de la table MySQL</h2>
  <p>On va créer une table <strong>minichat</strong> dans notre base de données. Cette table contiendra 
  les champs suivants : </p>
  <ul>
    <li><strong>ID</strong> de type INT en auto-increment et clé primaire;</li>
    <li><strong>pseudo</strong> de type varchar, taille du champ 255;</li>
    <li><strong>message</strong> de type varchar, taille du champ 255;</li>
  </ul>
  <h2>Structure des pages PHP</h2>
  <p>Nous allons utiliser 2 fichiers :</p>
  <ul>
    <li><strong>minichat.php</strong> contient le formulaire permettant d'ajouter un message et liste 
    les 10 derniers messages;</li>
    <li><strong>minichat_post.php</strong> insère le message reçu avec $_POST dans la base de données 
      puis redirige vers <strong>minichat.php</strong>;</li>
  </ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>