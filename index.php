<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="jquery-3.6.0.js"></script>
    <title>phpexperience - Toute la force du PHP!</title>
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
      #second-section
{
	background-color: rgba(135,249,132,0.6);
}
      #third-section
{
	background-color: rgb(205,182,175);
}
    </style>

<div id="main">


    
 <div id="first-section" class="section">
   <h1>Apprenez à coder avec le langage PHP</h1>
    <p>Le sigle PHP qui signifie Hypertext Preprocessor est un langage de programmation libre, 
    	principalement utilisé pour produire des pages web dynamiques via un serveur web.</p>
    <p>Ce langage possède de nombreux atouts : 
    	<ul style="list-style-type: circle;">
    		<li>La gratuité et la disponibilité du code source (PHP est distribué sous licence GNU GPL);</li>
    		<li>La simplicité d'écriture de scripts;</li>
    		<li>La possibilité d'inclure le script PHP au sein d'une page HTML</li>
    		<li>La simplicité d'interfaçage avec des bases de données (SGBD supportés : MySQL, Oracle, PostgreSQL...)</li>
    	</ul></p>
 </div>

 <div id="second-section" class="section">
 	<h1>Suivez les cours sur le PHP et MySQL sur phpexperience</h1>
 	<p>phpexperience vous permet d'apprendre et de maitriser le langage PHP en commençant à zéro.</p>
 	<p>Consultez la liste de notre cours sur ce langage en cliquant sur <a href="cours.php">cours</a> au niveau 
 	de la barre des menus.</p>
 	<p>Les principales articulations de ce cours se déclinent comme suit :
 		<ul style="list-style-type: square;">
 			<li>Notions de base (variables, fonctions, conditions, boucles, tableaux);</li>
 			<li>Transmission de données</li>
 			<li>Intéraction avec MySQL (Création d'une base de données, d'une table, consultation, insertion, modification et suppression des données);</li>
 		</ul></p>
 </div>

 <div id="third-section" class="section">
 	<h1>Réalisez vos sites web dynamiques grace au langage PHP</h1>
 	<p>Découvrez dans cette section toute la puissance du PHP à travers nos réalisations</p>
 	      <ul style="list-style-type: disc;">
        <li><a href="login.php">une page d'authentification</a></li>
        <li><a href="login.php">un minichat</a></li>
        <li><a href="login.php">un livre d'or</a></li>
        <li><a href="login.php">un blog avec des commentaires</a></li>
        <li><a href="login.php">upload de fichiers</a></li>
        <li><a href="login.php">un système de news</a></li>
        <li><a href="login.php">nombre de visiteurs connectés</a></li>
        <li><a href="login.php">une barre de recherche</a></li>
      	</ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>