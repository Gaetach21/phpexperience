<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les formulaires en PHP</title>
        <style type="text/css">
        table, th, td {border: 1px solid grey; 
      padding: 5px;
      border-collapse: collapse;}
    </style>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
        
      <!-- aside-->
    <?php include("includes/aside.php")?>


            <div id="main" style="margin-bottom: 50px:">
              <p>Bonjour
    <!-- <?php
    //echo $_POST['prenom'];
    //echo htmlspecialchars($_POST['prenom']);
    echo strip_tags($_POST['prenom']);
    ?>
    , bienvenue sur mon site !</p>
    <p>
      Tu ne t'appelles pas 
      <?php
      //echo $_POST['prenom'];
      //echo htmlspecialchars($_POST['prenom']);
      echo strip_tags($_POST['prenom']);
      ?>
    , j'ai du mal comprendre !</p>
    <p>Clique <a href="chap13.php#main"> ici </a> pour retaper ton prénom</p> -->
     <?php
      $prenom = $nom = $pseudo = "";

        function securisation($donnees){
          $donnees = trim($donnees);
          $donnees = stripslashes($donnees);
          $donnees = strip_tags($donnees);
          return $donnees;
        }

        $prenom = securisation($_POST['prenom']);
        $nom = securisation($_POST['nom']);
        $pseudo = securisation($_POST['pseudo']);

        echo 'Ton prénom est : '.$prenom.'<br>';
        echo 'Ton nom est : '.$nom.'<br>';
        echo 'Ton pseudo est : '.$pseudo.'<br>';

    ?> 
    <h3>Sécurisation des données d'un formulaire</h3>
    <p>
      Pour sécuriser nos formulaires en PHP, on distingue plusieurs fonctions.<br>
      La fonction <strong>htmlspecialchars()</strong> affiche le code HTML injecté dans un formulaire tel quel.<br>
      La fonction <strong>strip_tags()</strong> empêche les caractères HTML d'etre interprété et les supprime complètement.<br>
      la fonction <strong>trim()</strong> supprime les espaces inutiles, les retours à ligne non désirés, etc.<br>
      la fonction <strong>striplashes()</strong> retire les antislashes.<br>

    </p>
    <br><br><br><br><br>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>