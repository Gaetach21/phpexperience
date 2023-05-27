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
      
      <!-- aside-->
    <?php include("includes/aside.php")?>


            <div id="main">
    <h1>Liste des cours</h1>
    <ol>
      <li><a href="chap1.php#main">Introduction au PHP</a></li>
      <li><a href="chap2.php#main">Préparez son environnement de travail</a></li>
      <li><a href="chap3.php#main">Les bases du PHP</a></li>
      <li><a href="chap4.php#main">Les variables en PHP</a></li>
      <li><a href="chap5.php#main">Les conditions en PHP</a></li>
      <li><a href="chap6.php#main">Les boucles en PHP</a></li>
      <li><a href="chap7.php#main">Les tableaux en PHP</a></li>
      <li><a href="chap8.php#main">Les fonctions en PHP</a></li>
      <li><a href="chap9.php#main">Les fonctions relatives aux string</a></li>
      <li><a href="chap10.php#main">Les fonctions affectant les array</a></li>
      <li><a href="chap11.php#main">Les fonctions relatives à la date en PHP</a></li>
      <li><a href="chap12.php#main">Les constantes en PHP</a></li>
      <li><a href="chap13.php#main">Les formulaires en PHP</a></li>
      <li><a href="chap14.php#main">Les instructions include et require</a></li>
      <li><a href="cours/chap15sur27_Les opérations sur les fichiers en PHP.php">Les opérations sur les fichiers en PHP</a></li>
      <li><a href="cours/chap16sur27_Variables superglobales en PHP.php">Variables superglobales en PHP</a></li>
      <li><a href="cours/chap20.php">Connexion à MySQL</a></li>
      <li><a href="cours/chap21.php">Insertion des données dans une BDD via PHP</a></li>
      <li><a href="cours/chap22.php">Sélection des données dans une BDD via PHP</a></li>
       <li><a href="cours/chap23sur27_Mise à jour et suppression de données dans une BDD.php">
      Mise à jour et suppression de données dans une BDD</a></li>
    </ol>
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

