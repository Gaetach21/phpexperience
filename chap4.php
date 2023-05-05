<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les variables en PHP</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
    <h1>Les variables en PHP</h1>
    <h2>Affectation et affichage</h2>
    <?php 
    $departement = "var"; //type string
    $chiffre = 83; //type integer
    $pi = 3.14; //type float
    $variable1 = true; //type booleen
    $variable2 = false;
    //Pour afficher le contenu d'une variable
    echo $departement.'<br>';
    echo $chiffre.'<br>';
    
    ?>
    <h2>La concaténation</h2>
    <p>La concaténation est justement un moyen d'assembler du texte et des variables.</p>
    <?php
    echo "Le $departement est un département de France <br>";
    echo 'Le '.$departement. ' est un département de France <br>';
    ?>
    <h2>Les opérations simples</h2>
    <?php
    $nombre1 = 5;
    $nombre2 = 3;
    $addition = $nombre1 + $nombre2;  
    $soustraction = $nombre1 - $nombre2; 
    $multiplication = $nombre1  *  $nombre2; 
    $division = $nombre1 / $nombre2; 
    $modulo = $nombre1  %   $nombre2; 
    echo 'addition : '.$addition.'<br>';
    echo 'soustraction : '.$soustraction.'<br>';
    echo 'multiplication : '.$multiplication.'<br>';
    echo 'division : '.$division.'<br>';
    echo 'modulo : '.$modulo.'<br>';
    echo $nombre1. '+' .$nombre2. '<br>';
    $addition = 20;
    $soustraction = $soustraction -$soustraction;
    $multiplication = $addition;
    echo 'Nouvelle valeur addition : '. $addition.'<br>';
    echo 'Nouvelle valeur soustraction : '. $soustraction.'<br>';
    echo 'Nouvelle valeur multiplication : '. $multiplication.'<br><br>';

    ?>

      <div style="margin-top: 10px;">
    <a href="chap3.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les bases du PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les conditions en PHP</a>
  </div>
      </div>


      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

