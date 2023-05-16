<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
        <link href="css/form.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience | Rédiger une news</title>
    <style type="text/css">
    	#main h3, form {text-align: center;}
    </style>
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
        	<h3><a href="liste_news.php#main">Retour à la liste des news</a></h3>

<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost; dbname=phpexperience; charset=utf8', 'root', '123abc456');
}
catch(Exception $e)
{
die('Erreur : ' .$e->getMessage());
}

if (isset($_GET['modifier_news'])) 
// Si on demande de modifier une news
{
    // On récupère les infos de la correspondante
    $retour = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM news WHERE id ='.$_GET['modifier_news']);
    $donnees = $retour->fetch();
    // On place le titre et le contenu dans des variables simples
    $titre = $donnees['titre'];
    $contenu = $donnees['contenu'];
    $id_news = $donnees['id'];
    // Cette variable va servir pour se souvenir que c'est une modification
}else
// C'est qu'on rédige une nouvelle news
{
  $titre = '';
  $contenu = '';
  $id_news = 0;  
  // La variable vaut 0, donc on se souviendra que ce n'est pas une modification
}
?>
 <form method="post" action="liste_news.php">
    <p>
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" value="<?php echo $titre; ?>"> 
    </p>

    <p>
        <label for="contenu">Contenu</label><br>
        <textarea name="contenu" cols="50" rows="10">
            <?php echo $contenu; ?>
        </textarea><br>
        <input type="hidden" name="id_news" value="<?php echo $id_news; ?>">
    </p>

    <p>
        <input type="submit" value="Envoyer">
    </p>
    </form>


            </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>
    