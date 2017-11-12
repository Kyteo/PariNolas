<?php ?>
<!DOCTYPE html>
<html>

<head>

	<title>Affichage du panier</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body class="panier">

	<?php
	include 'entete.php'; 
	include 'trouverAttributsItem.php';
	$fichier = fopen("panier.txt", "r");
	$sous_total_prix = 0;
	echo '
		<br>
		<h1 class="panier">Mon panier</h1>
		<br>
	';
	while(!feof($fichier)) {
		
		echo '<div class="panierItem">';
		
		$ligne = fgets($fichier);
		$tab_ligne_lue = explode(" ", $ligne);
		$nom = $tab_ligne_lue[5];
		echo '<h3 class="item">' . $nom . '</h3>';
		echo '
			<table border="1" class="panierItem">
				<tr>
					<th> ITEM # </th>
					<th> COULEUR </th>
					<th> GRANDEUR </th>
					<th> QTE </th>
					<th> PRIX </th>
					<th class="delete">SUPPRIMER</th>
				</tr>
				<tr>
		';
		$id = $tab_ligne_lue[3];
		$prix = $tab_ligne_lue[7];
		$sous_total_prix += $prix;
		$reste = $tab_ligne_lue[8];
		$couleur = trouverCouleur(substr($reste, 0, 2));
		$grandeur = substr($reste, 2, 1);
		$qte = substr($reste, 3);
		echo '<td>' . $id . '</td>';
		echo '<td>' . $couleur . '</td>';
		echo '<td>' . $grandeur . '</td>';
		echo '<td>' . $qte . '</td>';
		echo '<td>' . $prix . ' $</td>';
		// Ajouter la fonction supprimer item
		echo '<td><a href=""><img id="delete" src="images/delete.jpg" alt="Supprimer item"></a></td>';
		echo '
				</tr>
			</table>
		';
		
		echo '</div>';		
		
	}
	
	$tps = $sous_total_prix * 0.05;
	$tvq = ($sous_total_prix + $tps) * 0.0975;
	$taxes = $tps + $tvq;
	$total_prix = $sous_total_prix + $taxes;
	echo '
		<br><br>
		<div class="prix">
			<table class="prix">
				<tr>
					<th class="prix"><h4>Sous-total : </th> 
					<td class="prix">'. $sous_total_prix .'</td>
				</tr>
				<tr>
					<th class="prix">Taxes :</th>
					<td class="prix">'. $taxes . '</td></h4>
				</tr>
				<tr>
					<th class="prix"><h3>Total :</th>
					<td class="prix">'. $total_prix . '</td></h3>
				</tr>
			</table>
		</div>
	';

	?>
		
</body>