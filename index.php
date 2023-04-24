<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Toute la force du PHP!</title>
  </head>

  <body>
  	<!-- En-tete-->
  	<?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
      <h1 id="accueil">Travaux Pratiques sur le PHP</h1>
      <ol>
        <li><a href="authentication_page.php">une page d'authentification</a></li>
        <li><a href="minichat.php">un minichat</a></li>
        <li><a href="livreor.php">un livre d'or</a></li>
        <li><a href="index_commentaires.php">un blog avec des commentaires</a></li>
        <li><a href="upload.php">upload de fichiers</a></li>
        <li><a href="#">un système de news</a></li>
        <li><a href="#">nombre de visiteurs connectés</a></li>
        <li><a href="#">un espace membres</a></li>
        <li><a href="#">un chat</a></li>
      </ol>
      </div>

      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>