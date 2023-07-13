<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Mise à jour et suppression de données dans une BDD</title>
    <style type="text/css">
      #code{background-color: gray; color: white; 
        border-radius:10px; padding: 10px;font-size: 16px;
        font-family: sans-serif; margin: 15px 10px;}
    </style>
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
    <h1>Mise à jour et suppression de données dans une BDD</h1>
    <h3>Mise à jour des données</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $modif = "UPDATE visiteurs SET age=35 WHERE id=1";
      $requete = $Connexion->prepare($modif);
      $requete ->execute();
      echo "Informations mises à jour";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }
    </pre>
    </div>
    <?php
      
     /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $modif = "UPDATE visiteurs SET age=35 WHERE id=1";
      $requete = $Connexion->prepare($modif);
      $requete ->execute();
      echo "Informations mises à jour";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
      ?>

      <h3>Suppression des données</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "DELETE FROM visiteurs WHERE id=7";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Informations supprimées";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }
    </pre>
    </div>
    <?php
      
     /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "DELETE FROM visiteurs WHERE id=7";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Informations supprimées";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
      ?>

      <h3>Suppression d'une colonne d'une table</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "ALTER TABLE visiteurs DROP age";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Informations supprimées";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }

    </pre>
    </div>
    <?php
    /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "ALTER TABLE visiteurs DROP age";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Informations supprimées";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
      ?>

      <h3>Suppression d'une table</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "DROP TABLE visiteurs";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Table supprimée";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }

    </pre>
    </div>

    <br>

      <div style="margin: 20px 0px;">
    <a href="chap22.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Sélection des données dans une BDD via PHP</a>
    <a href="chap24.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les jointures SQL</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>