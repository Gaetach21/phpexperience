<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Validation du formulaire de contact</title>
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
              <div class="container">
      <h1>Notification du message enregistré</h1>
       <p>
        <?php
        echo 'Merci '.$_POST['prenom'].' pour ce message!';
        ?>
        </p>
      <p>Vous avez rempli les informations suivantes : <br>
        Prénom : <?php echo $_POST['prenom']; ?> <br>
        Email : <?php echo $_POST['mail']; ?> <br>
        Téléphone : <?php echo $_POST['tel']; ?> <br>
        Message : <?php echo $_POST['msg']; ?> <br>
      </p>
      <p>Nous vous répondrons dans les plus brefs délais</p>
      <h3>phpexperience</h3>
    </div>
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>