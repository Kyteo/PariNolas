<?php
	function tester($donnee) {
		$donnee = trim($donnee);
		$donnee = stripslashes($donnee);
		$donnee = htmlspecialchars($donnee);
		return $donnee;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validation de la demande d'inscription à l'infolettre</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
<?php

	$courriel = "";
	$message = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $courriel = tester($_POST["courriel"]);

		/* 
		Si attribut n'est pas set = erreur
		*/
		if (!isset($courriel)) {
	       http_response_code(400);
	       exit;
		}

		if(empty($courriel)) {
			$message = $message . "<h4>*Ça ne se fera pas sans adresse électronique!*</h4>";
		} else {
			$message = $message . "<h4>Yay! Tu es inscrit(e)!</h4>";
			
			if(!file_exists("infolettre.txt")) {
				$fichier = fopen("infolettre.txt", "w");
			}
			$fichier = "infolettre.txt";
			$courant = file_get_contents($fichier);
			if($courant != null) {
				$courant .= "\n";
			}
 
			$courant .= $courriel;
			file_put_contents($fichier, $courant);
		}
	} 


?>
	
</body>

</html>