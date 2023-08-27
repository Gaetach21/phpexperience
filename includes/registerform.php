    <div class="container">
      <h1>Bienvenue sur la page d'inscription</h1>
      
      <form method="post" action="">
        <label for="name">Nom</label><br>
        <input type="text" name="name" id="name" placeholder="Entrez votre nom" value="<?php echo $name; ?>"> <br>     

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Entrez votre adresse email" value="<?php echo $email; ?>"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" value="<?php echo $password; ?>"><br>

        <label for="confpwd">Confirmation</label><br>
        <input type="password" name="confpwd" id="confpwd" placeholder="Confirmez votre mot de passe" value="<?php echo $password; ?>"><br><br>

        <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
        <input type="submit" value="S'inscrire">
    </form>
    <p>Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
    </div>