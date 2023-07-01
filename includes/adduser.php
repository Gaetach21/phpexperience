<div class="container">
      <h1>Création d'un utilisateur</h1>
      
      <form method="post" action="">
        <label for="username">username</label><br>
        <input type="text" name="username" id="username" placeholder="Entrez votre username"> <br>     

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Entrez votre adresse email"><br>

        <div><br>
      <select class="box-input" name="type" id="type" style="width: 60%; margin: 10px 0px; height: 30px;">
        <option value="" disabled selected>Type</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
  </div>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe"><br>

        <input type="submit" name="submit" value="Créer">
    </form>
    <p>Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
    </div>