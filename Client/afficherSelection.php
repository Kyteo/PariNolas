<?php


function afficherSelection() {
	
	//Code à écrire pour afficher la sélection d'items
	echo '<br>Voici la sélection affichée';
	
}

?>


<!DOCTYPE html>
<html>

<head>

	<title>Affichage de la sélection, version client PariNolas</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	
	<?php 
	
		$type = $_GET['type'];
		$sexe = $type[0];
		$selection = substr($type, 1);
				
		if($sexe == 'F') {
			include 'femmeMenu.php';
		} else if($sexe == 'M') {
			include 'hommeMenu.php';
		}
		echo '<h2>';

		switch($selection) {
			case 'hc': 
				echo 'Hauts à manches courtes';
				break;
			case 'hl':
				echo 'Hauts à manches longues';
				break;
			case 'pa':
				echo 'Pantalons';
				break;
			case 'sh':
				echo 'Shorts';
				break;
			case 've':
				echo 'Vestes';
				break;
			case 'fo':
				echo 'Foulards';
				break;
			case 'ch':
				echo 'Chapeaux';
				break;
			case 'ce':
				echo 'Ceintures';
				break;
			case 'ga':
				echo 'Gants';
				break;
		}
		
		echo '</h2>';
		
		afficherSelection();
	
	?>
	
</body>

</html>