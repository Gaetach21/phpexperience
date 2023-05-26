<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les formulaires en PHP</title>
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
              <div class="container">
    <h1>Les formulaires en PHP</h1>
    <h3>Envoi et reception d'un formulaire</h3>
    <form method="post" action="target.php#main">
      <p>
        <label for="prenom">Entrez votre prénom : </label>
        <input type="text" name="prenom" id="prenom">
      </p>
       <p>
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
      </p>
      <p>
        <label for="pseudo">Entrez votre pseudo : </label>
        <input type="text" name="pseudo" id="pseudo">
      </p> 
      <p>
        <input type="submit" value="Envoyer">
      </p>
    </form>

    <h3>Sécurisation des données d'un formulaire</h3>
    <p>
      Pour sécuriser nos formulaires en PHP, on distingue plusieurs fonctions.<br>
      La fonction <strong>htmlspecialchars()</strong> affiche le code HTML injecté dans un formulaire tel quel.<br>
      La fonction <strong>strip_tags()</strong> empêche les caractères HTML d'etre interprété et les supprime complètement.<br>
      la fonction <strong>trim()</strong> supprime les espaces inutiles, les retours à ligne non désirés, etc.<br>
      la fonction <strong>striplashes()</strong> retire les antislashes.<br>

    </p>


      <div style="margin: 20px 0px;">
    <a href="chap12.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les constantes en PHP</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les instructions include et require</a>
  </div>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>