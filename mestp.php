<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
    <title>phpexperience - Travaux Pratiques!</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("includes/logo.php")?>
  	<!-- En-tete-->
  	<?php include("includes/header.php")?>
  

    


    <section>

      <!-- aside-->
    <?php include("includes/aside.php")?>
    <style type="text/css">
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
    </style>

<div id="main">


    
 <div id="first-section" class="section">
   <h1>TP : un minichat</h1>
   <h2>Prérequis</h2>
   <ul>
     <li>transmettre des variables via un formulaire;</li>
     <li>lire dans une table;</li>
     <li>écrire dans une table;</li>
     <li>utiliser PDO et les requêtes préparées.</li>
   </ul>
   <h2>Objectifs</h2>
   <p>On souhaite avoir sur la même page deux zones de texte : une pour écrire votre pseudo, 
    une autre pour écrire votre petit message. Ensuite un bouton <strong>Envoyer</strong> permettra 
  d'envoyer les données à MySQL pour qu'il les enregistre dans une table.</p>
  <p>En dessous, le script devra afficher les 10 derniers messages qui ont été enregistrés en allant 
  du plus récent au plus ancien.</p>
  <h2>Structure de la table MySQL</h2>
  <p>On va créer une table <strong>minichat</strong> dans notre base de données. Cette table contiendra 
  les champs suivants : </p>
  <ul>
    <li><strong>ID</strong> de type INT en auto-increment et clé primaire;</li>
    <li><strong>pseudo</strong> de type varchar, taille du champ 255;</li>
    <li><strong>message</strong> de type varchar, taille du champ 255;</li>
  </ul>
  <h2>Structure des pages PHP</h2>
  <p>Nous allons utiliser 2 fichiers :</p>
  <ul>
    <li><strong>minichat.php</strong> contient le formulaire permettant d'ajouter un message et liste 
    les 10 derniers messages;</li>
    <li><strong>minichat_post.php</strong> insère le message reçu avec $_POST dans la base de données 
      puis redirige vers <strong>minichat.php</strong>;</li>
  </ul>
 </div>

 <div id="second-section" class="section">
  <h1>TP : un livre d'or</h1>
  <p>Nous allons écrire un livre d'or sur phpexperience. Ainsi, les visiteurs pourront laisser une trace 
  de leur passage.</p>
  <h2>Prérequis</h2>
  <ul>
     <li>lire dans une table;</li>
     <li>écrire dans une table;</li>
     <li>compter le nombre d'entrées dans une table;</li>
     <li>utiliser les formulaires.</li>
  </ul>
  <h2>Structure de la table MySQL</h2>
  <p>On va créer une table <strong>livreor</strong> dans notre base de données. Cette table contiendra 
  les champs suivants : </p>
  <ul>
    <li><strong>ID</strong> de type INT en auto-increment et clé primaire;</li>
    <li><strong>pseudo</strong> de type varchar, taille du champ 255;</li>
    <li><strong>message</strong> de type text;</li>
  </ul>
  <h2>Structure du livre d'or</h2>
  <p>On va placer en haut de la page le formulaire permettant d'entrer le message des visiteurs et 
  en dessous la liste des messages.</p>
  <p>On va créer automatiquement des pages pour qu'il y ait par exemple 20 messages par page.</p>
  <p>Pour créer automatiquement des pages en PHP : </p>
  <ul>
    <li>On récupère le nombre total des messages;</li>
    <li>On calcule le nombre de pages qu'il y aura.</li>
  </ul>
 </div>

 <div id="third-section" class="section">
    <h1>TP : un blog avec des commentaires</h1>
  <p>Nous allons concevoir un blog pour afficher des billets et des commentaires.</p>
  <h2>Prérequis</h2>
  <ul>
     <li>lire dans une table;</li>
     <li>utiliser PDO et les requêtes préparées;</li>
     <li>utiliser les fonctions SQL;</li>
     <li>manipuler les dates en SQL.</li>
  </ul>
  <h2>Objectifs</h2>
  <p>Nous allons réaliser l'affichage de base d'un blog et des commentaires associés aux billets 
  et l'améliorer pour créer une interface de gestion des billets et d'ajout des commentaires.</p>
  <h2>Structure des tables MySQL</h2>
  <p>Nous allons travailler avec 2 tables.</p> 
    <ul>
      <li><strong>billets</strong> : liste les derniers billets du blog;</li>
      <li><strong>commentaires</strong> : liste les commentaires du blog pour chaque billet.</li>
    </ul> 
    <p>Tous les commentaires quelque soit le billet seront stockés dans la même table. On pourra 
      faire le tri à l'aide d'un champ <strong>id_billet</strong> qui indiquera pour chaque commentaire 
    le numéro du billet associé.</p>
  <p>La table <strong>billets</strong> contiendra les champs suivants : </p>
  <ul>
    <li><strong>id</strong> identifiant du billet, de type INT en auto-increment et clé primaire;</li>
    <li><strong>titre</strong> titre du billet, de type VARCHAR taille 255;</li>
    <li><strong>contenu</strong> contenu du billet, de type text;</li>
    <li><strong>date_creation</strong> date et heure de création du billet, de type datetime;</li>
  </ul>
  <p>La table <strong>commentaires</strong> contiendra les champs suivants : </p>
  <ul>
    <li><strong>id</strong> identifiant du commentaire, de type INT en auto-increment et clé primaire;</li>
    <li><strong>id_billet</strong> identifiant du billet auquel correspond ce commentaire, de type INT;</li>
    <li><strong>auteur</strong> auteur du commentaire, de type VARCHAR taille 255;</li>
    <li><strong>commentaire</strong> contenu du commentaire, de type text;</li>
    <li><strong>date_commentaire</strong> date et heure auxquelles le commentaire a été posté, de type datetime;</li>
  </ul>
  <h2>Structure des pages PHP</h2>
  <p>Le visiteur arrive sur l'index où sont affichés les derniers billets. S'il choisit d'afficher les commentaires 
    de l'un d'eux,  il charge la page <strong>commentaires.php</strong> qui affichera le billet selectionné ainsi que 
    tous ses commentaires. Bien entendu, il faudra envoyer un paramètre à la page <strong>commentaires.php</strong> 
  pour qu'elle sache quoi afficher. Il sera possible de revenir à la liste des billets depuis les commentaires à l'aide 
