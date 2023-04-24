<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Validation du formulaire de contact</title>
  </head>

  <body>
  	<!-- En-tete-->
  	<?php include("header.php")?>
  

    <!-- Logo-->
    <?php include("logo.php")?>


    <section>
            <div id="main">
      <h1>
        <?php
        echo 'Merci '.$_POST['prenom'].' pour ce message!';
        ?>
        </h1>
      <p>Vous avez rempli les informations suivantes : <br>
        Prénom : <?php echo $_POST['prenom']; ?> <br>
        Email : <?php echo $_POST['mail']; ?> <br>
        Téléphone : <?php echo $_POST['tel']; ?> <br>
        Message : <?php echo $_POST['msg']; ?> <br>
      </p>
      <p>Nous vous répondrons dans les plus brefs délais</p>
      </div>

      <!-- aside-->
    <?php include("aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("footer.php")?>
   
   
  </body>
</html>