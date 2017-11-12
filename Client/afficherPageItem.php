

<!DOCTYPE html>
<html>

<head>

	<title>Afficher page de l'item sélectionné par le client</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	
	<?php 
	
	include 'entete.php'; 
	$img = $_POST['Image'];
	$type = $_GET['Selection'];
	$id = $_GET['ID'];
	$nom = $_GET['Nom'];
	$sexe = $_GET['Sexe'];
	$grandeur = $_GET['Grandeur'];
	$prix = $_GET['Prix'];
	
	echo 'Limage est : '.$img;
	
	
	echo "<div class='item'>";
	
	echo ' <img src="../Images/'.$img.'" width="400" height="400" alt=" '.$nom.'"> ';
	echo '<br><br>ID : '.$id;
	echo "</div>";
	
	echo '<div class="descr">';
	echo '<p class="nomItem">'.$nom.'</p>';
	echo '<p class="prixItem">'.$prix.'$</p><br>';
	echo '<form class="elements" action="ajouterPanier.php" method="post">';
	echo '<label>Couleurs &nbsp&nbsp&nbsp&nbsp</label>';
	// Changer code pour afficher juste les couleurs disponibles
	echo '
		<select name="couleur">
			<option value="nr">Noir</option>
			<option value="rg">Rouge</option>
			<option value="be">Bleu</option>
			<option value="jn">Jaune</option>
			<option value="ba">Blanc</option>
			<option value="rs">Rose</option>
			<option value="au">Autre</option>
		</select><br><br>
		';
	echo '<label>Grandeur &nbsp&nbsp</label>';
	echo '
		<select name="grandeur">
			<option value="S">Petit</option>
			<option value="M">Medium</option>
			<option value="L">Large</option>
		</select><br><br>
	';
	echo '<label>Quantité &nbsp&nbsp&nbsp&nbsp</label>';
	echo '
		<select name="quantite">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select><br><br><br>
		';
	echo '<input type="hidden" value="'.$type.'" name="Type">';
	echo '<input type="hidden" value="'.$sexe.'" name="Sexe">';
	echo '<input type="hidden" value="'.$id.'" name="ID">';
	echo '<input type="hidden" value="'.$nom.'" name="Nom">';
	echo '<input type="hidden" value="'.$prix.'" name="Prix">';
	
	echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<button type="submit">Ajouter
			<img class="panier" src="/PariNolas/Client/images/ajouterPanier.png" style="width: 35px; height: 30px;">
		</button>';
	echo '</form></div>';
	
	
	
	?>

	
</body>

</html>