d'un lien de retour.</p>
  <p>les textes et les titres sont protégés par <strong>htmlspecialchars()</strong>. <strong>nlbr()</strong> permet de 
  conserver les retours à la ligne dans les formulaires.</p>
  <p>La page <strong>commentaires.php</strong> affiche un billet et ses commentaires. Nous avons besoin de faire 2 requêtes 
  SQL :</p>
  <ul>
    <li>une requête pour récupérer le contenu d'un billet;</li>
    <li>une requête pour récupérer les commentaires associés au billet.</li>
  </ul>
  <p>La requête qui  récupère le billet est une <strong>requête préparée</strong> car elle dépend d'un paramètre : 
    l'id du billet (fourni par <strong>$_GET['billet']</strong> qu'on a reçu dans l'URL). Comme on récupère un seul 
  billet, il est inutile de faire une boucle.</p>
  <p>On ne se connecte à la base de données qu'une fois par page. On récupère avec cette requête tous les commentaires liés 
  au billet correspondant à l'id reçu dans l'URL. Les commentaires sont triés par date croissante.</p>
 </div>

  <div id="fourth-section" class="section">
   <h1>TP : Page protégée par mot de passe</h1>
  <p>Nous allons protéger le contenu d'une page par mot de passe .</p>
  <h2>Prérequis</h2>
  <ul>
     <li>afficher du texte avec echo ;</li>
     <li>utiliser les variables (affectation, affichage…) ;</li>
     <li>transmettre des variables via une zone de texte d'un formulaire ;</li>
     <li>utiliser des conditions simples ( if  , else  ).</li>
  </ul>
  <h2>Objectifs</h2>
  <p>Nous allons mettre en ligne une page web pour donner des informations confidentielles à certaines 
  personnes. Cependant, pour limiter l'accès à cette page, il faudra connaître un mot de passe.</p>
  <h2>Structure des pages PHP</h2>
  <p>Nous allons créer deux pages web :</p>
  <ul>
    <li><strong>formulaire.php</strong> : contient un simple formulaire comme vous savez les faire ;</li>
    <li><strong>secret.php</strong> : contient les « codes secrets » mais ne les affiche que si on lui donne le mot de passe.</li>
  </ul>
 </div>
      </div>

    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>