 <?php
   // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }

    // Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}
//récupérer username à partie de la session
   $username = $_SESSION["username"];
   //requête SQl pour récupérer tous les informations de l'utilisateur
   $requete = $bdd->query("SELECT * FROM users WHERE username='".$username."'");
   $row = $requete->fetch();
   //le résultat de la requête sera stocké dans le tableau $row[]
   $id = $row['id'];
   $username = $row['username'];
   $email = $row['email'];
 
    ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - Page de profil</title>
  </head>

  <body>
  	<!-- En-tete-->
  	<?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    <style type="text/css">
    	.section
{
	text-align: justify; 
    color: #181818;
    padding: 10px;
    font-size: 1.2em;
    font-family: sans-serif; 

}
      .section p ul li a
{
  color: #fff;
  text-decoration: none;
  padding: 10px;
  font-weight: 700;
  font-size: 20px;
}
	.section
	{background-color: #f1f1f1;}

    </style>

<div id="main">

<div class="section">
    <h1>Bienvenue sur votre page de profil</h1>
    <p>les informations sur votre compte utilisateur sont les suivantes : </p>
    <p>Identifiant : <strong><?php echo $id."<br>"; ?></strong></p>
    <p>Nom d'utilisateur : <strong><?php echo $username."<br>"; ?></strong></p>
    <p>Adresse email : <strong><?php echo $email."<br>"; ?></strong></p>
    <p>Pour vous déconnecter, il suffit de cliquer sur le lien ci-dessous : </p>
    <a href="logout.php">Déconnexion</a>
    </div>
    

      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
      

