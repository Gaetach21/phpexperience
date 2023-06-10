<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Insertion des données dans une BDD via PHP</title>
    <style type="text/css">
      #code{background-color: gray; color: white; 
        border-radius:10px; padding: 10px;font-size: 16px;
        font-family: sans-serif; margin: 15px 10px;}
    </style>
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
    <h1>Insertion des données dans une BDD via PHP</h1>
    <h3>Insérer une entrée dans la BDD</h3>
    <div id="code">
      <pre>
      try
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
      }
    </pre>
    </div>
    <?php
      
     /*try
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
      ?>
      <h3>Insérer plusieurs entrées dans la BDD</h3>
    <div id="code">
      <pre>
      try
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
        }
    </pre>
    </div>
      <?php
  
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
      ?>
      <h3>Utilisation des requetes préparées</h3>
    <div id="code">
      <pre>
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
    </pre>
    </div>
      <?php
      /*try
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
      }*/
    ?>
    <br>

      <div style="margin: 20px 0px;">
    <a href="chap20.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Connexion à MySQL</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Sélection des données dans une BDD via PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>