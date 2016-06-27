var button = document.getElementById('clik');




function modifhtml(){

var bool = confirm('ajouter un champ ?');


if (bool) {
	var textnode = [
document.createTextNode('machin choisit par l\'utilisateur');
document.createTextNode(' : ');
]
	var label = document.createElement('label');

		label.appendChild(textnode[0]);

	var jump = document.createElement('br');
	var texto = document.createElement('textarea');
	var paraf = document.createElement('p');


label.for = 'add'
label.appendChild(textnode[1]);

texto.name = 'add1'
texto.id = 'added1'
texto.row = '10'
texto.cols = '50'

paraf.appendChild(label);
paraf.appendChild(textnode[1]);
paraf.appendChild(jump);
paraf.appendChild(text);

	var dad = document.getElementById('formulaire');

formulaire.insertBefore(paraf, button);

  }

}

button.addEventListener('click', modifhtml());

 
