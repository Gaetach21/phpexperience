<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les boucles en PHP</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
    <h1>Les boucles en PHP</h1>
    <h2>Introduction</h2>
    <p>Une boucle permet de répéter des instructions plusieurs fois. Quel que soit le type de boucle, il faut indiquer une condition. Tant que la condition est remplie, les instructions sont réexécutées. Dès que la condition n'est plus remplie, on sort enfin de la boucle.</p>

    <h2>La boucle while</h2>
    <?php
    $x = 1;

    while ($x <= 10)
    {
        echo 'Ceci est le nombre : '.$x.'<br />';
        $x++; //$x = $x + 1
    }
    ?>


    <h2>La boucle do...while</h2>
    Cette boucle exécute le bloc de code au moins une fois et vérifie ensuite si la condition donnée est vraie.<br>
    <!-- <?php
    $x = 1;
    do {
        echo 'Ceci est le nombre : '.$x.'<br />';
        $x++; //$x = $x + 1
    }
    while ($x<0);
    ?>

    <h2>La boucle for</h2>
    On utilise cette boucle lorsqu'on connait le nombre de fois qu'on va répéter les instructions. <br>
    <?php
    for ($x = 1; $x <= 10; $x++)
    {
        echo 'Ceci est le nombre n°' . $x . '<br />';
    }
    ?>
    <p>Dans cette boucle, on utilise 3 paramètres: l'<strong>initialisation</strong>,la <strong>condition</strong> et l'<strong>incrémentation</strong>.<br>
        On peut aussi décrémenter les valeurs dans la boucle. <br></p>
    <?php
    for ($x = 10; $x >= 1; $x--)
    {
        echo 'Ceci est le nombre n°' . $x . '<br />';
    }
    ?>-->


    <br> 



      <div style="margin-top: 10px;">
    <a href="chap5.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les conditions en PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les tableaux en PHP</a>
  </div>
      </div>


      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

