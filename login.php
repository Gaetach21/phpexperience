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
session_start();


//traitement du formulaire:
if(isset($_POST['submit'])){

//On les rend inoffensives, les balises HTML que le visiteur a pu entrer.
//On vérifie si tous les champs sont remplis
    if(empty($_POST['name']) && empty($_POST['password'])){
    	?><?php include("includes/loginform.php")?>
    	<?php
    //Si tous les champs sont vides
        echo "<span>Les deux champs sont obligatoires!</span><br>";
    } 

    elseif(empty($_POST['name']) || empty($_POST['password'])){
        ?><?php include("includes/loginform.php")?>
        <?php
    //Si un des champs est vide
        echo "<span>Un des champs est vide!</span><br>";
    } 

    else
    {
      $name= $_POST['name'];
  $_SESSION['name'] = $name;

    $pass= $_POST['password'];
    //on fait maintenant la requête dans la base de données pour rechercher si ces données existent et correspondent:
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE name = :name');
    $req->bindValue('name', $name);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    
    
    
    if ($result) {
        $passwordHash = $result['password'];
        if (password_verify($pass, $passwordHash)) {

    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($result['type'] == 'admin') {
      header('location: admin/home.php');      
    }else{
      header('location: dashboard.php');
    }
    
        } else {
            ?><?php include("includes/loginform.php")?>
        <?php
            echo "<span>Le nom ou le mot de passe est incorrect, le compte n'a pas été trouvé!</span>";
        }
    } 
}


}
else {
        	?>
<?php include("includes/loginform.php")?>
        	
        <?php    
        }

    ?>
      


     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
