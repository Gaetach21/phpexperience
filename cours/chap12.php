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
      <li><a href="cours/chap12.php">Les constantes en PHP</a></li>
      <li><a href="cours/chap20.php">Connexion à MySQL</a></li>
    </ol>

      <div class="p-2">
    <h1>Les constantes en PHP</h1>
    <?php
    /*define("BIENVENUE", "Bienvenue sur mon site!");
    echo BIENVENUE;*/

/*    $a = "Bonjour";
    define("NOMBRE", 4);

    function portee()
    {
      echo $a;
      echo NOMBRE;
      echo "<br/>";
      $b=36;
      echo $b;
    }
    portee();*/

    echo __LINE__.'<br/>';
    function test()
    {
      echo __FUNCTION__.'<br/>';
    }
    test();
    echo __FILE__.'<br/>';
    echo __DIR__.'<br/>';
    echo __LINE__;


    ?>
   </div>
    </div>

      </div>
    </div> 



     



  </div> 


  </body>
</html>