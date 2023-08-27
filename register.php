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
                .success{
            width: 100%;
            border: 1px solid rgb(177,216,216);
            padding: 20px;
            margin: 20px;
            background-color: rgba(177,216,216,0.5);
            border-radius: 5px;
            color: green;
            font-size: 1.2em;
        }
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



if (isset($_GET['modifier_users'])) 
// Si on demande de modifier les infos sur un utilisateur
{
    
    // On récupère les infos de cet utilisateur
    $retour = $bdd->query('SELECT id, name, email, password FROM utilisateurs WHERE id ='.$_GET['modifier_users']);
    $donnees = $retour->fetch();
    $name = $donnees['name'];
    $email = $donnees['email'];
    $password = $donnees['password'];
    $id_users = $donnees['id'];
    // Cette variable va servir pour se souvenir que c'est une modification
}
else
// C'est qu'on crée un nouvel utilisateur
{
    

  $name = '';
  $email = '';
  $password = '';
  $id_users = 0;  
  // La variable vaut 0, donc on se souviendra que ce n'est pas une modification
}

// Vérification 1: est-ce qu'on peut créer un utilisateur
if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['confpwd'])) 
{
   //On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
  $_POST['name'] = htmlspecialchars($_POST['name']);
  $_POST['email'] = htmlspecialchars($_POST['email']);
  $_POST['password'] = htmlspecialchars($_POST['password']);
  $_POST['confpwd'] = htmlspecialchars($_POST['confpwd']);
   // On vérifie si c'est une modification de news ou pas
    if ($_POST['id_users'] == 0) {
        if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['confpwd'])){
    //Si tous les champs sont vides
        echo "<span>Le champ name est obligatoire!</span><br>";
        echo "<span>Le champ email est obligatoire!</span><br>";
        echo "<span>Le champ password est obligatoire!</span><br>";
        echo "<span>Le champ confirmation du mot de passe est obligatoire!</span><br>";

    } 
    //On vérifie si l'utilisateur a entré un nom
    elseif(empty($_POST['name'])){
    //Si le champ name est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<span>Le champ name est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9]+$#",$_POST['name'])){
    /*le champ name est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscules + des chiffres*/
        echo "<span>Le champ name doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux</span>";
    } 
    elseif(strlen($_POST['name'])<4){
    //le name est trop court, il est inférieur à 4 caractères
        echo "<span>Le champ name est trop court, il est inférieur à 4 caractères!</span>";
    }
    elseif(strlen($_POST['name'])>25){
    //le name est trop long, il dépasse 25 caractères
        echo "<span>Le champ name ne doit pas dépasser 25 caractères!</span>";
    } 
    elseif(empty($_POST['email'])){
    //le champ email est vide
        echo "<span>Le champ email est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
    //On vérifie l'adresse email par une regex
        echo "<span>L'adresse email n'est pas valide!</span>";
    }
    elseif(empty($_POST['password'])){
    //le champ mot de passe est vide
        echo "<span>Le champ Mot de passe est obligatoire!</span>";
    } 
    elseif(!preg_match("#^[A-Za-z0-9\#?!@$%^&*-]{8,}$#",$_POST['password'])){
    /*Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial*/
        echo "<span>Le mot de passe doit comporter au moins 8 caractères parmi lesquels au moins une lettre majuscule, minuscule, un chiffre, un caractère spécial</span>";
    }

    elseif(empty($_POST['confpwd'])){
    //le champ confirmation est vide
        echo "<span>Le champ Confirmation du mot de passe est obligatoire!</span>";
    }  
    
    elseif($_POST['password'] != $_POST['confpwd']){
    //le champ confirmation du mot de passe ne correspond pas
        echo "<span>La confirmation du mot de passe ne correspond pas!</span>";
    }  


    elseif($bdd->query("SELECT count(*) FROM utilisateurs WHERE name='".$_POST['name']."'")->fetchColumn() == 1){
    //on vérifie que le champ name n'est pas déjà utilisé par un autre membre
        echo "<span>Le nom choisi est déjà utilisé!</span>";
    }
    else {
    // Ce n'est pas une modification, on crée une nouvelle entrée dans la table
    // Insertion du message à l'aide d'une requête préparée
        //on crypte le mot de passe avec la fonction password_hash()
        $req = $bdd->prepare("INSERT INTO utilisateurs SET name='".$_POST['name']."', email='".$_POST['email']."', type='user', password='".password_hash($_POST['password'], PASSWORD_DEFAULT)."',date_inscription = NOW()");
        $result = $req->execute(array($_POST['name'], $_POST['email'],$_POST['password']));
        if($result){
        
            echo "<div class='success'>
             <h3><strong>".$_POST['name']."</strong>, Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
       exit(); 
        }
        } 
    } else {
        // C'est une modification, on met juste à jour le nom l'email et le mot de passe
        $req = $bdd->prepare('UPDATE utilisateurs set name=:nvname, email=:nvemail , password=:nvpassword WHERE id=:nvid');
        $result = $req->execute(array('nvname'=>$_POST['name'], 'nvemail'=>$_POST['email'], 'nvpassword'=>$_POST['password'],
        'nvid'=>$_POST['id_users'])); 
        if($result){
        
            echo "<div class='success'>
             <h3>Profil mis à jour</h3>
             <p><a href='login.php'>Connectez-vous</a> pour actualiser vos informations</p>
       </div>";
       exit(); 
        }
    }
}

    ?>
      <?php include("includes/registerform.php")?>
        

     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
