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
    </ol>

      <div class="p-2">
    <h1>Les fonctions en PHP</h1>
    <?php
    /*function Bonjour()
    {
      echo "Bonjour à tous!";
    }
      Bonjour();*/

      /*function BonjourUtilisateur($prenom)
    {
      echo '<h3>Bonjour '.$prenom.' !</h3>';
    }
      BonjourUtilisateur('Gaetan');*/

      /*function NomAge($prenom,$age)
    {
      echo '<h3>'.$prenom.' a '.$age. ' ans!</h3>';
    }
      NomAge('Gaetan', 29);*/

      function Bonjour()
    {
      return "Bonjour à tous!<br/>";
    }
    function Bonsoir()
    {
      echo "Bonsoir à tous!<br/>";
    }
      $bonjour = Bonjour();
      $bonsoir = Bonsoir();

      echo $bonjour;
      echo $bonsoir;


    ?>
   </div>
    </div>

      </div>
    </div> 



     



  </div> 


  </body>
</html>