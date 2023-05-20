<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les fonctions en PHP</title>
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
    <h1>Les fonctions relatives aux string</h1>
    <?php
    echo "<br><h3>La fonction strlen</h3> pour la longueur de la chaine<br>";
    echo strlen("Bonjour à tous")."<br/>";


    echo "<br><h3>La fonction str_word_count</h3> pour compter le nombre de mots<br>";
    echo str_word_count("Bonjour à tous")."<br/>";
    echo str_word_count("Salut l'ami")."<br/>";
    echo str_word_count("Bonjour à tous")."<br/>";


    echo "<br><h3>La fonction str_repeat</h3> repete une chaine de caractères<br>";
    echo str_repeat("Bonjour <br>", 7)."<br/>";


    echo "<h3>La fonction str_replace</h3> remplace une chaine de caractères par une autre<br/>";
    $texte = "Bonjour, comment allez-vous ?";
    echo str_replace("Bonjour", "Bonsoir", $texte, $i);
    echo '<br/> Nombre de remplacements : '.$i."<br/>";


    echo "<br><h3>Les fonctions strtolower et strtoupper</h3>";
    $minmaj = "BonJour, VouS allez bIEN?";
    echo strtolower($minmaj).'<br>';
    echo strtoupper($minmaj).'<br>';


    echo "<br><h3>La fonction strpos</h3> recherche un caractère spécifique dans une chaine de caractères<br>"; 
    echo strpos("Bonjour", "o").'<br>';
    echo strpos("Bonjour a  tous", "tous").'<br>';
    echo strpos("Bonjour", "e").'<br>';

    echo "<br><h3>Les fonctions htmlspecialchars et htmlspecialchars_decode</h3> convertit des caractères en entités HTML et transforme des entités HTML en caractères respectivement.<br>";
    $str = 'J\'aime le <strong>"PHP"</strong>';
    echo htmlspecialchars($str).'<br>';


    echo "<br><h3>La fonction nl2br</h3> pour un retour à la ligne<br>"; 
    echo nl2br("Bonjour!
      Comment ça va?").'<br>';


    echo "<br><h3>Les fonctions explode, str_split, implode et join</h3>"; 
    $ch2tb = "Bonjour à tous";
    print_r(explode("o", $ch2tb));
    echo '<br><br>';

    print_r(str_split("Bonjour", 2));
    echo '<br><br>';

    $tb2ch = array('Bonjour', 'à', 'tous');
    echo implode(" ",  $tb2ch );
    echo '<br>';


    ?>



      <div style="margin: 20px 0px;">
    <a href="chap8.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les fonctions en PHP</a>
    <a href="chap10.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les fonctions affectant les array</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>