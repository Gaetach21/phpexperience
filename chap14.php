<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les instructions include et require</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("includes/logo.php")?>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    


    <section>
        
      <!-- aside-->
    <?php include("includes/aside.php")?>


            <div id="main">
          <h1>Les instructions include et require</h1>
          <h3>Introduction</h3>
          <p>
            Les instructions <strong>include</strong> et <strong>require</strong> permettent d'inclure des fichiers 
            à l'intérieur d'un bout de code en PHP.<br>
          </p>

          <h3>Différence entre les deux instructions</h3>
          <p>
          En utilisant <strong>include</strong>, si le fichier à inclure n'est pas trouvé, 
          le reste du script est exécuté.<br>
          En utilisant <strong>require</strong>, si le fichier n'est pas trouvé, PHP renvoie une erreur fatale et le 
          script va s'arrêter. Tout ce qui est écrit en dessous de <strong>require</strong> n'est pas exécuté.
          </p>

          <h3>Exemple avec include</h3>
          <?php
          echo "<h3>Insertion d'un fichier avec include</h3>";
          include 'fichier-inclus.php';
          echo "ce message s'affiche normalement<br><br>";

          /*echo "<h3>Insertion d'un fichier erroné avec include</h3>";
          include 'fichier-inclu.php';
          echo "ce message s'affiche normalement<br>";*/
          ?>

          <h3>Exemple avec require</h3>
          <?php
          echo "<h3>Insertion d'un fichier avec require</h3>";
          require 'fichier-inclus.php';
          echo "ce message s'affiche normalement<br><br>";

          /*echo "<h3>Insertion d'un fichier erroné avec require</h3>";
          require 'fichier-inclu.php';
          echo "ce message ne s'affiche pas!<br><br>";*/
          ?>


      <div style="margin: 20px 0px;">
    <a href="chap13.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les formulaires en PHP</a>
    <a href="chap15.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Opérations sur les fichiers en PHP</a>
  </div>
  </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>