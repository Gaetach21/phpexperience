<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les fonctions affectant les array</title>
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
    <h1>Les fonctions affectant les array</h1>
    <?php
    echo "<br><h3>La fonction array_keys</h3> retourne les clés ou les valeurs d'un tableau dans un autre<br>";
    $voitures = array(
        'Citroen' => "DS3", 
        'Renault' => "Clio", 
        'Peugeot' => "306",
        'Peugeot2' => 306 
        );
    print_r(array_keys($voitures));
    echo "<br>";
    


    echo "<br><h3>La fonction array_values</h3> retourne toutes les valeurs d'un tableau sans les clés dans un autre tableau<br>";
    $loisirs = array(
        'sport' => "Trail", 
        'voyage' => "Ecosse", 
        'musique' => "Guitare" 
        );
    echo "<pre>";
    print_r(array_values($loisirs));
    echo "</pre><br>";


    echo "<br><h3>La fonction array_key_exists</h3> vérifie si une clé existe et renvoie true ou false<br>";
    $voitures = array(
        'Citroen' => "DS3", 
        'Renault' => "Clio", 
        'Peugeot' => "306" 
        );
    if (array_key_exists("Citroen", $voitures)) {
        echo "La clef existe<br>";
    }
    else
    {
        echo "La clef n'existe pas";
    }


    echo "<h3>La fonction array_search</h3> recherche une valeur dans un tableau et retourne la clef<br/>";
    
    echo array_search("DS3", $voitures)."<br>";

    echo "<br><h3>La fonction in_array</h3>";
    $prenoms  = array('Pierre', 'Paul','Jacques');
    if (in_array("Pierre", $prenoms)) {
        echo "Prénom trouvé<br>";
    }
    else{
        echo "Prénom non trouvé<br>";
    }


    echo "<br><h3>La fonction count</h3>compte le nombre d'éléments d'un tableau<br>";
    $sport = array("natation", "velo","course");
    echo count($sport)."<br>";
    $compter = array("A","velo","natation", "velo","A");
    print_r(array_count_values($sport));
    echo "<br>";


    echo "<br><h3>La fonction array_diff_assoc</h3>compare les clés et les valeurs de deux tableaux<br>"; 
    $comparer = array(
        "A"=>"bleu",
        "B"=>"vert",
        "C"=>"jaune"
         );
    $comparant = array(
        "A"=>"bleu",
        "B"=>"vert"
         );
    print_r(array_diff_assoc($comparer, $comparant));
    echo "<br>";

    echo "<br><h3>La fonction array_diff_key</h3>fait le tri uniquement sur les clés<br>"; 
    print_r(array_diff_key($comparer, $comparant));
    echo "<br>";

    echo "<br><h3>La fonction array_diff</h3>cfait le tri uniquement sur les valeurs<br>"; 
    print_r(array_diff($comparer, $comparant));
    echo "<br>";


    echo "<br><h3>La fonction array_intersect_assoc</h3>renvoie les similitudes entre différents tableaux<br>"; 
    print_r(array_intersect_assoc($comparer, $comparant));
    echo "<br>";
    echo "<br><h3>La fonction array_intersect_key</h3>";
    echo "<br><h3>La fonction array_intersect</h3>"; 


    echo "<br><h3>La fonction array_fill</h3>"; 
    print_r(array_fill(0, 5, "vert"));
    echo "<br>";
    $rempli = array_fill(0, 5, "vert");
    print_r($rempli);
    echo "<br>";

    echo "<br><h3>La fonction array_fill_keys</h3>"; 
    $clefs = array("a","b","c","d","e");
    $remplir = array_fill_keys($clefs ,"bleu"); 
    print_r($remplir);
    echo "<br>";

    echo "<br><h3>Les fonctions array_push et array_pop</h3> insere et supprime les éléments à la fin du tableau respectivement<br>"; 
    $couleur = array("bleu","vert");
    array_push($couleur, "rouge","jaune");
    print_r($couleur);
    echo "<br>";

    array_pop($couleur);
    print_r($couleur);
    echo "<br>";

    echo "<br><h3>Les fonctions array_unshift et array_shift</h3> ajoute et supprime les éléments en début du tableau respectivement<br>"; 
    $couleur = array("bleu","vert");
    array_unshift($couleur, "jaune","violet");
    print_r($couleur);
    echo "<br>";

    array_shift($couleur);
    print_r($couleur);
    echo "<br>";

    echo "<br><h3>La fonction array_splice</h3>"; 
    $couleur1 = array(
        "a" => "bleu",
        "b" => "vert",
        "c" => "jaune"
    );
    $couleur2 = array(
        "a" => "rouge",
        "b" => "violet"
    );
    print_r(array_splice($couleur1, 1));
    print_r($couleur1);
    echo "<br>";

    print_r(array_splice($couleur1,0,1,$couleur2));
    print_r($couleur1);
    echo "<br>";

    echo "<br><h3>La fonction array_merge</h3> permet de combiner plusieurs tableaux en un nouveau<br>"; 
    $alpha = array("a","b");
    $beta = array("c","d");

    $omega = array_merge($alpha, $beta);
    print_r($omega);
    echo "<br>";

    echo "<br><h3>La fonction array_combine</h3>";
    $combine = array_combine($alpha, $beta);
    print_r($combine);
    echo "<br>";

    echo "<br><h3>La fonction array_unique</h3>";
    $unique = array("Pierre","Paul","Pierre","Jacques");
    print_r(array_unique($unique));
    echo "<br>";

    echo "<br><h3>La fonction sort</h3> pour ordonner les valeurs d'un tableau<br>";
    $noms = array("Pierre","Antoine","Jean","Henri");
    sort($noms);
    print_r($noms);
    echo "<br>";

    echo "<br><h3>La fonction rsort</h3>";
    rsort($noms);
    print_r($noms);
    echo "<br>";


    echo "<br><h3>Les fonctions ksort, krsort, asort, arsort</h3>";

    $agenom = array(
        "Pierre" => 24,
        "Paul" => 34,
        "Jacques" => 27
    );

    ksort($noms);
    print_r($noms);
    echo "<br>";

    krsort($noms);
    print_r($noms);
    echo "<br>";

    asort($noms);
    print_r($noms);
    echo "<br>";

    arsort($noms);
    print_r($noms);
    echo "<br><br>";

    ?>



      <div style="margin: 20px 0px;">
    <a href="chap9.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les fonctions relatives aux string</a>
    <a href="chap11.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les fonctions relatives à la date en PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>