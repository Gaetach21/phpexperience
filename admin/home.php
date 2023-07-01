<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="../css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Page de l'administrateur</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("../includes/header.php")?>
  

    <!-- Logo-->
    <?php include("../includes/logo.php")?>


    <section>

      <!-- aside-->
    <?php include("../includes/aside.php")?>
    
            <div id="main">
              <style type="text/css">
                span {color: red; font-size: 1.2em;}
              </style>

    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">Add user</a> | 
    <a href="#">Update user</a> | 
    <a href="#">Delete user</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>  


     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("../includes/footer.php")?>
   
   
  </body>
</html>
