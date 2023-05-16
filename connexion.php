<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Page de connexion</title>
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
              <style type="text/css">
                span {color: red; font-size: 1.2em;}
              </style>


      <div class="container" style="padding-bottom: 200px;">
      <h1>Bienvenue sur la page de connexion</h1>
      
      <form method="post" action="connexion.php">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo"> <br>     

        <label for="mdp">Mot de passe</label><br>
        <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe"><br>

        <input type="submit" value="Connexion" name="connexion">
    </form>
    

            

              <?php
//Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

    //si le bouton "Connexion" est cliqué
    if(isset($_POST['connexion'])){
    //Si les deux champs sont vides
    if (empty($_POST['pseudo']) AND empty($_POST['mdp']))
    {
        echo "<span>Les deux champs sont vides!<span>";
    }
    //On vérifie si l'un des champ est vide
    elseif (empty($_POST['pseudo']) OR empty($_POST['mdp'])) 
    {
        echo "<span>Un des champs est vide!<span>";
    }
    
    //Si aucun des champs n'est vide
    else
    {
    //On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['mdp']);

 
    
    //on fait maintenant la requête dans la base de données pour rechercher si ces données existent et correspondent:
    $req = $bdd->prepare('SELECT * FROM inscription WHERE pseudo = :pseudo');
    $req->bindValue('pseudo', $pseudo);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    
    
    
    if ($result) {
        $passwordHash = $result['mdp'];
        if (password_verify($password, $passwordHash)) {
            echo '<center><strong>'.$_POST['pseudo'].'</strong> Vous êtes connectés!</center>';
        } else {
            echo "<span>Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé!</span>";
        }
    } else {
        echo "<span>Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé!</span>";    }
}
}


?>
</div>



     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>