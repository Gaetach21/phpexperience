<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Page d'inscription</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
              <style type="text/css">
                span {color: red; font-size: 1.2em;}
              </style>

            

<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}



//traitement du formulaire:
if(isset($_POST['pseudo'],$_POST['mail'],$_POST['mdp'],$_POST['confmdp'])){
  $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
  $_POST['mail'] = htmlspecialchars($_POST['mail']);
  $_POST['mdp'] = htmlspecialchars($_POST['mdp']);
  $_POST['confmdp'] = htmlspecialchars($_POST['confmdp']);
//On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
//On vérifie si l'utilisateur a entré un pseudo
    if(empty($_POST['pseudo'])){
    //Si le champ pseudo est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<span>Le champ Pseudo est vide!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9]+$#",$_POST['pseudo'])){
    /*le champ pseudo est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres (je préfère personnellement enregistrer le pseudo de mes membres en minuscule afin de ne pas avoir deux pseudo identiques mais différents comme par exemple: Admin et admin)*/
        echo "<span>Le Pseudo doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux</span>";
    } 
    elseif(strlen($_POST['pseudo'])<4){
    //le pseudo est trop court, il est inférieur à 4 caractères
        echo "<span>Le pseudo est trop court, il est inférieur à 4 caractères!</span>";
    }
    elseif(strlen($_POST['pseudo'])>25){
    //le pseudo est trop long, il dépasse 25 caractères
        echo "<span>Le pseudo est trop long, il dépasse 25 caractères!</span>";
    } 
    elseif(empty($_POST['mail'])){
    //le champ mail est vide
        echo "<span>Le champ Adresse email est vide!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail'])){
    //On vérifie l'adresse email par une regex
        echo "<span>L'adresse email n'est pas valide!</span>";
    }
    elseif(empty($_POST['mdp'])){
    //le champ mot de passe est vide
        echo "<span>Le champ Mot de passe est vide!</span>";
    } 
    elseif(!preg_match("#^[A-Za-z0-9\#?!@$%^&*-]{8,}$#",$_POST['mdp'])){
    /*Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial*/
        echo "<span>Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial</span>";
    }

    elseif(empty($_POST['confmdp'])){
    //le champ confirmation est vide
        echo "<span>Le champ Confirmation du mot de passe est vide!</span>";
    }  
    
    elseif($_POST['mdp'] != $_POST['confmdp']){
    //le champ confirmation du mot de passe ne correspond pas
        echo "<span>La confirmation du mot de passe ne correspond pas!</span>";
    }  
    elseif($bdd->query("SELECT count(*) FROM inscription WHERE pseudo='".$_POST['pseudo']."'")->fetchColumn() == 1){
    //on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "<span>Ce pseudo est déjà utilisé!</span>";
    } 
    else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
      //on crypte le mot de passe avec la fonction password_hash()
        $req = $bdd->prepare("INSERT INTO inscription SET pseudo='".$_POST['pseudo']."', mail='".$_POST['mail']."', mdp='".password_hash($_POST['mdp'], PASSWORD_DEFAULT)."',date_inscription = NOW()");
        $insert = $req->execute(array($_POST['pseudo'], $_POST['mail'],$_POST['mdp']));
        if(!$insert){
        
            echo "<span>Une erreur s'est produite!</span>";
        } else {
            echo '<center><strong>'.$_POST['pseudo'].'</strong> Vous êtes inscrit avec succès!</center>';
            
        }
    }
}

    ?>

      <div class="container">
      <h1>Bienvenue sur la page d'inscription</h1>
      
      <form method="post" action="inscription.php">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo"> <br>     

        <label for="mail">Email</label><br>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre adresse email"><br>

        <label for="mdp">Mot de passe</label><br>
        <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe"><br>

        <label for="confmdp">Confirmation</label><br>
        <input type="password" name="confmdp" id="confmdp" placeholder="Confirmez votre mot de passe"><br><br>

        <input type="submit" value="S'inscrire">
    </form>
    </div>


     
      </div>

      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
