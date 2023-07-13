<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les bases de la POO en PHP</title>
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
          <h1>Les bases de la POO en PHP</h1>
          <h3>Introduction</h3>
          POO signifie <strong>Programmation Orientée Objet</strong>.<br>
          La POO repose sur la création et l'utilisation des classes et d'objets.<br>
          Une classe contient un ensemble de fonctions encore appelées méthodes et de variables encore appelées propriétés.<br>
          On crée des objets à partir des classes et les objets ont accès aux méthodes et propriétés des classes desquelles ils sont issus.<br>

<?php
include_once('visiteur.php');
echo "On va créér des objets à partir de notre classe Visiteur<br>";         
$visiteur1 = new Visiteur;
$visiteur2 = new Visiteur;

$visiteur1->set_prenom('Gaetan');
$visiteur2->set_prenom('Paul');
$visiteur1->set_nom('TACHAGO');


echo "<strong>Exemple d'utilisation : </strong><br>";
echo 'Bonjour '.$visiteur1->get_prenom().'<br>';
echo 'Bonjour '.$visiteur2->get_prenom().'<br><br>';

echo "<h3>Héritage et encapsulation</h3>";
echo "On crée des classes filles à partir d'une classe mère.<br>";
echo "<strong>Exemple d'utilisation : </strong><br>";
echo "<pre><strong>class femme extends Visiteur{
  
}</pre></strong><br>";
echo "<h3>Utiilisation de public, private et protected</h3>";
echo "<strong>Exemple d'utilisation : </strong><br>";
echo 'Ton nom ? '.$visiteur1-> nom.'<br>';
//echo 'Ton prénom ? '.$visiteur1-> prenom.'<br>';

echo "On ne récupère pas le prénom parce qu'il est défini en private dans la classe Visiteur.<br>";
echo "De façon générale, on définit toutes les propriétés d'une classe en private ou protected afin d'éviter des failles potentielles et de mieux traiter les données reçues.<br>";
echo "On met très souvent les méthodes en public.<br>";

?>
              <br>
            
      <div style="margin: 20px 0px;">
    <a href="chap16.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Variables superglobales en PHP</a>
    <a href="chap18.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Gestion des erreurs en PHP</a>
  </div>
  </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>