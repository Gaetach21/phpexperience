<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les conditions en PHP</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
    <h1>Les conditions en PHP</h1>
    <h2>Les symboles à connaître</h2>
    <pre>==  Est égal à 
!=  Est différent de</pre>

    <h2>La structure de base : if… else</h2>
    <?php
$heure_connexion = 12;
if ($heure_connexion < 18)
{
    echo "Passez une bonne journée !<br>";
}
?>
<?php
$heure_connexion = 20;
if ($heure_connexion < 18)
{
    echo "Passez une bonne journée !<br>";
}
else
{
    echo "Passez une bonne soirée !<br>";
}
?>
<?php
$heure_connexion = 17;
if ($heure_connexion < 18)
{
    echo "Passez une bonne journée !<br>";
    $journee = "oui";
}
else
{
    echo "Passez une bonne soirée !<br>";
    $journee = "non";
}
    echo 'Fait-il jour? La réponse est '.$journee.'.<br>';
?>

    <h2>Les conditions multiples</h2>
    <pre>AND symbole : &&; OR symbole : ||</pre>
    <?php
$age = 8;
$langue = "anglais";

if ($age <= 12 AND $langue == "français")
{
    echo "Bienvenue sur mon site !<br>";
}
elseif ($age <= 12 AND $langue == "anglais")
{
    echo "Welcome to my website!<br>";
}
?>

    <h2>L'astuce bonus</h2>
    <?php
    $variable = 23;
    if ($variable == 23)
    {
    ?>
    <strong>Bravo !</strong> Vous avez trouvé le nombre mystère !<br>
    <?php
    }
    ?>
    <h2>Le Switch</h2>
    <?php
$note = 10;

switch ($note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!<br>";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais<br>";
    break;
    
    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais<br>";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…<br>";
    break;
    
    case 12:
        echo "Tu es assez bon<br>";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !<br>";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !<br>";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note<br>";
}
?><br>



      <div style="margin-top: 10px;">
    <a href="chap4.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les variables du PHP</a>
    <a href="chap6.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les boucles en PHP</a>
  </div>
      </div>


      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

