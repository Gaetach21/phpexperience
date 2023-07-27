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
    <!-- Logo-->
    <?php include("includes/logo.php")?>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    
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
if(isset($_POST['name'],$_POST['email'],$_POST['password'],$_POST['confpwd']))){
  $_POST['name'] = htmlspecialchars($_POST['name']);
  $_POST['email'] = htmlspecialchars($_POST['email']);
  $_POST['password'] = htmlspecialchars($_POST['password']);
  $_POST['confpwd'] = htmlspecialchars($_POST['confpwd']);
//On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
//On vérifie si tous les champs sont remplis
    if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['confpwd'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //Si tous les champs sont vides
        echo "<span>Le champ name est obligatoire!</span><br>";
        echo "<span>Le champ email est obligatoire!</span><br>";
        echo "<span>Le champ password est obligatoire!</span><br>";
        echo "<span>Le champ confirmation du mot de passe est obligatoire!</span><br>";

    } 
//On vérifie si l'utilisateur a entré un nom
    elseif(empty($_POST['name'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //Si le champ name est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<span>Le champ name est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9]+$#",$_POST['name'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    /*le champ name est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscules + des chiffres*/
        echo "<span>Le champ name doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux</span>";
    } 
    elseif(strlen($_POST['name'])<4){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //le name est trop court, il est inférieur à 4 caractères
        echo "<span>Le champ name est trop court, il est inférieur à 4 caractères!</span>";
    }
    elseif(strlen($_POST['name'])>25){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //le name est trop long, il dépasse 25 caractères
        echo "<span>Le champ name ne doit pas dépasser 25 caractères!</span>";
    } 
    elseif(empty($_POST['email'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //le champ email est vide
        echo "<span>Le champ email est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //On vérifie l'adresse email par une regex
        echo "<span>L'adresse email n'est pas valide!</span>";
    }
    elseif(empty($_POST['password'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //le champ mot de passe est vide
        echo "<span>Le champ Mot de passe est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[A-Za-z0-9\#?!@$%^&*-]{8,}$#",$_POST['password'])){
    	?><?php include("includes/registerform.php")?>
    	<?php
    /*Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial*/
        echo "<span>Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial</span>";
    }

    elseif(empty($_POST['confpwd'])){
        ?><?php include("includes/registerform.php")?>
        <?php
    //le champ confirmation est vide
        echo "<span>Le champ Confirmation du mot de passe est vide!</span>";
    }  
    
    elseif($_POST['password'] != $_POST['confpwd']){
        ?><?php include("includes/registerform.php")?>
        <?php
    //le champ confirmation du mot de passe ne correspond pas
        echo "<span>La confirmation du mot de passe ne correspond pas!</span>";
    }  


    elseif($bdd->query("SELECT count(*) FROM utilisateurs WHERE name='".$_POST['name']."'")->fetchColumn() == 1){
    	?><?php include("includes/registerform.php")?>
    	<?php
    //on vérifie que le champ name n'est pas déjà utilisé par un autre membre
        echo "<span>Le nom choisi est déjà utilisé!</span>";
    } 
    else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
      //on crypte le mot de passe avec la fonction password_hash()
        $req = $bdd->prepare("INSERT INTO utilisateurs SET name='".$_POST['name']."', email='".$_POST['email']."', type='user', password='".password_hash($_POST['password'], PASSWORD_DEFAULT)."',date_inscription = NOW()");
        $result = $req->execute(array($_POST['name'], $_POST['email'],$_POST['password']));
        if($result){
        ?><?php include("includes/registerform.php")?>
    	<?php
            echo "<div class='success'>
             <h3><strong>'.$_POST['name'].'</strong>, Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
        } 
    }
}
else {
        	?>
<?php include("includes/registerform.php")?>
        	
        <?php    
        }

    ?>
      


     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
