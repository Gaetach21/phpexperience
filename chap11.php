<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel ="stylesheet" type="text/css" media="all">
    <title>phpexperience - Les fonctions relatives à la date en PHP</title>
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
    <h1>Les fonctions relatives à la date en PHP</h1>
    <?php
    echo "<h3>La fonction time()</h3>nous permet d’obtenir le nombre de secondes écoulées depuis le 1er janvier 1970.<br>";
    echo time(); 
    echo "<br><br>";

    echo "<h3>La fonction date()</h3>nous permet d’obtenir une date selon le format de notre choix.<br>";
    ?>
    <table>
<thead>
<tr>
<th>Caractère</th>
<th>Signification</th>
</tr>
</thead>
<tbody>
<tr>
<td>d</td>
<td>Représente le jour du mois en deux chiffres (entre 01 et 31)</td>
</tr>
<tr>
<td>j</td>
<td>Représente le jour du mois en chiffres sans le zéro initial (de 1 à 31)</td>
</tr>
<tr>
<td>D</td>
<td>Représente le jour de la semaine en 3 lettres (en anglais)</td>
</tr>
<tr>
<td>l (L minuscule)</td>
<td>Représente le jour de la semaine en toutes lettres (en anglais)</td>
</tr>
<tr>
<td>N</td>
<td>Représente le jour de la semaine en chiffre au format ISO-8601 (lundi = 1, dimanche = 7)</td>
</tr>
<tr>
<td>w</td>
<td>Représente le jour de la semaine en chiffre (dimanche = 0, samedi = 6)</td>
</tr>
<tr>
<td>z</td>
<td>Représente le jour de l’année de 0 (1er janvier) à 365</td>
</tr>
<tr>
<td>W</td>
<td>Représente le numéro de la semaine au format ISO-8601 (les semaines commencent le lundi)</td>
</tr>
<tr>
<td>m</td>
<td>Représente le mois de l’année en chiffres avec le zéro initial (de 01 à 12)</td>
</tr>
<tr>
<td>n</td>
<td>Représente le mois de l’année de chiffres sans le zéro initial (de 1 à 12)</td>
</tr>
<tr>
<td>M</td>
<td>Représente le mois en trois lettres en anglais (Jan, Feb…)</td>
</tr>
<tr>
<td>F</td>
<td>Représente le mois en toutes lettres en anglais</td>
</tr>
<tr>
<td>t</td>
<td>Représente le nombre de jours contenus dans le mois (de 28 à 31)</td>
</tr>
<tr>
<td>Y</td>
<td>Représente l’année sur 4 chiffres (ex : 2019)</td>
</tr>
<tr>
<td>y</td>
<td>Représente l’année sur 2 chiffres (ex : 19 pour 2019)</td>
</tr>
<tr>
<td>L</td>
<td>Renvoie 1 si l’année est bissextile, 0 sinon</td>
</tr>
<tr>
<td>a et A</td>
<td>Ajoute « am » ou « pm » (pour a) ou « AM » ou « PM » (pour A) à la date</td>
</tr>
<tr>
<td>h</td>
<td>Représente l’heure au format 12h avec le zéro initial</td>
</tr>
<tr>
<td>g</td>
<td>Représente l’heure au format 12h sans zéro initial</td>
</tr>
<tr>
<td>H</td>
<td>Représente l’heure au format 24h avec le zéro initial</td>
</tr>
<tr>
<td>G</td>
<td>Représente l’heure au format 24h sans le zéro initial</td>
</tr>
<tr>
<td>i</td>
<td>Représente les minutes avec le zéro initial</td>
</tr>
<tr>
<td>s</td>
<td>Représente les seconds avec le zéro initial</td>
</tr>
<tr>
<td>v</td>
<td>Représente les millisecondes avec le zéro initial</td>
</tr>
<tr>
<td>O et P</td>
<td>Indique la différence d’heures avec l’heure GMT sans deux points (pour O, ex : +0100) ou avec deux points (pour P, ex : +01:00)</td>
</tr>
<tr>
<td>I (i majuscule)</td>
<td>Renvoie 1 si l’heure d’été est activée, 0 sinon</td>
</tr>
<tr>
<td>c</td>
<td>Représente la date complète au format ISO 8601 (ex : 2019-01-25T12:00:00+01:00)</td>
</tr>
<tr>
<td>r</td>
<td>Représente la date complète au format RFC 2822 (ex : Fri, 25 Jan 2019 12 :00 :00 +0100)</td>
</tr>
<tr>
<td>Z</td>
<td>Représente le décalage horaire en secondes par rapport à l’heure GMT</td>
</tr>
</tbody>
</table><br>
<?php
    echo date("d/m/Y").'<br>';
    echo date("d-m-Y").'<br>';
    echo 'Nous sommes le '.date("d-m-Y").'<br>';
    echo 'Aujourd\'hui c\'est '.date("l").'<br>';
    echo 'Il est '.'<br>'.date("H:i:s").'<br><br>';

    echo "<h3>La fonction gmdate()</h3>nous permet d’obtenir la date GMT.<br>";
    echo "<h3>La fonction date_default_timezone_set()</h3>permet de définir le fuseau horaire à utiliser pour 
    les fonctions relatives à la date.<br>";
    echo date('d/m/Y h:i:s'). '<br>';
    echo gmdate('d-m-Y h:i:s'). '<br>';
    date_default_timezone_set('Africa/Malabo');
    echo date('d/m/Y h:i:s'). '<br>';
    echo gmdate('d-m-Y h:i:s'). '<br><br>';

    echo "<h3>Les fonctions setlocale() et strftime()</h3>";
    ?>
    <table>
