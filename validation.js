    	var validation = document.getElementById('bouton_envoi');
    	var prenom = document.getElementById('prenom');
        var email = document.getElementById('mail');
        var telephone = document.getElementById('tel');
        var message = document.getElementById('msg');

    	var prenom_m = document.getElementById('prenom_invalide');
        var email_m = document.getElementById('email_invalide');
        var telephone_m = document.getElementById('tel_invalide');
        var message_m = document.getElementById('msg_invalide');

    	
    	var prenom_v =/^[a-zA-ZéèîïÉÈÏÎ](([a-zéèêàçîï]){3,})$/;
    	var email_v =/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
        var tel_v =/^(237[-. ]?)?6[-. ]?[5-9][0-9]([-. ]?[0-9]{2}){3}$/;
    	validation.addEventListener('click', f_valid);

    	function f_valid(e) {
    		if (prenom.validity.valueMissing && email.validity.valueMissing && telephone.validity.valueMissing && message.validity.valueMissing) {
    			e.preventDefault();
    			prenom_m.textContent='Le champ prénom est obligatoire.';
                email_m.textContent='Le champ email est obligatoire.';
                telephone_m.textContent='Le champ téléphone est obligatoire.';
                message_m.textContent='Le champ message est obligatoire.';
                prenom_m.style.color='red';
                email_m.style.color='red';
                telephone_m.style.color='red';
                message_m.style.color='red';

    		}else if(prenom_v.test(prenom.value) == false){
    			event.preventDefault();
    			prenom_m.textContent='Le champ prénom doit comporter au moins 4 caractères alphabétiques.';
    			prenom_m.style.color='red';

    		}else if(email_v.test(email.value) == false){
                event.preventDefault();
                email_m.textContent='Le champ email est invalide.';
                email_m.style.color='red';

            }else if(tel_v.test(telephone.value) == false){
                event.preventDefault();
                telephone_m.textContent='Le champ téléphone est invalide.';
                telephone_m.style.color='red';
            }else {

    		}
    	}