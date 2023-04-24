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
    </ol>

      <div class="p-2">
    <h1>Insertion des données dans une BDD via PHP</h1>
    <?php



      //On affiche toutes les entrées de la table visiteurs
    /*  try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT * FROM visiteurs"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";


      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/


        //On veut insérer la colonne sexe dans la table visiteurs
      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete =
      	// "ALTER TABLE visiteurs ADD sexe VARCHAR(10)";
      "ALTER TABLE visiteurs ADD age INT(100)";
      $Connexion->exec($requete);


      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/



      //On sélectione uniquement les prénoms de la table visiteurs

      /* try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";


      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/



      //On sélectionne les prénoms masculins
      /* try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H'"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }
*/

      //On sélectionne les prénoms masculins ayant un age inférieur à 25
       /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H' AND age<25"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/


      //On sélectionne les prénoms de tous les visiteurs en les classant par age(du plus petit au plus grand)
      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/

      //On sélectionne les prénoms de tous les visiteurs en les classant par age(du plus grand au plus petit)
      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age DESC"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/

      // On veut sélectionner les prénoms de 3 visiteurs en commençant par la première
      // entrée de la table
      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs LIMIT 0,3"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/

      //On sélectionne les prénoms, on les ordonne par age dans l'ordre décroissant de l'age et 
      //on va prendre que 3 prénoms à partir de la deuxième entrée dans l'ordre décroissant des ages
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age DESC LIMIT 1,3"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      echo "<pre>";
      print_r($resultat);
      echo "</pre>";
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