<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les filtres PHP</title>
    <style type="text/css">
      #code{background-color: gray; color: white; 
        border-radius:10px; padding: 10px;font-size: 16px;
        font-family: sans-serif; margin: 15px 10px;}
        table{border-collapse: collapse;}
        th,td{border: 1px solid black;}
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
    <h1>Les filtres PHP</h1>

    <h3>Liste des filtres</h3>
    <div id="code">
      <pre>
      $filtre = filter_list();
      foreach ($filtre as $id => $nomfiltre) {
         echo $nomfiltre.filter_id($nomfiltre);
       } 
    </pre>
    </div>
    <table>
      <tr>
      <th>Nom du filtre</th>
      <th>Id du filtre</th>
    </tr>
    <?php
      $filtre = filter_list();
      foreach ($filtre as $id => $nomfiltre) {
         echo '<tr><td>'.$nomfiltre.'</td><td>'.filter_id($nomfiltre).'</td></tr>';
       } 
    ?>
  </table><br>

     <h3>Validation des nombres</h3>
    <div id="code">
      <pre>
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int1,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide";
      }else{
        echo "La variable ne contient pas de nombre entier valide";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int1,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide<br/>";
      }else{
        echo "La variable ne contient pas de nombre entier valide<br/>";
      }
    ?>

    <div id="code">
      <pre>
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int2,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide";
      }else{
        echo "La variable ne contient pas de nombre entier valide";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int2,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide<br/>";
      }else{
        echo "La variable ne contient pas de nombre entier valide<br/>";
      }
    ?>
    
    <div id="code">
      <pre>
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int3,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide";
      }else{
        echo "La variable ne contient pas de nombre entier valide";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = 100;
      $int2 = 'aaa';
      $int3 = 0;
      if (!filter_var($int3,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide<br/>";
      }else{
        echo "La variable ne contient pas de nombre entier valide<br/>";
      }
    ?><br>
    <h4>Astuce pour le cas du chiffre 0</h4>
    <div id="code">
      <pre>
      $int3 = 0;
      if (filter_var($int3,FILTER_VALIDATE_INT) === 0 OR !filter_var($int3,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide";
      }else{
        echo "La variable ne contient pas de nombre entier valide";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int3 = 0;
      if (filter_var($int3,FILTER_VALIDATE_INT) === 0 OR !filter_var($int3,FILTER_VALIDATE_INT) === false) {
        echo "La variable contient bien un nombre entier valide<br/>";
      }else{
        echo "La variable ne contient pas de nombre entier valide<br/>";
      }
    ?><br>

    <div id="code">
      <pre>
      $int1 = -10;
      $int2 = 50;
      $int3 = 150;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette";
      }else{
        echo "Nombre incorrect ou non entier";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = -10;
      $int2 = 50;
      $int3 = 150;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette<br/>";
      }else{
        echo "Nombre incorrect ou non entier<br/>";
      }
    ?><br>

    <div id="code">
      <pre>
      $int1 = 50;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette";
      }else{
        echo "Nombre incorrect ou non entier";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = 50;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette<br/>";
      }else{
        echo "Nombre incorrect ou non entier<br/>";
      }
    ?><br>

    <div id="code">
      <pre>
      $int1 = 150;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette";
      }else{
        echo "Nombre incorrect ou non entier";
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $int1 = 150;
      $min = 1; $max = 100;
      if (!filter_var($int1,FILTER_VALIDATE_INT, array('options' => array('min_range' =>$min ,'max_range' =>$max ))) === false) {
        echo "Le nombre est dans la bonne fourchette<br/>";
      }else{
        echo "Nombre incorrect ou non entier<br/>";
      }
    ?><br>

    <h3>Validation des emails</h3>
    <div id="code">
      <pre>
      $email1 = "gaetan@gmail.com";

      $email1 = filter_var($email1, FILTER_SANITIZE_EMAIL);

      if (!filter_var($email1,FILTER_VALIDATE_EMAIL) === false) {
        echo 'Le mail '.$email1.' possede une forme valide';
      }else{
        echo 'Le mail '.$email1.' n\'est pas valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $email1 = "gaetan@gmail.com";
      $email2 = "gaetan@gmail";

      $email1 = filter_var($email1, FILTER_SANITIZE_EMAIL);

      if (!filter_var($email1,FILTER_VALIDATE_EMAIL) === false) {
        echo 'Le mail '.$email1.' possede une forme valide<br/>';
      }else{
        echo 'Le mail '.$email1.' n\'est pas valide<br/>';
      }
    ?><br>

    <div id="code">
      <pre>
      $email1 = "gaetan@gmail";

      $email1 = filter_var($email1, FILTER_SANITIZE_EMAIL);

      if (!filter_var($email1,FILTER_VALIDATE_EMAIL) === false) {
        echo 'Le mail '.$email1.' possede une forme valide';
      }else{
        echo 'Le mail '.$email1.' n\'est pas valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $email1 = "gaetan@gmail";

      $email1 = filter_var($email1, FILTER_SANITIZE_EMAIL);

      if (!filter_var($email1,FILTER_VALIDATE_EMAIL) === false) {
        echo 'Le mail '.$email1.' possede une forme valide<br/>';
      }else{
        echo 'Le mail '.$email1.' n\'est pas valide<br/>';
      }
    ?><br>
    <h4>Nettoyer et valider une adresse email</h4>
    <div id="code">
      <pre>
      $email = "g/a/etan@g(mail).com";

      $emailnew = filter_var($email, FILTER_SANITIZE_EMAIL);

      if (!filter_var($emailnew,FILTER_VALIDATE_EMAIL) === false) {
        if ($emailnew != $email) {
          echo 'Le mail possede désormais une forme valide
          Mail envoyé : '.$email.'
          Mail après transformation : '.$emailnew;
        }else{
        echo 'Adresse email valide';
      }
      }else{
        echo 'Adresse email invalide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $email = "g/a/etan@g(mail).com";

      $emailnew = filter_var($email, FILTER_SANITIZE_EMAIL);

      if (!filter_var($emailnew,FILTER_VALIDATE_EMAIL) === false) {
        if ($emailnew != $email) {
          echo 'Le mail possede désormais une forme valide<br/>
          Mail envoyé : '.$email.'<br/>
          Mail après transformation : '.$emailnew;
        }else{
        echo 'Adresse email valide<br/>';
      }
      }else{
        echo 'Adresse email invalide<br/>';
      }
    ?><br><br>

    <h3>Validation des URLs</h3>
    <div id="code">
      <pre>
      $url1 = "http://phpexperience.com";
      $url2 = "http//phpexperience.com";
      $url3 = "http://phpexperience";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide';
      }else{
        echo 'Url non valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $url1 = "http://phpexperience.com";
      $url2 = "http//phpexperience.com";
      $url3 = "http://phpexperience";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide<br/>';
      }else{
        echo 'Url non valide<br/>';
      }
    ?><br>

       <div id="code">
      <pre>
      $url1 = "http//phpexperience.com";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide';
      }else{
        echo 'Url non valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $url1 = "http//phpexperience.com";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide<br/>';
      }else{
        echo 'Url non valide<br/>';
      }
    ?><br>

       <div id="code">
      <pre>
      $url1 = "http://phpexperience";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide';
      }else{
        echo 'Url non valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $url1 = "http://phpexperience";

      $url1 = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($url1,FILTER_VALIDATE_URL) === false) {
        echo 'L\'url est valide<br/>';
      }else{
        echo 'Url non valide<br/>';
      }
    ?><br>

    <h4>Astuce pour nettoyer et valider une URL</h4>
     <div id="code">
      <pre>
      $url1 = "http://phpexperiéèence.com";

      $newurl = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($newurl,FILTER_VALIDATE_URL) === false) {
        if ($newurl != $url1) {
          echo 'L\'url '.$url1.' a été modifiée en '.$newurl.' afin de la rendre valide';
        }else{
        echo 'Url valide';
      }
      }else{
        echo 'Url non valide';
      }
    </pre>
    </div>
    <h4>Résultat :</h4>
    <?php
      $url1 = "http://phpexperiéèence.com";

      $newurl = filter_var($url1, FILTER_SANITIZE_URL);

      if (!filter_var($newurl,FILTER_VALIDATE_URL) === false) {
        if ($newurl != $url1) {
          echo 'L\'url <strong>'.$url1.'</strong> a été modifiée en <strong>'.$newurl.'</strong> afin de la rendre valide<br>';
        }else{
        echo 'Url valide<br/>';
      }
      }else{
        echo 'Url non valide<br/>';
      }
    ?><br>
        
    <br>

      <div style="margin: 20px 0px;">
    <a href="chap25.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les fonctions SQL</a>
    <a href="chap27.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les expressions régulières</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>