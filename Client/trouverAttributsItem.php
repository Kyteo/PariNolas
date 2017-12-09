<?php

function trouverSelection($selectionAVerifier) {
	
	switch($selectionAVerifier) {
		case 'hautscourt': 
			$selection = 'Hauts à manches courtes';
			break;
		case 'hautslong':
			$selection = 'Hauts à manches longues';
			break;
		case 'pantalons':
			$selection = 'Pantalons';
			break;
		case 'shorts':
			$selection = 'Shorts';
			break;
		case 'vestes':
			$selection = 'Vestes';
			break;
		case 'foulards':
			$selection = 'Foulards';
			break;
		case 'chapeaux':
			$selection = 'Chapeaux';
			break;
		case 'ceintures':
			$selection = 'Ceintures';
			break;
		case 'gants':
			$selection = 'Gants';
			break;
	}
	return $selection;
	
}


function trouverCouleur($couleurAVerifier) {
	$couleur = "";
	switch($couleurAVerifier) {
		case 'nr': 
			$couleur = 'Noir';
			break;
		case 'rg':
			$couleur = 'Rouge';
			break;
		case 'be':
			$couleur = 'Bleu';
			break;
		case 'jn':
			$couleur = 'Jaune';
			break;
		case 'ba':
			$couleur = 'Blanc';
			break;
		case 'rs':
			$couleur = 'Rose';
			break;
		case 'au':
			$couleur = 'Autre';
			break;
		
	}
	return $couleur;
	
}

function trouverGrandeur($grandeurAVerifier) {
	$grandeur = "";
	switch($grandeurAVerifier) {
		case 's': 
			$grandeur = 'Petit';
			break;
		case 'm':
			$grandeur = 'Medium';
			break;
		case 'l':
			$grandeur = 'Large';
			break;
		
	}
	return $grandeur;
	
}

?>