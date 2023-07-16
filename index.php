<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - Toute la force du PHP!</title>
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

<div id="cookiePopup" class="hide">
    <p>
        <span style="font-weight: 900">phpexperience</span> utilise des cookies pour vous
        fournir la meilleure expérience de navigation possible. Pour en savoir plus, consultez 
        notre <a href="#">Politique de confidentialité.</a>
    </p>
    <button id="acceptCookie">Accepter</button>
    <button id="stopCookie" style="background-color: rgb(128,128,128);">Refuser</button>
</div>
    <!-- Script -->
    <script>
 let popUp = document.getElementById("cookiePopup");
//When user clicks the accept button
document.getElementById("acceptCookie").addEventListener("click", () => {
  //Create date object
  let d = new Date();
  //Increment the current time by 1 minute (cookie will expire after 1 minute)
  d.setMinutes(2 + d.getMinutes());
  //Create Cookie withname = myCookieName, value = thisIsMyCookie and expiry time=1 minute
  document.cookie = "myCookieName=thisIsMyCookie; expires = " + d + ";";
  //Hide the popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});

document.getElementById("stopCookie").addEventListener("click", () => {
  //Hide the popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});
//Check if cookie is already present
const checkCookie = () => {
  //Read the cookie and split on "="
  let input = document.cookie.split("=");
  //Check for our cookie
  if (input[0] == "myCookieName") {
    //Hide the popup
    popUp.classList.add("hide");
    popUp.classList.remove("show");
  } else {
    //Show the popup
    popUp.classList.add("show");
    popUp.classList.remove("hide");
  }
};
//Check if cookie exists when page loads
window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};
    </script>
    
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