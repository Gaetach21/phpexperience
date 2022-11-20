    <?php
    // Si le login et le mot de passe sont correctes
    if ($_POST['login'] ==  "Gaetan" AND $_POST['password'] ==  "123gaetach2022") 
    {
    // On affiche la page d'accueil
      header('Location: index.php');
    ?>


<?php
}


     // Sinon, on affiche un message d'erreur
    else
    {
      // On affiche le formulaire d'authentification
     ?>
      <!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Echec de l'authentification</title>
  </head>


  <body> 
  <div id="main">
    <div class="container-fluid p-5 bg-primary text-white text-center">
      <h1>phpexperience</h1>
      <p>Toute la force du PHP!</p> 
    </div>

    <h1 class="text-danger text-bold p-2">Les coordonnées que vous avez entrées ne sont pas correctes!</h1>
    <p class="p-2">Veuillez entrer les coordonnées de l'administrateur pour obtenir un accès total à ce site :</p>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
              <form action="authentication_page_success.php" method="POST" class="form-group">
        <h1><strong>Formulaire d'authentification</strong></h1>
<p>
<label for="login">Login</label> : 
<input type="text" name="login" id="login" class="form-control" placeholder="Entrez votre login" required/><br/>
<label for="password">Password</label> : 
<input type="password" name="password" id="password" class="form-control" placeholder="Entrez votre mot de passe" required/><br/>
<input type="submit" value="Envoyer" name="envoyer" class="form-control bg-primary mx-2" />
<input type="reset" value="Réinitialiser" name="reset" class="form-control bg-primary mx-2" />
</p>

</form>
</div>
</div>
</div>
        <p class="p-2">Cette page est réservée à l'administrateur de ce site. Si vous n'etes pas l'administrateur de ce site, inutile d'insister vous ne trouverez jamais les bons coordonnées ! ;-)</p>
          </div> 
  </body>
</html>  

 
   
<?php 
    }
    ?>
