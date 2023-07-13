<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les constantes en PHP</title>
        <style type="text/css">
        table, th, td {border: 1px solid grey; 
      padding: 5px;
      border-collapse: collapse;}
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
    <h1>Les constantes en PHP</h1>
    <h3>Définition</h3>
    La valeur d'une constante est constante.<br>
    Le nom des constantes est sensible à la casse.<br>
    Par convention, on écrit les constantes en majuscules.<br>
    Le nom d'une constante commence soit par un underscore soit par une lettre.<br><br>

    <h3>Création d'une constante</h3>
    <?php
    define("BIENVENUE", "Bienvenue sur mon site!");
    echo BIENVENUE;
    echo "<br><br>";
    ?>

    <h3>Portée des variables et constantes</h3>
    Les variables définies dans l'espace global ne sont pas accessibles dans l'espace local de la fonction.<br>
    les constantes sont accessibles n'importe ou!<br>
    <?php
    $a = "Bonjour";
    define("NOMBRE", 4);

    function portee()
    {
      // echo $a;
      echo NOMBRE;
      echo "<br/>";
      $b=36;
      echo $b;
      echo "<br/>";
    }
    portee();
    // echo $b;
    echo "<br/><br/>";

    echo "<h3>Quelques constantes magiques</h3>";
    echo "On utilise deux underscores avant et apres le nom des constantes.<br>";

    echo "<strong>__LINE__</strong>Affiche le numéro de la ligne ouu cette constante a été appelée<br>";echo '<strong>'.__LINE__.'</strong><br/>';
    
    function test()
    {
      echo "<strong>__FUNCTION__</strong>Renvoie le nom de la fonction utilisée<br>";
      echo '<strong>'.__FUNCTION__.'</strong><br/>';
      
    }
    test();
    
    echo "<strong>__FILE__</strong>Contient le chemin complet avec le nom du fichier<br>";
    echo '<strong>'.__FILE__.'</strong><br/>';
    
    echo "<strong>__DIR__</strong>affiche le dossier dans lequel est stocké ce fichier<br>";
    echo '<strong>'.__DIR__.'</strong><br/>';
    echo '<strong>'.__LINE__.'</strong><br/><br/>';


    ?>


      <div style="margin: 20px 0px;">
    <a href="chap11.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les fonctions relatives à la date en PHP</a>
    <a href="chap13.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les formulaires en PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>