<thead>
<tr>
<th>Caractère</th>
<th>Signification</th>
</tr>
</thead>
<tbody>
<tr>
<td>%a</td>
<td>Représente le jour de la semaine en trois lettres en anglais</td>
</tr>
<tr>
<td>%A</td>
<td>Représente le jour de la semaine en toutes lettres en anglais</td>
</tr>
<tr>
<td>%u</td>
<td>Représente le jour de la semaine en chiffre au format ISO-8601 (lundi 1, dimanche = 7)</td>
</tr>
<tr>
<td>%w</td>
<td>Représente le jour de la semaine en chiffre (dimanche = 0, samedi = 6)</td>
</tr>
<tr>
<td>%d</td>
<td>Représente le jour du mois en deux chiffres (entre 01 et 31)</td>
</tr>
<tr>
<td>%j</td>
<td>Représente le jour de l’année avec les zéros de 001 à 366</td>
</tr>
<tr>
<td>%U</td>
<td>Représente le numéro de la semaine de l’année en ne comptant que les semaines pleines</td>
</tr>
<tr>
<td>%V</td>
<td>Représente le numéro de la semaine de l’année en suivant la norme ISO-8601 (si au moins 4 jours d’une semaine se situent dans l’année alors la semaine compte)</td>
</tr>
<tr>
<td>%m</td>
<td>Représente le mois sur deux chiffres de 01 à 12</td>
</tr>
<tr>
<td>%b</td>
<td>Représente le nom du mois en lettres en abrégé</td>
</tr>
<tr>
<td>%B</td>
<td>Représente le nom complet du mois</td>
</tr>
<tr>
<td>%y</td>
<td>Représente l’année sur deux chiffres</td>
</tr>
<tr>
<td>%Y</td>
<td>Représente l’année sur 4 chiffres</td>
</tr>
<tr>
<td>%H</td>
<td>Représente l’heure, de 00 à 23</td>
</tr>
<tr>
<td>%k</td>
<td>Représente l’heure de 0 à 23</td>
</tr>
<tr>
<td>%I (i majuscule)</td>
<td>Représente l’heure de 01 à 12</td>
</tr>
<tr>
<td>%M</td>
<td>Représente les minutes de 00 à 59</td>
</tr>
<tr>
<td>%S</td>
<td>Représente les secondes de 00 à 59</td>
</tr>
<tr>
<td>%T</td>
<td>Identique à %H:%M:%S</td>
</tr>
<tr>
<td>%D</td>
<td>Identique à %m/%d/%y</td>
</tr>
<tr>
<td>%x</td>
<td>Représente la date sans l’heure au format préféré en se basant sur la constant locale</td>
</tr>
<tr>
<td>%c</td>
<td>Affiche la date et l’heure basées sur la constant locale</td>
</tr>
</tbody>
</table><br>
<?php
            echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y %I:%M:%S'). '<br>';
            echo strftime('%x'). '<br>';
            echo strftime('%T'). '<br>';
            echo strftime('%c'). '<br><br>';

