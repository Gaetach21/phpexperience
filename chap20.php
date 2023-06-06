<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Connexion à MySQL</title>
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
    <h1>Connexion à MySQL</h1>
    <h3>Connexion à la base de données</h3>
    <p>PHP propose plusieurs moyens de se connecter à une base de données MySQL : 
      <ul>
        <li>L'extension mysql_ : ce sont des fonctions qui permettent d'accéder à une base de données MySQL, et donc de communiquer avec MySQL. Leur nom commence toujours par mysql_  . Toutefois, ces fonctions sont vieilles, et on recommande de ne plus les utiliser aujourd'hui.</li>
        <li>L'extension mysqli_ : ce sont des fonctions améliorées d'accès à MySQL. Elles proposent plus de fonctionnalités et sont plus à jour.</li>
        <li>L'extension PDO : c'est un outil complet qui permet d'accéder à n'importe quel type de base de données. On peut donc l'utiliser pour se connecter aussi bien à MySQL qu'à PostgreSQL ou Oracle.</li>
      </ul>

    On crée la connexion en indiquant dans l'ordre dans les paramètres :
    <ul>
      <li>le nom de l'hôte : c'est l'adresse de l'ordinateur où MySQL est installé (comme une adresse IP). Le plus souvent, MySQL est installé sur le même ordinateur que PHP : dans ce cas, mettez la valeur localhost  (cela signifie « sur le même ordinateur »). Néanmoins, il est possible que votre hébergeur web vous indique une autre valeur à renseigner (qui ressemblerait à ceci : sql.hebergeur.com  ). Dans ce cas, il faudra modifier cette valeur lorsque vous enverrez votre site sur le Web ;</li>
      <li>la base : c'est le nom de la base de données à laquelle vous voulez vous connecter. Dans notre cas, la base de données s'appelle test;</li>
      <li>le login : il permet de vous identifier. Renseignez-vous auprès de votre hébergeur pour le connaître. Le plus souvent (chez un hébergeur gratuit), c'est le même login que vous utilisez pour le FTP ;</li>
      <li>le mot de passe : il s'agit du mot de passe de la base de données.</li>
    </ul>
</p>
    <?php
     
      try
      {
      $bdd = new PDO('mysql:host=localhost; dbname=test; charset=utf8', 'root', '123abc456');
      $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connexion à la base de données réussie<br>";
      }
      catch(Exception $e)
      {
      die('Echec de la connexion : ' .$e->getMessage());
      }

      

      /*echo "<h3>Creation de la BD test2</h3>";
      try
      {
      $Connexion = new PDO('mysql:host=localhost; charset=utf8', 'root', '123abc456');
      $Connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $Connexion ->exec("CREATE DATABASE test2");
      echo "Base de données créée<br>";
      }
      catch(Exception $e)
      {
      die('Erreur : ' .$e->getMessage());
      }*/

      /*echo "<h3>Creation d'une table dans la BD</h3>";
      try
      {
      $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
      $Connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $Codesql = "CREATE TABLE visiteurs(
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nom VARCHAR(50),
      prenom VARCHAR(50),
      email VARCHAR(70)
       )";
      $Connexion ->exec($Codesql);
      echo 'Table "visiteurs" créée';
      }
      catch(Exception $e)
      {
      die('Erreur : ' .$e->getMessage());
      }*/


    ?>
    



      <div style="margin: 20px 0px;">
    <a href="chap19.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Découverte de MySQL</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Insertion des données dans une BDD via PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>