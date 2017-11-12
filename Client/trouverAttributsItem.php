<?php

function trouverSelection($selectionAVerifier) {
	
	switch($selectionAVerifier) {
		case 'hc': 
			$selection = 'Hauts à manches courtes';
			break;
		case 'hl':
			$selection = 'Hauts à manches longues';
			break;
		case 'pa':
			$selection = 'Pantalons';
			break;
		case 'sh':
			$selection = 'Shorts';
			break;
		case 've':
			$selection = 'Vestes';
			break;
		case 'fo':
			$selection = 'Foulards';
			break;
		case 'ch':
			$selection = 'Chapeaux';
			break;
		case 'ce':
			$selection = 'Ceintures';
			break;
		case 'ga':
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


?>