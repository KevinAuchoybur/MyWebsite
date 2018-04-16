//alert('OK');

function calc (){

	var capture1 = parseInt(document.getElementById('premierNb').value);
	var capture2 = parseInt(document.getElementById('secondNb').value);

	if(document.getElementById('r1').checked){

		var addition = capture1 + capture2;

		document.getElementById("afficheResultat").innerHTML = addition ;


	}


	else if(document.getElementById('r2').checked){

		var soustraction = capture1 - capture2;

		document.getElementById("afficheResultat").innerHTML = soustraction ;

		
	}

		else if(document.getElementById('r3').checked){

		var multiplication = capture1 * capture2;

		document.getElementById("afficheResultat").innerHTML = multiplication ;

		
	}

	else if(document.getElementById('r4').checked){

		var division = capture1 / capture2;

		document.getElementById("afficheResultat").innerHTML = division ;

		
	} 
	else {

		
		
		document.getElementById("afficheResultat").innerHTML = " Message d'erreur : Veuillez remplir les champs manquants"

	} 


}


function ClearFields() {

     document.getElementById("premierNb").value = "";
     document.getElementById("secondNb").value = "";
     //document.getElementById("afficheResultat").value = "";
     document.getElementById("r1").checked = "";
     document.getElementById("r2").checked = "";
     document.getElementById("r3").checked = "";
     document.getElementById("r4").checked = "";
}
