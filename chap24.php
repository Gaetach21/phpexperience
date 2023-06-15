<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les jointures SQL</title>
    <style type="text/css">
      #code{background-color: gray; color: white; 
        border-radius:10px; padding: 10px;font-size: 16px;
        font-family: sans-serif; margin: 15px 10px;}
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
    <h1>Les jointures SQL</h1>
    <h3>Création des tables et enregistrements</h3>
    <p>
    On va créer une nouvelle table nommé <strong>commentaires</strong> 
    dans la base de données <strong>test2</strong>. Cette table aura 5 champs (
    id integer auto-increment primary, prenom varchar(50), nom varchar(50), mail 
    varchar(70), commentaire text(500)). On effectue 10 enregistrements dans cette 
    table.<br>
    On va créer une nouvelle table nommé <strong>inscrits</strong> 
    dans la base de données <strong>test2</strong>. Cette table aura 4 champs (
    id integer auto-increment primary, prenom varchar(50), nom varchar(50), mail 
    varchar(70)). On effectue 7 enregistrements dans cette table.<br>
    On supprime les champs <strong>nom</strong> et <strong>mail</strong> de la table 
    <strong>commentaires</strong> et on modifie la colonne <strong>prenom</strong> 
    en <strong>id_inscrit</strong> de type INT. On modifie la colonne id_inscrit et à 
    chaque fois, on met l'id de la personne qui a fait le commentaire.<br>
    Il existe 4 types de jointure : inner join, full outer join, right join et left 
    join.
    </p>
    <h3>Jointure interne</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_int = "SELECT inscrits.prenom, commentaires.commentaire 
       FROM inscrits
       INNER JOIN commentaires ON inscrits.id = commentaires.id_inscrit";

       $requete = $Connexion->prepare($jointure_int);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo $resultat['prenom'].' a écrit : '.$resultat['commentaire'];
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_int = "SELECT inscrits.prenom, commentaires.commentaire 
       FROM inscrits
       INNER JOIN commentaires ON inscrits.id = commentaires.id_inscrit";

       $requete = $Connexion->prepare($jointure_int);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo '<strong>'.$resultat['prenom'].'</strong> a écrit : '.$resultat['commentaire'].'.<br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <h3>Jointure interne - utilisation des alias</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $jointure_int = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       INNER JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_int);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo $resultat['prenom'].' a écrit : '.$resultat['commentaire'];
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_int = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       INNER JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_int);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo '<strong>'.$resultat['prenom'].'</strong> a écrit : '.$resultat['commentaire'].'.<br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>
    <p>Les jointures externes sont : le left join, le right join et le full outer join.</p>
    <h3>Jointures externes - LEFT JOIN</h3>
    <p>Dans la table <strong>commentaires</strong>, on insère une nouvelle entrée avec 
    l'id_inscrit égal à 0.</p>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       LEFT JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo $resultat['prenom'].' a écrit : '.$resultat['commentaire'];
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       LEFT JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo '<strong>'.$resultat['prenom'].'</strong> a écrit : '.$resultat['commentaire'].'.<br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

    <h3>Jointures externes - RIGHT JOIN</h3>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       RIGHT JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo $resultat['prenom'].' a écrit : '.$resultat['commentaire'];
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       RIGHT JOIN commentaires AS com
       ON ins.id = com.id_inscrit";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo '<strong>'.$resultat['prenom'].'</strong> a écrit : '.$resultat['commentaire'].'.<br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

    <h3>Jointures externes - FULL OUTER JOIN</h3>
    <p>A la place de FULL OUTER JOIN, on utilise plutot <strong>UNION</strong>. 
    	<strong>UNION</strong> renvoie une occurence d'une même valeur tandis que 
    	<strong>UNION ALL</strong> renvoie plusieurs occurences d'une même valeur.</p>
    <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT prenom FROM inscrits 
       UNION 
       SELECT commentaire FROM commentaires";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       $resultat = $requete->fetchAll();
       print_r($resultat);

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT prenom FROM inscrits 
       UNION 
       SELECT commentaire FROM commentaires";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       echo "<pre>";
       $resultat = $requete->fetchAll();
       print_r($resultat);
       echo "</pre>";

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "SELECT prenom FROM inscrits 
       UNION ALL
       SELECT commentaire FROM commentaires";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       echo "<pre>";
       $resultat = $requete->fetchAll();
       print_r($resultat);
       echo "</pre>";

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

        <div id="code">
      <pre>
      try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "
       SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       LEFT JOIN commentaires AS com
       ON ins.id = com.id_inscrit

       UNION ALL

       SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       RIGHT JOIN commentaires AS com
       ON ins.id = com.id_inscrit
       ";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo $resultat['prenom'].' a écrit : '.$resultat['commentaire'];
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }
    </pre>
    </div>
    <?php
        
      /*try
       {
       $Connexion = new PDO('mysql:host=localhost; dbname=test2; charset=utf8', 'root', '123abc456');
       $Connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $jointure_ext = "
       SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       LEFT JOIN commentaires AS com
       ON ins.id = com.id_inscrit

       UNION ALL

       SELECT ins.prenom, com.commentaire 
       FROM inscrits AS ins
       RIGHT JOIN commentaires AS com
       ON ins.id = com.id_inscrit
       ";

       $requete = $Connexion->prepare($jointure_ext);
       $requete ->execute();
       while ($resultat = $requete->fetch()) {
       	echo '<strong>'.$resultat['prenom'].'</strong> a écrit : '.$resultat['commentaire'].'.<br>';
       }

       }

       catch(PDOException $e)
       {
       echo 'Echec : ' .$e->getMessage();
       }*/
        ?>

    <br>

      <div style="margin: 20px 0px;">
    <a href="chap23.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Mise à jour et suppression de données dans une BDD</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les fonctions SQL</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>