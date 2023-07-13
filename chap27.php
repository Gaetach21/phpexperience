<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les expressions régulières</title>
    <style type="text/css">
      #code{background-color: gray; color: white; 
        border-radius:10px; padding: 10px;font-size: 16px;
        font-family: sans-serif; margin: 15px 10px;}
    </style>
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
    <h1>Les expressions régulières</h1>

    <h3>Syntaxe de déclaration d'une regex</h3>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match(regex,$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Exemple1 :</h4>
    <div id="code">
      <pre>
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple2 :</h4>
    <div id="code">
      <pre>
      $regex1 = "ode";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "ode";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>
     
     <h4>Exemple3 :</h4>
    <div id="code">
      <pre>
      $regex1 = "CODER";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "CODER";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br> 

    <h4>Exemple4 :</h4>
    <div id="code">
      <pre>
      $regex1 = "CoDeR";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/i",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "CoDeR";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1/i",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple5 :</h4>
    <div id="code">
      <pre>
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/^$regex1/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "L'expression \"coder\" n'est pas en début de chaine de caractères!";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/^$regex1/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "L'expression \"coder\" n'est pas en début de chaine de caractères!<br>";
     }
    ?><br> 

    <h4>Exemple6 :</h4>
    <div id="code">
      <pre>
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1$/",$r)) {
         echo "L'expression \"coder\" a bien été trouvée en fin de chaine de caractères!";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/$regex1$/",$r)) {
         echo "L'expression \"coder\" a bien été trouvée en fin de chaine de caractères!<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br> 

    <h4>Exemple7 :</h4>
    <div id="code">
      <pre>
      $regex1 = "coder";
      $r = "J'apprends à coder.";
      if (preg_match("/$regex1$/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "L'expression \"coder\" n'est pas en fin de chaine de caractères mais le point!";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $regex1 = "coder";
      $r = "J'apprends à coder.";
      if (preg_match("/$regex1$/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "L'expression \"coder\" n'est pas en fin de chaine de caractères mais le point!<br>";
     }
    ?><br>

    <h4>Exemple8 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/coder|programmer/",$r)) {
         echo "L'expression \"coder\" a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $r = "J'apprends à coder";
      if (preg_match("/coder|programmer/",$r)) {
         echo "L'expression \"coder\" a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h3>Les classes de caractères</h3>
    <h4>Exemple1 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/[aeiouy]/",$r)) {
         echo "Une des voyelles a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $r = "J'apprends à coder";
      if (preg_match("/[aeiouy]/",$r)) {
         echo "Une des voyelles a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple2 :</h4>
    <div id="code">
      <pre>
      $regex1 = "coder";
      $r = "J'apprends à coder";
      if (preg_match("/[aeiouy]$/",$r)) {
         echo "Une des voyelles a bien été trouvée";
       }else{
          echo "Aucune voyelle trouvée en fin de chaine de caractères mais plutot le point!";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $r = "J'apprends à coder";
      if (preg_match("/[aeiouy]$/",$r)) {
         echo "Une des voyelles a bien été trouvée<br>";
       }else{
          echo "Aucune voyelle trouvée en fin de chaine de caractères mais plutot le point!<br>";
     }
    ?><br>

     <h4>Exemple3 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/^[aeiouy]/",$r)) {
         echo "Une des voyelles a bien été trouvée";
       }else{
          echo "la lettre j majuscule en début de chaine n'est pas une voyelle!";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $r = "J'apprends à coder";
      if (preg_match("/^[aeiouy]/",$r)) {
         echo "Une des voyelles a bien été trouvée<br>";
       }else{
          echo "la lettre j majuscule en début de chaine n'est pas une voyelle!<br>";
     }
    ?><br>


    <h4>Exemple4 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/[a-z]/i",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche n'importe quelle lettre en minuscule ou en majuscule
      $r = "J'apprends à coder";
      if (preg_match("/[a-z]/i",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple5 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/^[A-Z]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche n'importe quelle lettre majuscule en début de chaine de caractères
      $r = "J'apprends à coder";
      if (preg_match("/^[A-Z]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple6 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/[0-9]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un chiffre dans la chaine de caractères
      $r = "J'apprends à coder";
      if (preg_match("/[0-9]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple7 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder1.";
      if (preg_match("/[0-9]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un chiffre dans la chaine de caractères
      $r = "J'apprends à coder1.";
      if (preg_match("/[0-9]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple8 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/[a-zA-Z0-9]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche soit une lettre minuscule soit une lettre majuscule soit un chiffre
      $r = "J'apprends à coder.";
      if (preg_match("/[a-zA-Z0-9]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple9 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/[a-zA-Z0-9éèà]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche soit une lettre minuscule soit une lettre majuscule soit un chiffre
      //soit les lettres é, è ou à
      $r = "J'apprends à coder.";
      if (preg_match("/[a-zA-Z0-9éèà]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple10 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/[^a-p]/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche tout ce qui n'est pas une lettre entre a et p
      $r = "J'apprends à coder.";
      if (preg_match("/[^a-p]/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h3>Les classes abrégées</h3>
    <h4>Exemple1 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\d/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un chiffre entre 0 et 9
      $r = "J'apprends à coder.";
      if (preg_match("/\d/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple2 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\D/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche tout sauf un chiffre entre 0 et 9
      $r = "J'apprends à coder.";
      if (preg_match("/\D/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple3 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\w/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche une lettre minuscule ou une lettre majuscule ou un chiffre
      //ou un underscore
      $r = "J'apprends à coder.";
      if (preg_match("/\w/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>


    <h4>Exemple4 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\W/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche tout sauf une lettre minuscule ou une lettre majuscule ou un chiffre
      //ou un underscore
      $r = "J'apprends à coder.";
      if (preg_match("/\W/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple5 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends 
      à coder.";
      if (preg_match("/\n/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche une nouvelle ligne
      $r = "J'apprends 
      à coder.";
      if (preg_match("/\n/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>


    <h4>Exemple6 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\s/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un espace dans la chaine de caractères
      $r = "J'apprends à coder.";
      if (preg_match("/\s/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple7 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\S/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche tout sauf un espace dans la chaine de caractères
      $r = "J'apprends à coder.";
      if (preg_match("/\S/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple8 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/\./",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche n'importe quel caractère sauf le retour à la ligne
      $r = "J'apprends à coder.";
      if (preg_match("/\./",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h3>Les quantifieurs</h3>
    <h4>Exemple1 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/z?/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche pas de z ou un z
      $r = "J'apprends à coder.";
      if (preg_match("/z?/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple2 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/z+/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un ou plusieurs z
      $r = "J'apprends à coder.";
      if (preg_match("/z+/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple3 :</h4>
    <div id="code">
      <pre>
      $r = "J'apprends à coder.";
      if (preg_match("/z*/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche pas de z ou un ou plusieurs z
      $r = "J'apprends à coder.";
      if (preg_match("/z*/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple4 :</h4>
    <div id="code">
      <pre>
      $r = "aaaah";
      if (preg_match("/a{3}/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche 3 fois a
      $r = "aaaah";
      if (preg_match("/a{3}/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple5 :</h4>
    <div id="code">
      <pre>
      $r = "aaaah";
      if (preg_match("/^a{3}$/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche 3 fois a avec rien de différent
      $r = "aaaah";
      if (preg_match("/^a{3}$/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple6 :</h4>
    <div id="code">
      <pre>
      $r = "aaaah";
      if (preg_match("/a{3,}/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche 3 fois a et plus
      $r = "aaaah";
      if (preg_match("/a{3,}/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple7 :</h4>
    <div id="code">
      <pre>
      $r = "aaaah";
      if (preg_match("/a{3,5}/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche entre 3 et 5 fois a
      $r = "aaaah";
      if (preg_match("/a{3,5}/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h4>Exemple8 :</h4>
    <div id="code">
      <pre>
      $r = "aaaah";
      if (preg_match("/a{3,5}h/",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche soit 3 fois a et 1h, soit 4 fois a et 1h soit 5 fois a et 1 h
      $r = "aaaah";
      if (preg_match("/a{3,5}h/",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>

    <h3>Les métacaractères</h3>
    <div id="code">
      <pre>
      $r = "J'apprends à coder";
      if (preg_match("/\./",$r)) {
         echo "L'expression a bien été trouvée";
       }else{
          echo "Expression non trouvée";
     }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      //Recherche un point
      $r = "J'apprends à coder";
      if (preg_match("/\./",$r)) {
         echo "L'expression a bien été trouvée<br>";
       }else{
          echo "Expression non trouvée<br>";
     }
    ?><br>


    <br>

      <div style="margin: 20px 0px;">
    <a href="chap26.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les filtres PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>