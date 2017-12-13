<?php
     
	include 'validationPaiement.php';
?>

<html>

<head>

	<title>Paiement</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>
<body>
<?php
        
	include 'entete.php'; 
	$totalPrix = $_POST['totalPrix'];
        
 	echo '
 		<br><div id="paiement">
 		<h1 class="paiement">Méthode de paiement</h1>
 		<h5>*Livraison uniquement au Québec et en Ontario</h5>
		<h5>**Paiement uniquement par carte de crédit</h5><br>
 		';

 	echo '
 		<h4>Total avec taxes : '.$totalPrix.' $</h4>
		';
     ?>              

	 
		 <h3>Adresse d'expédition</h3><br>

		 <!-- Formulaire de paiement -->
	     <form method="post" action="paiement.php" enctype="multipart/form-data">
		
	        <label for="nomClient">Nom </label><br>
			<?php echo "<input type='text' id='nomClient' name='nomClient' value='{$nomClient}' maxlength='50' size='50'><br><br>"; ?>
		
	        <label for="prenomClient">Prenom </label><br>
			<?php echo "<input type='text' id='prenomClient' name='prenomClient' value='{$prenomClient}' maxlength='50' size='50'><br><br>"; ?>
			
			<label for="telephone">Numéro de téléphone </label><br>
			<?php echo "( <input type='text' id='telephone1' name='telephone1' placeholder='000' pattern='[0-9]{3}' value='{$telephone}' maxlength='3' size='3'> )"; ?>
			<?php echo "<input type='text' id='telephone2' name='telephone2' placeholder='000' pattern='[0-9]{3}' value='{$telephone}' maxlength='3' size='3'> -"; ?>
			<?php echo "<input type='text' id='telephone3' name='telephone3' placeholder='0000' pattern='[0-9]{4}' value='{$telephone}' maxlength='4' size='4'><br><br>"; ?>
            
			<label for="emailClient">Email </label><br>
			<?php echo "<input type='text' id='emailClient' name='emailClient' value='{$emailClient}' maxlength='50' size='50'><br><br>"; ?>
		
	        <label for="adresseClient">Adresse </label><br>
			<?php echo "<input type='text' id='adresseClient' name='adresseClient' value='{$adresseClient}' maxlength='50' size='50'><br><br>"; ?>
		
	        <label for="codePostal">Code Postal </label><br>
			<?php echo "<input type='text' id='codePostal1' name='codePostal1' placeholder='A0A' pattern='[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}' value='{$codePostal}' maxlength='3' size='4' style='text-transform:uppercase'>"; ?>
                        <?php echo "<input type='text' id='codePostal2' name='codePostal2' placeholder='0A0' pattern='[0-9]{1}[a-zA-Z]{1}[0-9]{1}' value='{$codePostal}' maxlength='3' size='4' style='text-transform:uppercase'><br><br>"; ?>
                
	        <label for="province">Province </label><br>
	            <select name="province" id="province">
					<?php
						if($province == "Quebec") {
							$selected = "selected='selected'";
						} else {
							$selected = "";
						}
						echo "<option value='Quebec' {$selected}>QC</option>";
                                                
						if($province == "Ontario") {
							$selected = "selected='selected'";
						} else {
							$selected = "";
						}
						echo "<option value='Ontario' {$selected}>ON</option>";
			
					?>
	            </select><br><br>
			
	        <label for="methode">Méthode de paiement </label><br>
			<?php
				$checked = trouverBoutonACocher($methode, "Mastercard");
				echo "<input type='radio' id='methode' name='methode' value='Mastercard' checked='checked' {$checked}>Mastercard<br>";
				$checked = trouverBoutonACocher($methode, "Visa");
				echo "<input type='radio' id='methode' name='methode' value='Visa' {$checked}>Visa<br>";
			?>
			
			<label for="carte">Numéro de la carte </label><br>
	        <input type="text" id="carte" name="carte" size="21" readonly value="XXXX-XXXX-XXXX-XXXX"><br><br>
				
	        <?php 
				echo "<input type='hidden' value='{$totalPrix}' name='totalPrix'>"; 
				if ($msgErreur != "") {
			     	echo "<p>{$msgErreur}</p>";
				}
			?>
	        <input type="submit" id="suivant" name="suivant" value="Suivant">
        </form> 
	</div>
	 
      
	        
<?php 
   include 'basDePage.php';   
?>
    
    
</body>
</html>

<?php

	function trouverBoutonACocher($methode, $valeur) {
		if($methode == $valeur) {
			$cochee = "checked='checked'";
		} else {
			$cochee= "";
		}
		return $cochee;
	}

?>
