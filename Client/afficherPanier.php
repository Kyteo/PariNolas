<?php 

if(isset($_POST["delete"])){
 
    $row = $_POST['row'];
    
    echo $row;
   
    $file_out = file("panier.txt");
    unset($file_out[$row]);
    file_put_contents("panier.txt", implode("", $file_out));
    
}

?>
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
        $row = 0;
	echo '
		<br>
		<h1 class="panier">Mon panier</h1>
		<br>
	';
	while(!feof($fichier)) {
		
		echo '<div class="panierItem">';
		
		$ligne = fgets($fichier);
		$tab_ligne_lue = explode(" ", $ligne);
		if ($tab_ligne_lue[0] != ""){
                
                    $nom = $tab_ligne_lue[3];
                                  
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
                $type = $tab_ligne_lue[0];
                $sexe = $tab_ligne_lue[1];
		$id = $tab_ligne_lue[2];
		$prix = $tab_ligne_lue[4];
		$sous_total_prix += $prix;
		$couleur = trouverCouleur($tab_ligne_lue[5]);
		$grandeur = $tab_ligne_lue[6];
		$quantite = $tab_ligne_lue[7];
		echo '<td>' . $id . '</td>';
		echo '<td>' . $couleur . '</td>';
		echo '<td>' . $grandeur . '</td>';
		echo '<td>' . $quantite . '</td>';
		echo '<td>' . $prix . ' </td>';
		// Ajouter la fonction supprimer item
                
                
                echo '<form action="afficherPanier.php" method="post" enctype="multipart/form-data">
               
                <input type="hidden" value="'.$row.'" name="row">
                <td><button name="delete" type="submit"><img src="images/delete.jpg" height="40px" weight="40px"/></button></td>
                </form>
                
				</tr>
			</table>
		
		
		</div>';		
                
                $row = $row + 1;
		 }
	}
	
	$tps = $sous_total_prix * 0.05;
	$tvq = ($sous_total_prix + $tps) * 0.0975;
	$taxes = $tps + $tvq;
	$taxes_arrondies = arrondirPrix($taxes);
	$total_prix = $sous_total_prix + $taxes;
	$total_arrondi = arrondirPrix($total_prix);
	echo '
		<br><br>
		<div class="prix">
			<table class="prix">
				<tr>
					<th class="prix"><h4>Sous-total : </th> 
					<td class="prix">'. $sous_total_prix .'$</td>
				</tr>
				<tr>
					<th class="prix">Taxes :</th>
					<td class="prix">'. $taxes_arrondies . '$</td></h4>
				</tr>
				<tr>
					<th class="prix"><h3>Total :</th>
					<td class="prix">'. $total_arrondi . '$</td></h3>
				</tr>
			</table>
                        
		</div>
	
        
        
            
        <form id="commander" action="paiement.php" method="post" enctype="multipart/form-data">
            
             <input type="hidden" value="'.$total_arrondi.'" name="totalPrix">
             <button id="caisse" name="commander" type="submit">Passez à la caisse</button>
        </form>';
		
		
		include 'basDePage.php';
    ?>
		
</body>


<?php

	/* Fonction appelée pour arrondir le prix et retourne le prix arrondi */

	function arrondirPrix($prix) {
		$array_prix = explode(".", $prix);
		$avant_virg = $array_prix[0];
		$apres_virg = $array_prix[1];
		$prem_chiffre = $apres_virg[0];
		$deux_chiffre = $apres_virg[1];
		$trois_chiffre = $apres_virg[2];

		if($trois_chiffre >= 5) {
			$deux_chiffre++;
		}
		$prix = $avant_virg;
		$prix .= '.';
		$prix .= $prem_chiffre;
		$prix .= $deux_chiffre;
		
		return $prix;
	}

?>