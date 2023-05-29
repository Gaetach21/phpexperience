<?php

$nom_cookie="nom";
$valeur_cookie="Gaetan";
setcookie($nom_cookie, $valeur_cookie, time() + 3600, "/", "phpexperience.com", false, true);

$nom_cookie_2="test";
$valeur_cookie_2="Ceci est un test";
setcookie($nom_cookie_2, $valeur_cookie_2);

//Pour ouvrir une session
session_start();


    ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Variables superglobales en PHP</title>
    <style type="text/css">
        table, th, td {border: 1px solid grey; 
      padding: 5px;
      border-collapse: collapse;}
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
          <h1>Variables superglobales en PHP</h1>
          <h3>Introduction</h3>
          Les variables sont définies globalement ou localement(dans 
          l'espace local d'une fonction).<br>
          Une variable globale n'est pas accessible localement et une variable 
          locale n'est pas accessible globalement.<br>
          <strong>Exemple d'utilisation</strong> : <br>
          <?php
              $nombre1 = 6;
              function Portee()
              {
                //echo $nombre1;
                echo 'La variable ne s\'affiche pas<br>';
                $nombre2 = 8;
              }
              Portee();
              echo $nombre1.'<br>';
              // echo $nombre2.'<br>';
              ?>
              <br>
            <h3>Les superglobales</h3>
            Les superglobales en PHP sont résumées dans le tableau suivant : <br>
            <table>
<thead>
<tr>
<th>Nom</th>
<th>Utilisation</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>$GLOBALS</strong></td>
<td>permet d'acceder à des variables globalement depuis n'importe où dans le script</td>
</tr>
<tr>
<td><strong>$_SERVER</strong></td>
<td>contient des informations de type serveur ou système</td>
</tr>
<tr>
<td><strong>$_REQUEST</strong></td>
<td>pour récolter des informations après l'envoi d'un formulaire</td>
</tr>
<tr>
<td><strong>$_POST</strong></td>
<td>pour récolter les données après soumission d'un formulaire en utilisant la méthode post</td>
</tr>
<tr>
<td><strong>$_GET</strong></td>
<td>pour récolter les données après soumission d'un formulaire en utilisant la méthode get</td>
</tr>
<tr>
<td><strong>$_FILE</strong></td>
<td>permet d'avoir des informations sur un fichier téléchargé</td>
</tr>
<tr>
<td><strong>$_ENV</strong></td>
<td>contient des informations sur l'environnement, la configuration PHP</td>
</tr>
</tbody>
</table><br>
D'autres superglobales sont : <strong>$_COOKIE</strong> et <strong>$_SESSION</strong>.<br><br>
<h3>Exemple d'utilisation de $GLOBALS</h3>
              <?php

              $x=10; $y=20;
              function Mult()
              {
                $GLOBALS['z'] =$GLOBALS['x']*$GLOBALS['y'];
              }
              Mult();
              echo $z;
              echo "<br><br>";
              ?>

<h3>Exemple d'utilisation de $_SERVER</h3>
            <?php

              echo $_SERVER['PHP_SELF'].'<br>';
              echo $_SERVER['SERVER_ADDR'].'<br>';
              echo $_SERVER['SERVER_NAME'].'<br>';
              echo $_SERVER['SCRIPT_NAME'].'<br>';
              echo $_SERVER['HTTP_HOST'].'<br><br>';
              ?>
              <h3>Exemple d'utilisation de $_COOKIE</h3>
              <?php
              echo "On peut modifier ou supprimer un cookie en utilisant setcookie() :<br>";
              echo $_COOKIE["test"].'<br><br>';
              ?>
              <h3>Exemple d'utilisation de $_SESSION</h3>
              <?php
              $_SESSION["prenom"] = "Gaetan";
              $_SESSION["age"] = 30;
              $_SESSION["sport"] = "football";
              
              echo $_SESSION["prenom"].'<br>';
              echo $_SESSION["age"].'<br>';
              echo $_SESSION["sport"].'<br><br>';
              ?>

      <div style="margin: 20px 0px;">
    <a href="chap15.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les opérations sur les fichiers en PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les bases de la POO en PHP</a>
  </div>
  </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>