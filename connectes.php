<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
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
    <title>phpexperience | un minichat avec compteur de visiteurs</title>
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

                <div class="success">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace utilisateur.</p>
    <a href="profil.php">Afficher mon profil</a>
    <a href="logout.php">Déconnexion</a>
  </div>


      <div class="container mt-5">
        <div style="width: 400px; float: left;">
      <h1>Un compteur de visiteurs</h1>
      <?php
      try
      {
      $bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $temps_session = 300; // 300 secondes
      $temps_actuel = date("U");
      $user_ip = $_SERVER['REMOTE_ADDR'];

      $req_ip_exist = $bdd->prepare("SELECT * FROM visiteurs WHERE user_ip=?");
      $req_ip_exist -> execute(array($user_ip));
      $ip_existe = $req_ip_exist -> rowCount();

      if ($ip_existe == 0) {
        $add_ip = $bdd->prepare("INSERT INTO visiteurs(user_ip, time_online) VALUES(?,?)");
        $add_ip -> execute(array($user_ip,$temps_actuel));
      }
      else
      {
        $update_ip = $bdd->prepare("UPDATE visiteurs SET time_online = ? WHERE user_ip = ?");
        $update_ip -> execute(array($user_ip,$temps_actuel));
      }
        $session_delete_time = $temps_actuel - $temps_session;
        $del_ip = $bdd->prepare("DELETE FROM visiteurs WHERE time_online < ?");
        $del_ip -> execute(array($session_delete_time));


      $show_user_nbr = $bdd->query("SELECT * FROM visiteurs");
      $user_nbr = $show_user_nbr -> rowCount();
      echo '<p>Il y a actuellement '.$user_nbr;?> visiteur<?php if ($user_nbr != 1) {
        echo "s";
      }?> en ligne sur mon minichat!</p><?php
      }

      catch(PDOException $e)
      {
      echo 'Echec de la connexion : ' .$e->getMessage();
      }

      ?>
      <h1>Un minichat</h1>
      <form action="minichat_post.php" method="post">
<p>
<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" class="form-control" /><br/>
<label for="message">Message</label> : <input type="text" name="message" id="message" class="form-control"/><br/>
<input type="submit" value="Envoyer" class="form-control bg-primary" />
</p>
</form>
</div>

<div style="width: 500px; margin-left: 450px;">
<h1>Les derniers messages</h1>

<?php

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 6');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while($donnees = $reponse->fetch())
{
echo'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
    </div> 
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>