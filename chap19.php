<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Découverte de MySQL</title>
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
    <h1>Découverte de MySQL</h1>
    <p>On peut stocker les données dans une base de données grace à un SGBD. C'est le cas de MySQL.</p>
    <p>PHP permet de créer une connexion avec MySQL.</p>
    <p>Une base de données est constituée de tables. Une <strong>table</strong> est une collection cohérente de données.</p>
    <p>Pour créer une base de données, on démarre le serveur ensuite on ouvre <strong>phpmyadmin</strong> et dans l'onglet Databases, on entre le nom d'une base de données (exemple:test) et on clique sur créer.</p>
    <p>On crée ensuite une table (exemple:users), on définit 4 champs ou colonnes de notre table respectivement le champ <strong>name</strong> de type <strong>INT</strong> qui est la clé primaire et en auto-increment, le champ <strong>nom</strong> de type <strong>VARCHAR</strong>, le champ <strong>prenom</strong> de type <strong>VARCHAR</strong> et le champ <strong>mail</strong> également de type <strong>VARCHAR</strong>.</p>
    <p>On insère un enregistrement grace à l'onglet <strong>insert</strong>.</p>

    



      <div style="margin: 20px 0px;">
    <a href="chap18.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Gestion des erreurs en PHP</a>
    <a href="chap20.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Connexion à MySQL</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>