echo "<h3>La fonction strtotime()</h3>nous permet de récupérer les Timestamp liés aux dates qu’on souhaite comparer.<br>";
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            
            $d1 = '25-05-2023';
            $d2 = '24-May 2023';
            $tmstp1 = strtotime($d1);
            $tmstp2 = strtotime($d2);
            
            $dfr1 = strftime('%A %d %B %Y', $tmstp1);
            $dfr2 = strftime('%A %d %B %Y', $tmstp2);
            
            if($tmstp1 < $tmstp2){
                echo 'Le ' .$dfr1. ' est avant le ' .$dfr2. '<br>';
            }elseif($tmstp1 == $tmstp2){
                echo 'Les deux dates sont les mêmes<br>';
            }else{
                 echo 'Le ' .$dfr2. ' est avant le ' .$dfr1. '<br>';
            }
            echo "<br>";

echo "<h3>La fonction checkdate()</h3>permet de tester la validité d'une date.<br>";
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            
            if(checkdate(1,25,2023)){
                echo 'Le 25 janvier 2023 est une date valide <br>';
            }
            if(checkdate(1,35,2019)){
                echo 'Le 35 janvier 2019 est une date valide <br>';
            }
            if(checkdate(2,29,2015)){
                echo 'Le 29 février 2015 est une date valide <br>';
            }
            if(checkdate(2,29,2023)){
                echo 'Le 29 février 2023 est une date valide <br>';
            }
            echo "<br>";

echo "<h3>La fonction strptime()</h3>permet de tester la validité d'un format de date locale.<br>";
?>
<table>
<thead>
<tr>
<th>Type de données</th>
<th>Signification</th>
</tr>
</thead>
<tbody>
<tr>
<td>tm_sec</td>
<td>Représente les secondes</td>
</tr>
<tr>
<td>tm_min</td>
<td>Représente les minutes</td>
</tr>
<tr>
<td>tm_hour</td>
<td>Représente l’heure de 0 à 23</td>
</tr>
<tr>
<td>tm_mday</td>
<td>Le jour du mois en chiffres sans le zéro initial</td>
</tr>
<tr>
<td>tm_mon</td>
<td>Représente le mois sous forme de chiffres (janvier = 0, décembre = 11)</td>
</tr>
<tr>
<td>tm_year</td>
<td>Le nombre d’années écoulées depuis 1900</td>
</tr>
<tr>
<td>tm_wday</td>
<td>Le numéro du jour de la semaine (Dimanche = 0, Samedi= 6)</td>
</tr>
<tr>
<td>tm_yday</td>
<td>Le jour de l’année en chiffres (1er janvier = 0)</td>
</tr>
<tr>
<td>unparsed</td>
<td>La partie de la date qui n’a pas été reconnue</td>
</tr>
</tbody>
</table><br>
<?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            
            $format1 = '%A %d %B %Y %H:%M:%S';
            $format2 = '%H:%M:%S';
            
            $date1 = strftime($format1);
            $date2 = strftime($format1);
            $date3 = strftime($format2);
            
            echo $date1. '<br>' .$date2. '<br>' .$date3. '<br>';
            
            if(date_parse_from_format($date1, $format1)){
                echo '<pre>';
                print_r(date_parse_from_format($date1, $format1));
                echo '</pre><br>';
            }
            if(date_parse_from_format($date2, '%A %d %B %Y')){
                echo '<pre>';
                print_r(date_parse_from_format($date2, '%A %d %B %Y'));
                echo '</pre><br>';
            }
            if(date_parse_from_format($date3, '%A %d %B %Y')){
                echo '<pre>';
                print_r(date_parse_from_format($date3, '%A %d %B %Y'));
                echo '</pre>';
            }
            echo "<br>";
    ?>



      <div style="margin: 20px 0px;">
    <a href="chap10.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em;">Les fonctions affectant les array</a>
    <a href="chap12.php#main"  style="text-decoration: none; background-color: #64abfb; padding: 20px; color: white; font-size: 1.2em; margin-right: 25px;">Les constantes en PHP</a>
  </div>
      </div>

      
    </section>

   <!-- Pied de page-->
   <?php include("includes/footer.php")?>
   
   
  </body>
</html>