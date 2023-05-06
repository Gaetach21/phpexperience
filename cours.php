<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Liste des cours sur le PHP!</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
    <h1>Liste des cours</h1>
    <ol>
      <li><a href="chap1.php#main">Introduction au PHP</a></li>
      <li><a href="chap2.php#main">Préparez son environnement de travail</a></li>
      <li><a href="chap3.php#main">Les bases du PHP</a></li>
      <li><a href="chap4.php#main">Les variables en PHP</a></li>
      <li><a href="chap5.php#main">Les conditions en PHP</a></li>
      <li><a href="chap6.php#main">Les boucles en PHP</a></li>
      <li><a href="cours/chap8.php">Les fonctions en PHP</a></li>
      <li><a href="cours/chap12.php">Les constantes en PHP</a></li>
      <li><a href="cours/chap14sur27_Les instructions include et require.php">Les instructions include et require</a></li>
      <li><a href="cours/chap15sur27_Les opérations sur les fichiers en PHP.php">Les opérations sur les fichiers en PHP</a></li>
      <li><a href="cours/chap16sur27_Variables superglobales en PHP.php">Variables superglobales en PHP</a></li>
      <!--<li><a href="cours/chap20.php">Connexion à MySQL</a></li>
      <li><a href="cours/chap21.php">Insertion des données dans une BDD via PHP</a></li>
      <li><a href="cours/chap22.php">Sélection des données dans une BDD via PHP</a></li>
       <li><a href="cours/chap23sur27_Mise à jour et suppression de données dans une BDD.php">
      Mise à jour et suppression de données dans une BDD</a></li> -->
    </ol>
      </div>

      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

