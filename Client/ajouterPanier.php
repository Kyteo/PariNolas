<?php ?>
<!DOCTYPE html>
<html>

<head>

	<title>Ajout de l'item dans le panier</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>

	<?php
	include 'entete.php'; 

	$type = $_POST['Type'];
	$sexe = $_POST['Sexe'];
	$id = $_POST['ID'];
	$nom = $_POST['Nom'];
	$prix = $_POST['Prix'];
	$coul = $_POST['couleur'];
	$grandeur = $_POST['grandeur'];
	$qte = $_POST['quantite'];

	if(!file_exists("panier.txt")) {
		$fichier = fopen("panier.txt", "w");
	}
	$fichier = "panier.txt";
	$courant = file_get_contents($fichier);
	if($courant != null) {
		$courant .= "\n";
	}
     
	$courant .= $type;
	$courant .= " ".$sexe;
	$courant .= " ".$id;
	$courant .= " ".$nom;
	$courant .= " ".$prix;
	$courant .= " ".$coul;
	$courant .= " ".$grandeur;
	$courant .= " ".$qte;
	file_put_contents($fichier, $courant);

	echo "<br><h3>Item ajouté au panier!</h3>";
        header("refresh:5; url= accueilClient.php");
	?>
		
</body>
