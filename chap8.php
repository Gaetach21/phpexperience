<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les fonctions en PHP</title>
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
    <h1>Les fonctions en PHP</h1>
    <h2>Syntaxe d'une fonction</h2>
    <pre>
     <em>
        function Nomfonction()
    {
      code exécutée par la fonction;
    }
     </em>
    </pre><br>
    L'appel d'une fonction :
    <pre><em>Nomfonction();</em></pre><br>
    <h2>Exemples de fonction</h2>

    <?php
    function Bonjour()
    {
      echo "Bonjour à tous!<br/>";
    }
      Bonjour();

      //Pour dire bonjour aux utilisateurs de façon personnalisée

      function BonjourUtilisateur($prenom)
    {
      echo 'Bonjour '.$prenom.' !<br/><br/>';
    }
      BonjourUtilisateur('Gaetan');
      ?>

      <h2>Une fonction avec plusieurs paramètres</h2>
      <?php
      //Une fonction qui utilise plusieurs paramètres

      function NomAge($prenom,$age)
    {
      echo '<pre>'.$prenom.' a '.$age. ' ans!</pre><br/>';
    }
      NomAge('Gaetan', 29);

      ?>
      <h2>Différence entre return et echo</h2>
      <?php

      function DireBonjour()
    {
      return "Bonjour à tous!<br/><br/>";
    }
    function DireBonsoir()
    {
      echo "Bonsoir à tous!<br/>";
    }
      $bonjour = DireBonjour();
      $bonsoir = DireBonsoir();

      echo $bonjour;
      echo $bonsoir;
    ?>

      <div style="margin: 20px 0px;">
    <a href="chap7.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les tableaux en PHP</a>
    <a href="chap9.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les fonctions relatives aux string</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>


 