<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Découverte de MySQL</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
        
      <!-- aside-->
    <?php include("includes/aside.php")?>


            <div id="main">
    <h1>Découverte de MySQL</h1>
    On peut stocker les données dans une base de données grace à un SGBD. C'est le cas de MySQL.<br>
    PHP permet de créer une connexion avec MySQL.<br>
    Une base de données est constituée de tables. Une <strong>table</strong> est une collection cohérente de données.<br>
    Pour créer une base de données, on démarre le serveur ensuite on ouvre <strong>phpmyadmin</strong> et dans l'onglet Databases, on entre le nom d'une base de données (exemple:test) et on clique sur créer.<br>
    On crée ensuite une table (exemple:users), on définit 4 champs ou colonnes de notre table.

    <?php
    
    ?>



      <div style="margin: 20px 0px;">
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Gestion des erreurs en PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Connexion à MySQL</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>