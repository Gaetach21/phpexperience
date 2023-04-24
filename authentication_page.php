<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | une page d'authentification</title>
  </head>

  <body>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    <!-- Logo-->
    <?php include("includes/logo.php")?>


    <section>
            <div id="main">
                  <p class="p-2">Veuillez entrer les coordonnées de l'administrateur pour obtenir un accès total à ce site :</p>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
              <form action="authentication_page_success.php" method="POST" class="form-group">
        <h2>Formulaire d'authentification</h2>
<p>
<label for="login">Login</label> : 
<input type="text" name="login" id="login" size="35" placeholder="Entrez votre login" required/><br/>
<label for="password">Password</label> : 
<input type="password" name="password" id="password" size="35" placeholder="Entrez votre mot de passe" required/><br/>
<input type="submit" value="Envoyer" name="envoyer" class="btn" />
<input type="reset" value="Réinitialiser" name="reset" class="btn" />
</p>

</form>
<style type="text/css">
        label{display: inline-block; min-width: 100px;}
    </style>
</div>
</div>
</div>
        <p class="p-2">Cette page est réservée à l'administrateur de ce site. Si vous n'etes pas l'administrateur de ce site, inutile d'insister vous ne trouverez jamais les bons coordonnées ! ;-)</p>

      </div>

      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>

 
