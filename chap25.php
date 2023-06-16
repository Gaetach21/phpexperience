<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les fonctions SQL</title>
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
    <h1>Les fonctions SQL</h1>
    <h3>Type de fonctions</h3>
    Il existe 2 types de fonctions : les <strong>fonctions scalaires</strong> et 
    les <strong>fonctions d'agrégat</strong>.
    Dans la <strong>inscrits</strong>, on ajoute une colonne en fin de table <strong>age</strong> 
    de type INT.

    <h3>Les fonctions d'agrégat -la fonction AVG</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT AVG(age) AS age_moyen FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La moyenne des ages est : '.$resultat['age_moyen'].'.';
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT AVG(age) AS age_moyen FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
       	echo 'La moyenne des ages est : <strong>'.$resultat['age_moyen'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Les fonctions d'agrégat -la fonction COUNT</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT COUNT(*) AS nombre_entrees FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'Le nombre d\'entrées dans la table est : '.$resultat['nombre_entrees'].'.';
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

       $foncsql = "SELECT COUNT(*) AS nombre_entrees FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'Le nombre d\'entrées dans la table est : <strong>'.$resultat['nombre_entrees'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT COUNT(DISTINCT prenom)  AS nombre_prenoms FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'Le nombre de prénoms différents dans la table est : <strong>'.$resultat['nombre_prenoms'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Les fonctions d'agrégat -la fonction MAX</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT MAX(age) AS age_max FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La plus grande valeur de l\'age dans la table est : '.$resultat['age_max'].'.';
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

       $foncsql = "SELECT MAX(age) AS age_max FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La plus grande valeur de l\'age dans la table est : <strong>'.$resultat['age_max'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>
       
       <h3>Les fonctions d'agrégat -la fonction MIN</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT MIN(age) AS age_min FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La plus petite valeur de l\'age dans la table est : '.$resultat['age_min'].'.';
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

       $foncsql = "SELECT MIN(age) AS age_min FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La plus petite valeur de l\'age dans la table est : <strong>'.$resultat['age_min'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

    <h3>Les fonctions d'agrégat -la fonction SUM</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT SUM(age) AS age_somme FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La somme des ages dans la table est : '.$resultat['age_somme'].'.';
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

       $foncsql = "SELECT SUM(age) AS age_somme FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       $resultat = $requete->fetch();
        echo 'La somme des ages dans la table est : <strong>'.$resultat['age_somme'].'</strong>.<br>';
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

    <h3>Les fonctions scalaires -la fonction UCASE</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT UCASE(prenom) AS prenom_majuscule FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle convertit tous les prénoms en majuscules.';
       while ($resultat = $requete->fetch()) {
         echo $resultat['prenom_majuscule'];}  
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

       $foncsql = "SELECT UCASE(prenom) AS prenom_majuscule FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle convertit tous les prénoms en majuscules.<br>';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>'.$resultat['prenom_majuscule'].'</li></ul>';
       }
        
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Les fonctions scalaires -la fonction LCASE</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT LCASE(prenom) AS prenom_minuscule FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle convertit tous les prénoms en minuscules.';
       while ($resultat = $requete->fetch()) {
         echo $resultat['prenom_minuscule'];}  
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

       $foncsql = "SELECT LCASE(prenom) AS prenom_minuscule FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle convertit tous les prénoms en minuscules.<br>';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>'.$resultat['prenom_minuscule'].'</li></ul>';
       }
        
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Les fonctions scalaires -la fonction LENGTH</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT LENGTH(prenom) AS prenom_longueur FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle affiche le nombre d\'octets de chaque prénom.';
       while ($resultat = $requete->fetch()) {
         echo $resultat['prenom_longueur'];}  
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

       $foncsql = "SELECT LENGTH(prenom) AS prenom_longueur FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle affiche le nombre d\'octets de chaque prénom.';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>'.$resultat['prenom_longueur'].'</li></ul>';
       }
        
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>
        On crée la colonne <strong>dons</strong> de type float dans la table inscrits.<br>

        <h3>Les fonctions scalaires -la fonction ROUND</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT ROUND(dons,1) AS don_decimal FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle arrondit chaque valeur de dons à une décimale.';
       while ($resultat = $requete->fetch()) {
         echo $resultat['don_decimal'];} 
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

       $foncsql = "SELECT ROUND(dons,1) AS don_decimal FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle arrondit chaque valeur de dons à une décimale.';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>'.$resultat['don_decimal'].'</li></ul>';
       } 
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Les fonctions scalaires -la fonction NOW()</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT prenom, NOW() AS date_actuelle  FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'La fonction now() retourne la date actuelle';
       while ($resultat = $requete->fetch()) {
         echo $resultat['prenom']. ' : '.$resultat['date_actuelle'];} 
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

       $foncsql = "SELECT prenom, NOW() AS date_actuelle  FROM inscrits";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'La fonction now() retourne la date actuelle';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>'.$resultat['prenom']. ' : '.$resultat['date_actuelle'].'</li></ul>';
       } 
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Quelques critères de sélection - GROUP BY, HAVING</h3>
      <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT AVG(dons) AS dons_moyenne, age  FROM inscrits GROUP BY age";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle retourne la moyenne des dons en fonction de l\'age des personnes.';
       while ($resultat = $requete->fetch()) {
         echo 'Pour l\'age '.$resultat['age']. ', la moyenne des dons est : '.$resultat['dons_moyenne'];
       } 
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

       $foncsql = "SELECT AVG(dons) AS dons_moyenne, age  FROM inscrits GROUP BY age";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle retourne la moyenne des dons en fonction de l\'age des personnes.';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>Pour l\'age '.$resultat['age']. ', la moyenne des dons est : '.$resultat['dons_moyenne'].'</li></ul>';
       } 
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
        ?>

        <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $foncsql = "SELECT AVG(dons) AS dons_moyenne, age  FROM inscrits GROUP BY age HAVING AVG(dons)>4";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle retourne la moyenne des dons en fonction de l\'age des personnes où la moyenne des dons est 
       supérieur à 4.';
       while ($resultat = $requete->fetch()) {
         echo 'Pour l\'age '.$resultat['age']. ', la moyenne des dons est : '.$resultat['dons_moyenne'];} 
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

       $foncsql = "SELECT AVG(dons) AS dons_moyenne, age  FROM inscrits GROUP BY age HAVING AVG(dons)>4";

       $requete = $Connexion->prepare($foncsql);
       $requete ->execute();
       echo 'Elle retourne la moyenne des dons en fonction de l\'age des personnes où la moyenne des dons est 
       supérieur à 4.';
       while ($resultat = $requete->fetch()) {
         echo '<ul><li>Pour l\'age '.$resultat['age']. ', la moyenne des dons est : '.$resultat['dons_moyenne'].'</li></ul>';
       } 
       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
        ?>

    <br>

      <div style="margin: 20px 0px;">
    <a href="chap24.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les jointures SQL</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les filtres PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>