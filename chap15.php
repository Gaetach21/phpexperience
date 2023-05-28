<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les opérations sur les fichiers en PHP</title>
    <style type="text/css">
        table, th, td {border: 1px solid grey; 
      padding: 5px;
      border-collapse: collapse;}
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
          <h1>Les opérations sur les fichiers en PHP</h1>
          <h3>Quelques fonctions sur les fichiers</h3>
          Le tableau suivant liste les fonctions utilisées sur les fichiers en PHP : <br>
          <table>
<thead>
<tr>
<th>Fonction</th>
<th>Rôle</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>fopen()</strong></td>
<td>permet d'ouvrir un fichier</td>
</tr>
<tr>
<td><strong>fclose()</strong></td>
<td>permet de fermer un fichier</td>
</tr>
<tr>
<td><strong>fread()</strong></td>
<td>permet de lire un fichier</td>
</tr>
<tr>
<td><strong>fgets()</strong></td>
<td>permet de lire un fichier ligne par ligne</td>
</tr>
<tr>
<td><strong>fgetc()</strong></td>
<td>permet de lire un fichier caractère par caractère</td>
</tr>
<tr>
<td><strong>fwrite()</strong></td>
<td>permet d'écrire dans un fichier</td>
</tr>
<tr>
<td><strong>fseek()</strong></td>
<td>permet de changer la position du curseur dans un fichier</td>
</tr>
</tbody>
</table><br>
<strong>NB</strong>:pour lire un fichier entièrement avec la fonction 
<strong>fgets()</strong>, on utilise une boucle.<br><br>

<h3>Les modes d'ouverture d'un fichier</h3>
          <table>
<thead>
<tr>
<th>Mode</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>r</strong></td>
<td>ouvre un fichier en lecture seule. Pas de modificatiion possible.</td>
</tr>
<tr>
<td><strong>r+</strong></td>
<td>ouvre un fichier en lecture et en écriture.</td>
</tr>
<tr>
<td><strong>a</strong></td>
<td>ouvre un fichier en écriture seule. Si le fichier n'existe pas, en crée un nouveau.</td>
</tr>
<tr>
<td><strong>a+</strong></td>
<td>ouvre un fichier en lecture et en écriture. Si le fichier n'existe pas, en crée un nouveau.</td>
</tr>
<tr>
<td><strong>w</strong></td>
<td>ouvre un fichier en écriture seule. Si le fichier existe déjà, supprime le contenu préexistant.Si le fichier n'existe pas, en crée un nouveau.</td>
</tr>
<tr>
<td><strong>w+</strong></td>
<td>ouvre un fichier en lecture et en écriture. Si le fichier existe déjà, supprime le contenu préexistant. Si le fichier n'existe pas, en crée un nouveau.</td>
</tr>
<tr>
<td><strong>x</strong></td>
<td>crée un nouveau fichier ouvert en écriture seulement. Retourne la valeur FALSE si le fichier existe déjà.</td>
</tr>
<tr>
<td><strong>x+</strong></td>
<td>crée un nouveau fichier ouvert en lecture et en écriture. Retourne la valeur FALSE si le fichier existe déjà.</td>
</tr>
</tbody>
</table><br><br>

    <?php
    echo "<h3>Lecture d'un fichier</h3>";

    $definition = fopen("gaetan-essai.txt", "r+");
    $affichagedef = fread($definition, 1000);
    echo $affichagedef."<br><br>";
    fclose($definition);
    
    echo "<h3>Lecture d'un fichier ligne par ligne</h3>";
    $definition = fopen("gaetan-essai.txt", "r+");
    $affichagedef = fgets($definition, 1000);
    echo $affichagedef."<br><br>";
    fclose($definition);

    echo "<h3>Utilisation de la boucle while</h3>";
    $definition = fopen("gaetan-essai.txt", "r+");
    while (!feof($definition)) {
      echo fgets($definition);
    }
    echo "<br><br>";
    fclose($definition);

    echo "<h3>Position du curseur dans un fichier</h3>";
    ?>
    <table>
<thead>
<tr>
<th>Mode/fonction</th>
<th>Position du curseur</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>r/r+</strong></td>
<td>pointe au début fichier</td>
</tr>
<tr>
<td><strong>a/a+</strong></td>
<td>pointe à la fin du fichier</td>
</tr>
<tr>
<td><strong>w/w+</strong></td>
<td>pointe au début fichier</td>
</tr>
<tr>
<td><strong>fgets()</strong></td>
<td>pointe à la fin de la ligne lue</td>
</tr>
<tr>
<td><strong>fgetc()</strong></td>
<td>le curseur se place au niveau du caractère suivant</td>
</tr>
</tbody>
</table><br>
    <?php
    $definition = fopen("gaetan-essai.txt", "r+");
    fwrite($definition, "Gaetan est mon prénom");
    fclose($definition);

    $definition = fopen("gaetan-essai.txt", "a+");
    fwrite($definition, "Gaetan est mon prénom");
    fclose($definition);


    $definition = fopen("gaetan-essai.txt", "r+");
    fseek($definition, 40);
    fwrite($definition, "GaetanGarage est le meilleur choix pour votre véhicule");
    fclose($definition);

    ?>


      <div style="margin: 20px 0px;">
    <a href="chap14.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les instructions include et require</a>
    <a href=""  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Variables superglobales en PHP</a>
  </div>
  </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>