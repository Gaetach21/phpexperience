<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les tableaux en PHP</title>
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
    <h1>Les tableaux en PHP</h1>
    <h2>Introduction</h2>
    <p>Il existe 3 types de tableaux en PHP : les <strong>tableaux numérotés</strong>,les <strong>tableaux associatifs</strong> et les <strong>tableaux multidimensionnels</strong> </p>

    <h2>Les tableaux numérotés</h2>
    <?php
    //On peut écrire un tableau de 2 façons
    $prenoms =array('Pierre', 'Paul', 'Jacques');
    $prenoms[0] = 'Pierre';
    $prenoms[1] = 'Paul';
    $prenoms[2] = 'Jacques';
    // Pour afficher la première valeur d'un tableau numérotée
    echo $prenoms[0].'<br/>';
    //Pour parcourir un tableau numéroté, on utilise les boucles for et foreach
    echo '<br/><strong>La boucle for</strong><br/>';
    for ($i=0; $i <=2 ; $i++) { 
        echo $prenoms[$i].'<br/>';
    }
    echo '<br/><strong>La boucle foreach</strong><br/>';
    foreach ($prenoms as $items) {
         echo $items.'<br/>';
     } 

    ?>
    <br>


   <h2>Les tableaux associatifs</h2>
    <?php
    $age = array(
        'Pierre' => 24 , 
        'Paul' => 22 , 
        'Jacques' => 'Non renseigné');
    // Pour afficher la première valeur d'un tableau associatif
    echo $age['Pierre'].'<br/>';
    //Pour parcourir un tableau associatif, on utilise la boucle foreach
    echo '<br/><strong>La boucle foreach</strong><br/>';
    foreach ($age as $valeurs) {
         echo $valeurs.'<br/>';
     }
     //Pour récupérer les clés et leurs valeurs
     echo '<br/><strong>La boucle foreach avec clés et valeurs</strong><br/>';
     foreach ($age as $clef => $valeurs) {
          echo 'L\'age de '.$clef. ' est '.$valeurs.'.<br/>';
      } 
      //La fonction print_r permet d'afficher un tableau
      echo '<br/><strong>La fonction print_r</strong><br/>';
      print_r($age);
      echo '<br/><br/><strong>Affichage du tableau sur plusieurs lignes avec print_r</strong><br/>';
      echo '<pre>';
      print_r($age);
      echo '</pre>';
    ?>
    <br>
    <br> 

    <h2>Les tableaux multidimensionnels</h2>
    <?php
    $membres = array(
    array('Pierre', 24, 'pierre@yahoo.fr'),
    array('Paul', 22, 'paul@gmail.com'),
    array('Jacques', 36, 'jacques@yahoo.fr')
	);
	echo '<br/>';
	echo $membres[0][0].' a '.$membres[0][1].' ans. Son mail est :'.$membres[0][2].'<br/>';
	echo $membres[1][0].' a '.$membres[1][1].' ans. Son mail est :'.$membres[1][2].'<br/>';
	echo $membres[2][0].' a '.$membres[2][1].' ans. Son mail est :'.$membres[2][2].'<br/>';
	echo '<br/>';
	// Pour récupérer les éléments de notre tableau, on utilise la boucle for
	
	for ($ligne=0; $ligne<3; $ligne++) { 
		$membre_no = $ligne+1;
		echo '<strong>Membre numéro '.$membre_no.'</strong><br/>';
		for ($col=0; $col<3; $col++) { 
			echo $membres[$ligne][$col].'<br/>';	
		}
		
	}
	echo '<br/>';
    ?>

      <div style="margin: 20px 0px;">
    <a href="chap6.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les boucles en PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les fonctions en PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

