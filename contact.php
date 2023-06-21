<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Nous Contacter!</title>
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


            	<div class="container">
      <h1>Bienvenue sur la page de contact</h1>
      <p>Veuillez remplir le formulaire ci-dessous et nous vous répondrons 
      dans les plus brefs délais.</p>
      <form method="post" action="validation.php">
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"  maxlength='20' required="required">
        <span id="prenom_invalide"></span><br>

        <label for="mail">Email</label><br>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre email" required="required">
        <span id="email_invalide"></span><br>

        <label for="tel">Téléphone</label><br>
        <input type="tel" name="tel" id="tel" placeholder="Entrez votre numéro de téléphone" required="required">
        <span id="tel_invalide"></span><br>

        <label for="msg">Message</label><br>
        <textarea name="msg" id="msg" placeholder="Entrez votre message" required="required"></textarea>
        <span id="msg_invalide"></span><br>

        <input type="submit" value="Valider" name ="valider" id="bouton_envoi">
        <input type="reset" value="Effacer">
    </form>
    </div>

    
      </div>
<script type="text/javascript" src="validation.js"></script>
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>