<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les bases du PHP</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
    <h1>Les bases du PHP</h1>
    <p>On peut écrire le code PHP n'importe ou dans une page HTML.<br>
    Pour utiliser du PHP, on va devoir introduire la  balise PHP. Elle commence par <?php echo "<?php"; ?> et se termine par <?php echo "?>"; ?></p>
    <h2>Les instructions echo et print</h2>
    <p><strong>echo</strong> et <strong>print</strong> servent à afficher du texte, des nombres, etc.<br>
    <?php echo "Ceci est écrit en PHP"; ?><br>
      <?php print "Ceci est affiché grace à print"; ?><br>
    <?php echo "Ceci est du <strong>texte</strong>"; ?><br>
    <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>
    <br><strong>echo</strong> peut retourner plusieurs chaines de caractères alors que <strong>print</strong> n'en retourne qu'une seule.</p>
    <!-- <h2>Les commentaires en PHP</h2>
    <p>Un <strong>commentaire</strong> est un texte que vous mettez pour vous dans le code PHP. Ce texte est ignoré, c'est-à-dire qu'il disparaît complètement lors de la génération de la page. Il n'y a que vous qui voyez ce texte.</p>
    <p>Il existe deux types de commentaire : les commentaires monolignes et les commentaires multilignes. 
    </p>
    <p>Pour indiquer que vous écrivez un commentaire sur une seule ligne, vous devez taper deux slashs : «//». Tapez ensuite votre commentaire.</p>
    <p>Pour un commentaire multiligne, Il faut commencer par écrire/*puis refermer par*/
    </p>
    <h2>L'instruction include</h2>
    <p>Une page PHP peut inclure une autre page (ou un morceau de page) grâce à l'instruction include.</p>
    <p>L'instruction include  sera remplacée par le contenu de la page demandée.</p>
    <p>Cette technique, très simple à mettre en place, permet par exemple de placer les menus de son site dans un fichier menus.php  que l'on inclura dans toutes les pages. Cela permet de centraliser le code des menus, alors qu'on était auparavant obligés de le copier dans chaque page sur nos sites statiques en HTML et CSS !</p>
    <p>Exemple d'utilisation: <br>
    <img src="images/include.png"></p> -->
      <div style="margin-top: 10px;">
    <a href="chap2.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Préparez son environnement de travail</a>
    <a href="chap4.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les variables en PHP</a>
  </div>
      </div>


      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

