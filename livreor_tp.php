<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - TP : un livre d'or</title>
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
   <h1>TP : un livre d'or</h1>
  <p>Nous allons écrire un livre d'or sur phpexperience. Ainsi, les visiteurs pourront laisser une trace 
  de leur passage.</p>
  <h2>Prérequis</h2>
  <ul>
     <li>lire dans une table;</li>
     <li>écrire dans une table;</li>
     <li>compter le nombre d'entrées dans une table;</li>
     <li>utiliser les formulaires.</li>
  </ul>
  <h2>Structure de la table MySQL</h2>
  <p>On va créer une table <strong>livreor</strong> dans notre base de données. Cette table contiendra 
  les champs suivants : </p>
  <ul>
    <li><strong>ID</strong> de type INT en auto-increment et clé primaire;</li>
    <li><strong>pseudo</strong> de type varchar, taille du champ 255;</li>
    <li><strong>message</strong> de type text;</li>
  </ul>
  <h2>Structure du livre d'or</h2>
  <p>On va placer en haut de la page le formulaire permettant d'entrer le message des visiteurs et 
  en dessous la liste des messages.</p>
  <p>On va créer automatiquement des pages pour qu'il y ait par exemple 20 messages par page.</p>
  <p>Pour créer automatiquement des pages en PHP : </p>
  <ul>
    <li>On récupère le nombre total des messages;</li>
    <li>On calcule le nombre de pages qu'il y aura.</li>
  </ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>