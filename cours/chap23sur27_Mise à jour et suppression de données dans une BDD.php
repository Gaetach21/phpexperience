<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Toute la force du PHP!</title>
  </head>

  <body> 
  <div id="main">
  	<div class="container-fluid p-5 bg-primary text-white text-center">
  		<h1>phpexperience</h1>
  		<p>Toute la force du PHP!</p> 
  	</div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
      <h3>Travaux Pratiques sur le PHP</h3>
      <ol>
        <li><a href="cours.php">cours</a></li>
        <li><a href="authentication_page.php">une page d'authentification</a></li>
        <li><a href="minichat.php">un minichat</a></li>
        <li><a href="livreor.php">un livre d'or</a></li>
        <li><a href="index_commentaires.php">un blog avec des commentaires</a></li>
        <li><a href="upload.php">upload de fichiers</a></li>
        <li><a href="">un système de news</a></li>
        <li><a href="">nombre de visiteurs connectés</a></li>
        <li><a href="">un espace membres</a></li>
        <li><a href="">un chat</a></li>
      </ol>
      </div>

         <div class="col-md-6">
    <h3 class="p-2">Liste des cours</h3>
    <ol>
      <li><a href="cours/chap1.php">Introduction au PHP</a></li>
      <li><a href="">Préparez son environnement de travail</a></li>
      <li><a href="cours/chap8.php">Les fonctions en PHP</a></li>
      <li><a href="cours/chap20.php">Connexion à MySQL</a></li>
      <li><a href="cours/chap21.php">Insertion des données dans une BDD via PHP</a></li>
      <li><a href="cours/chap22.php">Sélection des données dans une BDD via PHP</a></li>
      <li><a href="cours/chap23sur27_Mise à jour et suppression de données dans une BDD.php">
      Mise à jour et suppression de données dans une BDD</a></li>
    </ol>

      <div class="p-2">
    <h1>Mise à jour et suppression de données dans une BDD</h1>
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




      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $suppr = "DELETE FROM visiteurs WHERE id=11";
      $requete = $Connexion->prepare($suppr);
      $requete ->execute();
      echo "Informations supprimées";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/




      try
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
      }







    ?>
   </div>
    </div>

      </div>
    </div> 



     



  </div> 


  </body>
</html>