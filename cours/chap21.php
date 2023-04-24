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
    </ol>

      <div class="p-2">
    <h1>Insertion des données dans une BDD via PHP</h1>
    <?php

      //Insérer une entrée dans la BDD
/*      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insertion = "INSERT INTO visiteurs(nom, prenom, email)VALUES ('Tachago', 'Gaetan', 'tachgaetan@gmail.com')";
      $Connexion ->exec($insertion);
      echo "Valeurs bien insérées";
      }

      catch(PDOException $e)
      {
      die('Echec : ' .$e->getMessage());
      }*/

      //Insérer plusieurs entrées dans la BDD
      /*try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insertion = "INSERT INTO visiteurs(nom, prenom, email)VALUES 
      ('Victor', 'Durand', 'victor.durand@gmail.com'),
      ('Joly', 'Pauline', 'joly@gmail.com')";
      $Connexion ->exec($insertion);
      echo "Valeurs bien insérées";
      }

      catch(PDOException $e)
      {
      die('Echec : ' .$e->getMessage());
      }*/

/*      $nom = "bim', 'bam', 'boum'),('pif', 'paf', 'pouf'), ('a";
      $prenom = "eeeee";
      $email = "jythreg";
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insertion = "INSERT INTO visiteurs(nom, prenom, email)VALUES 
      ('$nom', '$prenom', '$email')";
      $Connexion ->exec($insertion);
      echo "Valeurs bien insérées";
      }

      catch(PDOException $e)
      {
      die('Echec : ' .$e->getMessage());
      }*/


      //Utilisation des requetes préparées
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"INSERT INTO visiteurs(nom, prenom, email)
      	VALUES(:nom, :prenom, :email)"
      );

      $requete->bindParam(':nom', $nom);
      $requete->bindParam(':prenom', $prenom);
      $requete->bindParam(':email', $email);

      $nom = "Astier";
      $prenom = "Alexandre";
      $email = "alex.astier@gmail.com";
      $requete->execute();
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