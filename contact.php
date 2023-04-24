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
            <div id="main">
            	<div class="container">
      <h1>Bienvenue sur la page de contact</h1>
      <p>Veuillez remplir le formulaire ci-dessous et nous vous répondrons 
      dans les plus brefs délais.</p>
      <form method="post" action="traitement.php">
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

        <input type="submit" value="Valider" id="bouton_envoi">
        <input type="reset" value="Effacer">
    </form>
    </div>

    <script type="text/javascript">
    	var validation = document.getElementById('bouton_envoi');
    	var prenom = document.getElementById('prenom');
    	var prenom_m = document.getElementById('prenom_invalide');
    	var prenom_v =/^[a-zA-ZéèîïÉÈÏÎ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÏÎ][a-zéèêàçîï]+)?/;
    	var email = document.getElementById('mail');
    	var email_m = document.getElementById('email_invalide');
    	var email_v =/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    	validation.addEventListener('click', f_valid);

    	function f_valid(e) {
    		if (prenom.validity.valueMissing) {
    			e.preventDefault();
    			prenom_m.textContent='Entrez votre prénom';
    			prenom_m.style.color='red';
    		}else if(prenom_v.test(prenom.value) == false){
    			event.preventDefault();
    			prenom_m.textContent='Prénom incorrecte';
    			prenom_m.style.color='orange';
    		}else if(email.validity.valueMissing) {
    			e.preventDefault();
    			email_m.textContent='Entrez votre email';
    			email_m.style.color='red';
    		}else if(email_v.test(email.value) == false){
    			event.preventDefault();
    			email_m.textContent='Email incorrecte';
    			email_m.style.color='orange';
    		}else {

    		}
    	}
    </script>
      </div>

      <!-- aside-->
    <?php include("includes/aside.php")?>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>