<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Validation du formulaire de contact</title>
        <style type="text/css">span{color:red;}</style>
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
if(isset($_POST['valider'])){
  $_POST['prenom'] = htmlspecialchars($_POST['prenom']);
  $_POST['mail'] = htmlspecialchars($_POST['mail']);
  $_POST['tel'] = htmlspecialchars($_POST['tel']);
  $_POST['msg'] = htmlspecialchars($_POST['msg']);
//On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
//On vérifie si l'utilisateur a rempli tous les champs
    if(empty($_POST['prenom']) && empty($_POST['mail']) && empty($_POST['tel']) && empty($_POST['msg'])){
    //Si tous les champs sont vides, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<span>Tous les champs sont obligatoires!</span>";
    }
    elseif(empty($_POST['prenom']) || empty($_POST['mail']) || empty($_POST['tel']) || empty($_POST['tel'])){
    //Si un des champs est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "<span>Au moins un des champs est vide! Veuillez remplir tous les champs!</span>";
    }  
    elseif(strlen($_POST['prenom'])<4){
    //le prénom est trop court, il est inférieur à 4 caractères
        echo "<span>Le champ Prénom doit comporter au moins 4 caractères!</span>";
    }
    elseif(strlen($_POST['prenom'])>16){
    //le prénom est trop long, il dépasse 16 caractères
        echo "<span>Le champ Prénom doit comporter au plus 16 caractères!</span>";
    }  
    elseif(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['mail'])){
    //On vérifie l'adresse email par une regex
        echo "<span>L'adresse email n'est pas valide!</span>";
    }
    elseif(!preg_match("#(237[-. ]?)?6[-. ]?[5-9][0-9]([-. ]?[0-9]{2}){3}$#", $_POST['tel'])){
    //On vérifie le numéro de téléphone par une regex 
      echo "<span>Le numéro de téléphone n'est pas valide !</span><br>";
    }
 
    else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        $req = $bdd->prepare('INSERT INTO contact (prenom, mail, tel, msg, date_creation) VALUES(?, ?, ?, ?, NOW())');
        $insert = $req->execute(array($_POST['prenom'], $_POST['mail'],$_POST['tel'],$_POST['msg']));
        if(!$insert){
        
            echo "<span>Une erreur s'est produite!</span>";
        } else {
 ?>
<script type="text/javascript">alert('Votre message a été enregistré avec succès');</script>
<?php         
            
        }
    }
}

    ?>

              <div class="container">
      <h1>Bienvenue sur la page de contact</h1>
      <form method="post" action="validation.php">
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"  maxlength='20' >
        <span id="prenom_invalide"></span><br>

        <label for="mail">Email</label><br>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre email" >
        <span id="email_invalide"></span><br>

        <label for="tel">Téléphone</label><br>
        <input type="tel" name="tel" id="tel" placeholder="Entrez votre numéro de téléphone" >
        <span id="tel_invalide"></span><br>

        <label for="msg">Message</label><br>
        <textarea name="msg" id="msg" placeholder="Entrez votre message" ></textarea>
        <span id="msg_invalide"></span><br>

        <input type="submit" value="Valider" name ="valider" id="bouton_envoi">
        <input type="reset" value="Effacer">
    </form>
    </div>

    
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>