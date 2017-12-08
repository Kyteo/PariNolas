<?php
	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title> Confirmation demande de retour </title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
<?php

	include 'entete.php';
	session_start();
	$_POST = $_SESSION;
	
	$nom = $_POST["nom"];
    $courriel = $_POST["courriel"];
    $explication = $_POST["explication"];
	$image = $_POST["image"];

	if(!file_exists("retours.txt")) {
		$fichier = fopen("retours.txt", "w");
	}
	$fichier = "retours.txt";
	$courant = file_get_contents($fichier);
	if($courant != null) {
		$courant .= "\n";
	}
 
	$courant .= $nom;
	$courant .= " || ".$courriel;
	$courant .= " || ".$explication;
	if($image != null) {
		$courant .= " || ".$image;
	} else {
		$courant .= " || Aucune image";
	}
	
	file_put_contents($fichier, $courant);

	echo "
		<br>
		<h2>Demande de retour envoyée avec succès</h2>
		<p>";
	
	echo $nom;
	
	echo ", nous sommes sincèrement désolés que l'item ne vous convienne pas. Votre satisfaction est notre priorité, notre équipe vous contactera sous peu pour répondre à vos besoins.<br>Merci de l'intérêt que vous portez à PariNolas!</p>
		";
	include 'basDePage.php';

?>
	
</body>

</html>

