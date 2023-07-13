<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Introduction au PHP</title>
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
    <h1>Introduction au PHP</h1>
    <h2>Définitions</h2>
    <p><strong>PHP</strong> signifie PHP HyperText Preprocessor</p>
    <p>Le PHP est un langage qui s'exécute côté serveur et permet de dynamiser un site.</p>
    <p>Un site statique doit être actualisé par quelqu'un pour changer.</p>
    <p>Un site dynamique change tout seul en fonction du visiteur ou de n'importe quel autre paramètre (heure, saison, etc.)</p>


    <h2>Relation client/serveur</h2>
    <p>un <strong>client</strong> est un ordinateur qui demande une page web</p>
    <p>un <strong>serveur</strong> est un méga-ordinateur qui ne s'arrête jamais et qui va envoyer la page web demandée au client.</p>
    <p>Pour un site dynamique, le serveur génère potentiellement une page donnée pour chaque visiteur qui la demande.</p>

    <h2>Le PHP génère du HTML</h2>
    <p>Un client n'est pas capable de lire du PHP.</p>
    <p>Le PHP va générer et envoyer une page en HTML différente pour chaque visiteur.</p>

    <p>Les concurrents du PHP sont :
      <ul>
        <li style="color: black;"><strong>Django</strong></li>
        <li style="color: black;"><strong>JEE</strong></li>
        <li style="color: black;"><strong>Ruby</strong></li>
      </ul>
      </p>
      <div style="margin: 20px 0px;">
    <a href="chap2.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Préparez son environnement de travail</a>
  </div>
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

