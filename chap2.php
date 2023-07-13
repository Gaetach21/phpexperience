<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Préparez son environnement de travail</title>
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
    <h1>Préparez son environnement de travail</h1>
    <h2>Travailler en local</h2>
    <p><strong>Travailler en local</strong>, c'est travailler "hors-ligne", sur sa machine. <br>Il présente certains avantages telque : <br>la gratuité, la possibilité de tester, de préparer des modifications, la possibilité de travailler n'importe ou et n'importe quand.</p>

    <h2>Rechercher une architecture serveur sur son ordinateur</h2>
    <p>Pour travailler en local, il faut transformer son ordinateur en serveur. En effet, les clients ne savent pas lire le PHP.</p>
    <p>Pour cela, il suffit d'installer:</p>
      <ul>
        <li style="color: black;">WAMP sous Windows</li>
        <li style="color: black;">MAMP sous Mac</li>
        <li style="color: black;">XAMPP sous Linux</li>
      </ul>
    

    <h2>L'éditeur de texte</h2>
    <p>Il existe énormément d'éditeurs de texte sur le marché aux fonctionnalités plus ou moins équivalente.</p>
    <p>Parmi les éditeurs de texte, on retrouve:</p>
      <ul>
        <li style="color: black;">Notepad++</li>
        <li style="color: black;">SublimeText</li>
        <li style="color: black;">Visual Studio Code</li>
      </ul>
      <div style="margin: 20px 0px;">
    <a href="chap1.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Introduction au PHP</a>
    <a href="chap3.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les bases du PHP</a>
  </div>
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

