<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Gestion des erreurs en PHP</title>
  </head>

  <body>
    <!-- Logo-->
    <?php include("includes/logo.php")?>
    <!-- En-tete-->
    <?php include("includes/header.php")?>
  

    


    <section>
        
      <!-- aside-->
    <?php include("includes/aside.php")?>


            <div id="main">
          <h1>Gestion des erreurs en PHP</h1>
          <h3>La fonction die()</h3>
          La fonction <strong>die()</strong> permet d'arrêter l'exécution du script et de 
          renvoyer un message d'erreur personnalisé.<br>
          La fonction <strong>file_exists()</strong> vérifie si un fichier ou un dossier 
          existe et renvoie un booléen(true ou false).<br><br>

          <h3>Exemple d'utilisation : </h3> 
<?php
if (!file_exists("read.txt")) {
	echo "Fichier non trouvé";
}else{
	$fichier = fopen("read.txt", "r");
}
echo "<br><br>";
?>
			<h3>La gestion des exceptions</h3>
			On peut gérer les erreurs en utilisant les exceptions. Pour ce faire, on va procéder 
			en 3 temps représentant 3 blocs de code : <br>
			<ul>
				<li><strong>try</strong>vérifie si une erreur est apparu et donc si une 
				exception doit être déclenchée.</li> 
				<li><strong>throw</strong> lance l'exception si l'erreur est apparu.</li>
				<li><strong>catch</strong> attrape l'exception si jamais il y'en a une.</li>
			</ul>

			<h3>Exemple d'utilisation :</h3>
<?php
function Division($x,$y)
{
	if ($y==0) {
		throw new Exception("Division par zero impossible");
		
	}
	return $x/$y;
}
try{
	echo Division(2,4).'<br>';
	echo Division(2,0).'<br>';
	echo Division(4,2).'<br>';
}
catch(Exception $e){
	echo 'Message d\'erreur : '.$e->getMessage();
}
?>
              <br><br>
            
      <div style="margin: 20px 0px;">
    <a href="chap17.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les bases de la POO en PHP</a>
    <a href="chap19.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Découverte de MySQL</a>
  </div>
  </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>