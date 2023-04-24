<?php

/*$nom_cookie="utilisateur";
$valeur_cookie="Gaetan";
setcookie($nom_cookie, $valeur_cookie, time() + 3600, "/", "pierre-giraud.fr", false, true);*/

$nom_cookie_2="test";
$valeur_cookie_2="Ceci est un test";
setcookie($nom_cookie_2, $valeur_cookie_2);
echo $_COOKIE["test"];


    ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Variables superglobales en PHP!</title>
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
      <li><a href="cours/chap12.php">Les constantes en PHP</a></li>
      <li><a href="cours/chap14sur27_Les instructions include et require.php">Les instructions include et require</a></li>
      <li><a href="cours/chap15sur27_Les opérations sur les fichiers en PHP.php">Les opérations sur les fichiers en PHP</a></li>
      <li><a href="cours/chap16sur27_Variables superglobales en PHP.php">Variables superglobales en PHP</a></li>
      <li><a href="cours/chap20.php">Connexion à MySQL</a></li>
    </ol>

      <div class="p-2">
    <h1>Variables superglobales en PHP</h1>
  <!--   <?php

   

    /*$nombre1 = 6;
    function Portee()
    {
      echo $nombre1.'La variable ne s\'affiche pas<br>';
      $nombre2 = 8;
    }
    Portee();
    echo $nombre1.'<br>';
    echo $nombre2.'<br>';*/

    /*$x=10; $y=20;
    function Mult()
    {
      $GLOBALS['z'] =$GLOBALS['x']*$GLOBALS['y'];
    }
    Mult();
    echo $z;*/


    /*echo $_SERVER['PHP_SELF'].'<br>';
    echo $_SERVER['SERVER_ADDR'].'<br>';
    echo $_SERVER['SERVER_NAME'].'<br>';
    echo $_SERVER['SCRIPT_NAME'].'<br>';
    echo $_SERVER['HTTP_HOST'];
*/


    ?> -->
   </div>
    </div>

      </div>
    </div> 



     



  </div> 


  </body>
</html>