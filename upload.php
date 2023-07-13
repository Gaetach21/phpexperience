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
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - upload de fichiers</title>
    <style type="text/css">
      span {color: red; font-size: 1.2em;}
    </style>
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

              <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>
            <div class="container">
      <h1>Formulaire d'upload de fichiers</h1>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
         <label for="photo">Sélectionner un fichier à envoyer :</label><br>
        <input type="file" name="photo" id="photo"> 
        </p>

        <p>
         <input type="submit" name="Envoi" value="Envoyer le fichier"> 
        </p>
        
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .gif et .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form>
    </div>

    




     <?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['Envoi'])){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("<span>Veuillez sélectionner un format de fichier valide!</span>");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("<span>La taille du fichier est supérieure à la limite autorisée!</span>");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("uploads/" . $_FILES["photo"]["name"])){
                echo '<span>Le fichier '.$_FILES["photo"]["name"] . ' existe déjà!</span>';
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                echo "<h1>Votre fichier a été envoyé avec succès.</h1>";
            } 
        } else{
            echo "<span>Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer!</span>"; 
        }
    } else{
        echo "<span>Erreur: " . $_FILES["photo"]["error"]."</span>";
    }
}
?>


    
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>



