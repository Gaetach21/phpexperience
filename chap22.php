<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Sélection des données dans une BDD via PHP</title>
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
    <h1>Sélection des données dans une BDD via PHP</h1>
    <h3>Affichage de toutes les entrées de la table visiteurs</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT * FROM visiteurs"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
     
      print_r($resultat);

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
      ?>


      <?php
        
      /* try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $requete = $Connexion->prepare(
       	"SELECT * FROM visiteurs"
       );
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo 'Nom : <strong>'.$resultat['nom'].'</strong><br>Prénom : <strong>'.$resultat['prenom'].'</strong><br>Email : <strong>'.$resultat['email'].'</strong><br><br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>


        <h3>Insertion de la colonne sexe dans la table visiteurs</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = "ALTER TABLE visiteurs ADD sexe VARCHAR(10)";
      $Connexion->exec($requete);


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

      $requete =
      	"ALTER TABLE visiteurs ADD sexe VARCHAR(10)";
      //"ALTER TABLE visiteurs ADD age INT(100)";
      $Connexion->exec($requete);


      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
      ?>

      <h3>Insertion de la colonne age dans la table visiteurs</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = "ALTER TABLE visiteurs ADD age INT(100)";
      $Connexion->exec($requete);


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

      $requete = "ALTER TABLE visiteurs ADD age INT(100)";
      $Connexion->exec($requete);


      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
      ?>

      <h3>Affichage uniquement des prénoms de la table visiteurs</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);


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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/

      ?>

      <h3>Affichage des prénoms masculins</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H'"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H'"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
     
      ?>

      <h3>Affichage des prénoms masculins ayant un age inférieur à 25</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H' AND age<25"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs WHERE sexe='H' AND age<25"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
     
      ?>

      <h3>Affichage des prénoms de tous les visiteurs en les classant par age(du plus petit au plus grand)</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
    	
      ?>

      <h3>Affichage des prénoms de tous les visiteurs en les classant par age(du plus grand au plus petit)</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age DESC"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs ORDER BY age DESC"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }*/
    	
      ?>


      <h3>Affichage des prénoms de 3 visiteurs en commençant par la première entrée de la table</h3>
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs LIMIT 0,3"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
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

      $requete = $Connexion->prepare(
      	"SELECT prenom FROM visiteurs LIMIT 0,3"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Prénom : <strong>'.$resultat['prenom'].'</strong><br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }	*/
      ?>


      <h3>Affichage des prénoms de 3 visiteurs en fonction de l'age dans l'ordre décroissant</h3>
      On sélectionne les prénoms, on les ordonne par age dans l'ordre décroissant de l'age et 
      on va prendre que 3 prénoms à partir de la deuxième entrée dans l'ordre décroissant des ages.
    <div id="code">
      <pre>
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom, age FROM visiteurs ORDER BY age DESC LIMIT 1,3"
      );
      $requete ->execute();
      $resultat = $requete->fetchall();
      print_r($resultat);
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }
    </pre>
    </div>
    <?php
    	try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $requete = $Connexion->prepare(
      	"SELECT prenom, age FROM visiteurs ORDER BY age DESC LIMIT 1,3"
      );
      $requete ->execute();
      while ($resultat = $requete->fetch()) {
       	echo 'Le visiteur <strong>'.$resultat['prenom'].'</strong> a '.$resultat['age'].' ans.<br><br>';
       }
      }

      catch(PDOException $e)
      {
      echo 'Echec : ' .$e->getMessage();
      }

      ?>


    <br>

      <div style="margin: 20px 0px;">
    <a href="chap21.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Insertion des données dans une BDD via PHP</a>
    <a href="chap23.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Mise à jour et suppression de données dans une BDD</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>