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
	<title>Validation du retour d'item</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
<?php

$nom = $courriel = $explication = "";
$msgErreur = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = tester($_POST["nom"]);
    $courriel = tester($_POST["courriel"]);
    $explication = tester($_POST["explication"]);

	/* 
	Si attributs ne sont pas set = erreur
	*/
	if (!isset($nom) || !isset($courriel) || !isset($explication)) {
       http_response_code(400);
       exit;
	}
	$requis = array("nom", "courriel", "explication");
	$donnees_vides = array();
	$erreur_vide = false;
	foreach($requis as $champ) {
		if(empty($_POST[$champ])) {
			array_push($donnees_vides, $champ);
			$erreur_vide = true;
		}
	}

	if($erreur_vide) {
		$msgErreur = $msgErreur . "<h4>*Tous les champs doivent être remplis*</h4>";
	} else {
		$msgErreur = "";
	}
	
	/* 
	Si le formulaire est valide, on redirige vers la page de confirmation 
	*/
	if ($msgErreur == "") {
		session_start();
		$_SESSION = $_POST;
		session_write_close();
		header("Location: confirmationRetour.php");
		exit();
	}
} else {
	
}


?>
	
</body>

</html>