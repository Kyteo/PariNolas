<?php
	function tester($donnee) {
		$donnee = trim($donnee);
		$donnee = stripslashes($donnee);
		$donnee = htmlspecialchars($donnee);
		return $donnee;
	}
	

	function provinceValide($province) {
		
		$liste_provinces = array("Ontario","Quebec");
	
		if(in_array($province, $liste_provinces, true)) {
			return true;
		} else {
			return false;
		}
	}
	function methodeValide($methode) {
		
		$liste_methodes = array("Mastercard","Visa");
	
		if(in_array($methode, $liste_methodes, true)) {
			return true;
		} else {
			return false;
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validation de la confirmation de commande</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />
</head>

<body>
	
<?php

$nomClient = $prenomClient = $telephone = $emailClient = $adresseClient = $codePostal = $province = $methode = $carte = "";
$msgErreur = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['suivant'])) {
    $nomClient = tester($_POST["nomClient"]);
    $prenomClient = tester($_POST["prenomClient"]);
	$telephone = tester($_POST["telephone"]);
    $emailClient = tester($_POST["emailClient"]);
    $adresseClient = tester($_POST["adresseClient"]);
    $codePostal = tester($_POST["codePostal"]);
    $province = tester($_POST["province"]);
    $methode = tester($_POST["methode"]);
	$carte = tester($_POST["carte"]);

	/* 
	Si attributs ne sont pas set = erreur
	*/
	if (!isset($nomClient) || !isset($prenomClient) || !isset($emailClient) || !isset($adresseClient) || !isset($codePostal) || !isset($province) || !isset($telephone) || !isset($methode) || !isset($carte)) {
       http_response_code(400);
       exit;
	}
	$requis = array("nomClient", "prenomClient", "emailClient", "telephone", "adresseClient", "codePostal", "province", "carte", "methode");
	$donnees_vides = array();
	$erreur_vide = false;
	foreach($requis as $champ) {
		if(empty($_POST[$champ])) {
			array_push($donnees_vides, $champ);
			$erreur_vide = true;
		}
	}

	/*
		Si province et/ou methode ne sont pas de leurs listes respectives fournies, alors erreur
	*/
	$province_valide = (isset($_POST["province"])) ? provinceValide($_POST["province"]) : false;;
	$methode_valide = (isset($_POST["methode"])) ? methodeValide($_POST["methode"]) : false;;

	/*
		Verifie si erreurs sont presentes et concatene les messages d'erreur a la variable en consequence
	*/
	if($erreur_vide) {
		$msgErreur = $msgErreur . "<h4>Attention, tous les champs doivent être remplis.</h4>";
	}
	if(!$province_valide) {
		$msgErreur = $msgErreur . "<h4>Veuillez choisir une province parmi la liste fournie.</h4>";
	}
	if(!$methode_valide) {
		$msgErreur = $msgErreur . "<h4>Veuillez choisir une méthode de paiement parmi la liste fournie.</h4>";
	}
	
	/* 
	Si le formulaire est valide, on redirige vers la page de confirmation de commande
	*/
	if ($msgErreur == "") {
		session_start();
		$_SESSION = $_POST;
		session_write_close();
		header("Location: confirmationPanier.php");
		exit();
	}
} 


?>
	
</body>

</html>