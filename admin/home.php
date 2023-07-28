<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["name"])){
    header("Location: ../login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link href="../css/form.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <script src="../jquery-3.6.0.js"></script>
    <title>phpexperience | Page de l'administrateur</title>
  </head>

  <body>
     <!-- Logo-->
    <section class="banniere" id="banniere">
<div class="contenu">
<h1>phpexperience</h1>
<a href="../dashboard.php" class="btn" style="background-color: rgb(128,128,128);">Tableau de bord</a>

<!-- <h1>J'apprends le PHP</h1>
<p>Aujourd'hui nous sommes le 
<?php
// echo date('d/m/Y h:i:s');
?>
</p> -->

</div>
</section>
    <!-- En-tete-->
    <?php include("../includes/header.php")?>
  

   


    <section>

      <!-- aside-->
    <?php include("../includes/aside.php")?>
    
    <style type="text/css">
    	.disabled{
        cursor: default;
        pointer-events: none;
        text-decoration: none;
      }
    
      .section
{
  text-align: justify; 
    color: #181818;
    padding: 10px;
    font-size: 1.2em;
    font-family: sans-serif; 

}
      .section p ul li a
{
  color: #fff;
  text-decoration: none;
  padding: 10px;
  font-weight: 700;
  font-size: 20px;
}
      #first-section
{
  background-color: #f1f1f1;
}
      #second-section
{
  background-color: rgba(135,249,132,0.6);
}
      #third-section
{
  background-color: rgb(205,182,175);
}
#first-section, #second-section, #third-section
{
  display: inline-block;
  width: 300px;
}
    </style>


            <div id="main">
              <style type="text/css">
                span {color: red; font-size: 1.2em;}
              </style>

    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['name']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">Add user</a> | 
    <a href="#">Update user</a> | 
    <a href="#">Delete user</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>  


    <div id="first-section" class="section">
   <h2>Apprenez à coder avec le langage PHP</h2>
    <!-- <p>Le sigle PHP qui signifie Hypertext Preprocessor est un langage de programmation libre, 
      principalement utilisé pour produire des pages web dynamiques via un serveur web.</p> -->
    <p>Le langage PHP (Hypertext Preprocessor) possède de nombreux atouts : 
      <ul style="list-style-type: circle;">
        <li>La gratuité et la disponibilité du code source;</li>
         <li>La simplicité d'écriture de scripts;</li>
        <li>La possibilité d'inclure le script PHP au sein d'une page HTML</li>
        <li>La simplicité d'interfaçage avec des bases de données (SGBD supportés : MySQL, Oracle, PostgreSQL...)</li>
      </ul></p>
 </div>

 <div id="second-section" class="section">
  <h2>Suivez nos cours sur le PHP et MySQL</h2>
<!--    <p>phpexperience vous permet d'apprendre et de maitriser le langage PHP en commençant à zéro.</p>
  <p>Consultez la liste de notre cours sur ce langage en cliquant sur <a href="cours.php">cours</a> au niveau 
  de la barre des menus.</p> -->
  <p>Les principales articulations de ce cours se déclinent comme suit :
    <ul style="list-style-type: square;">
      <li>Notions de base (variables, fonctions, conditions, boucles, tableaux);</li>
      <li>Transmission de données</li>
      <li>Intéraction avec MySQL (Création d'une base de données, d'une table, consultation, insertion, modification et suppression des données);</li>
    </ul></p>
 </div>

 <div id="third-section" class="section">
  <h2>Profitez de nos réalisations grace au langage PHP</h2>
  <p>Découvrez dans cette section toute la puissance du PHP à travers nos réalisations
        <ul style="list-style-type: disc;">
        <!-- <li><a href="login.php">une page d'authentification</a></li> -->
        <li><a href="../minichat.php">un minichat</a></li>
        <li><a href="../livreor.php">un livre d'or</a></li>
        <li><a href="../index_commentaires.php">un blog avec des commentaires</a></li>
        <li><a href="../upload.php">upload de fichiers</a></li>
        <li><a href="../index_news.php">un système de news</a></li>
        <li><a href="../connectes.php">nombre de visiteurs connectés</a></li>
        <li><a href="../searchbar.php">une barre de recherche</a></li>
        </ul></p>
 </div>
     
      </div>
      
    </section>

   <!-- Pied de page-->
   <?php include("../includes/footer.php")?>
   
   
  </body>
</html>
