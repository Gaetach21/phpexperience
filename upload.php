<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["name"])){
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
    <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="jquery-3.6.0.js"></script>
    <title>phpexperience - upload de fichiers</title>
    <style type="text/css">
      span {color: red; font-size: 1.2em;}
    </style>
  </head>

  <body>
    <!-- Logo-->
    <section class="banniere" id="banniere">
<div class="contenu">
<h1>phpexperience</h1>
<a href="dashboard.php" class="btn" style="background-color: rgb(128,128,128);">Tableau de bord</a>

<!-- <h1>J'apprends le PHP</h1>
<p>Aujourd'hui nous sommes le 
<?php
// echo date('d/m/Y h:i:s');
?>
</p> -->

</div>
</section>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <style type="text/css">
      .disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
      }
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


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    
<div id="main">
  <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['name']; ?>!</h1>
    <?php
    if ($_SESSION['name'] == 'gaetan') {
      echo "<p>C'est votre espace admin.</p>";
    }
    else
    {
      echo "<p>C'est votre espace utilisateur.</p>";
    }
    ?>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>

            <div class="container">
      <h1>Formulaire d'upload de fichiers</h1>
      <p>Utilisez ce formulaire pour nous soumettre vos fichiers dans les formats autorisés.</p>
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
         <label for="uploadfile">Sélectionner un fichier à envoyer :</label><br>
        <input type="file" name="uploadfile" id="uploadfile"> 
        </p>

        <p>
         <input type="submit" name="Envoi" value="Envoyer le fichier"> 
        </p>
        
        <p><strong>Note:</strong> Seuls les formats .docx, .txt, .zip, .pdf, .mp4, .jpg, .jpeg, .gif et .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    </form>
    </div>

    




     <?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['Envoi'])){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["uploadfile"]) && $_FILES["uploadfile"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document", "pdf" => "application/pdf", "zip" => "application/zip", "txt" => "text/plain", "mp4" => "video/mp4");
        $filename = $_FILES["uploadfile"]["name"];
        $filetype = $_FILES["uploadfile"]["type"];
        $filesize = $_FILES["uploadfile"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("<span>Veuillez sélectionner un format de fichier valide!</span>");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("<span>La taille du fichier est supérieure à la limite autorisée!</span>");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("uploads/" . $_FILES["uploadfile"]["name"])){
                echo '<span>Le fichier '.$_FILES["uploadfile"]["name"] . ' existe déjà!</span>';
            } else{
                move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "uploads/" . $_FILES["uploadfile"]["name"]);
                echo "<h1>Votre fichier a été envoyé avec succès.</h1>";
            } 
        } else{
            echo "<span>Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer!</span>"; 
        }
    } else{
        echo "<span>Erreur: Veuillez sélectionner un fichier!</span>";
    }
}
?>


    
      </div>
      
      <?php include("includes/realisations.php")?>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>



