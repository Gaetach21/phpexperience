let numero = 1;
const duree = 1000;
const nombreSlides = 7;

// Si on clique sur la flèche "suivant"
$("#suivant").click(function () {

    // On fait disparaitre le slide actuel
    $("#slide" + numero).fadeOut(duree);

    // On fait apparaitre le slide suivant (numero + 1)
    numero = numero + 1;
    // Si le numéro est supérieur au nombre de slides alors le numéro est égal à 1
    if (numero > nombreSlides) {
        numero = 1;
    }
    $("#slide" + numero).fadeIn(duree);

});

// Si on clique sur la flèche "precedent"
$("#precedent").click(function () {

   // On fait disparaitre le slide actuel
    $("#slide" + numero).fadeOut(duree);

    // On fait apparaitre le slide précédent (numero - 1)
    numero = numero - 1;
    // Si le numéro est inférieur à 0 alors le numéro est égal au nombre de slide
    if (numero < 1) {
        numero = nombreSlides;
    }
    $("#slide" + numero).fadeIn(duree);

});