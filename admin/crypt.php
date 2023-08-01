<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="../css/form.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="../jquery-3.6.0.js"></script>
    <title>phpexperience | Chiffrement du mot de passe</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("../includes/logo.php")?>
    <!-- En-tete-->
    <?php include("../includes/header.php")?>
  

    


    <section>

      <!-- aside-->
    <?php include("../includes/aside.php")?>
    
            <div id="main">

<div class="container">
<?php
if (isset($_POST['login']) AND isset($_POST['pass']))
{
    $login = $_POST['login'];
    $pass_crypte = password_hash($_POST['pass'], PASSWORD_DEFAULT); // On crypte le mot de passe

    echo '<p>Ligne à copier dans le .htpasswd :<br />' . $login . ':' . $pass_crypte . '</p>';
}

else // On n'a pas encore rempli le formulaire
{
?>
<h1>Formulaire de chiffrement du mot de passe</h1>
<p>Ce formulaire est destiné à chiffrer le mot de passe des administrateurs de <strong>phpexperience</strong>.</p>
 <p>Entrez votre login et votre mot de passe pour le crypter.</p>

<form method="post" style="margin-bottom: 30px;">
    <label for="login">Login</label><br>
    <input type="text" name="login" id="login" placeholder="Entrez votre login" required="required"><br>
        
        <label for="pass">Mot de passe</label><br>
        <input type="password" name="pass" id="pass" placeholder="Entrez votre mot de passe" required="required"><br>
        
        <input type="submit" value="Crypter !"><br><br>
    
</form>

<?php
}
?>

 </div>     


     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("../includes/footer.php")?>
   
   
  </body>
</html>
