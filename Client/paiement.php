<?php



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
	 		<br>
	 		';
	
	 	echo '
	 		<h4>Total avec taxes : '.$totalPrix.' $</h4>
	 		<h3>Adresse d&apos;expédition</h3><br>

	        <form action="confirmationPanier.php" method="post" enctype="multipart/form-data">
		        <label for="nomClient">Nom : </label>
		        <input type="text" id="nomClient" name="nomClient" maxlength="50" size="20"><br><br>
		        <label for="prenomClient">Prenom : </label>
		        <input type="text" id="prenomClient" name="prenomClient" maxlength="50" size="20"><br><br>
		        <label for="emailClient">Email : </label>
		        <input type="text" id="emailClient" name="emailClient" maxlength="50" size="20"><br><br>
		        <label for="adresseClient">Adresse : </label>
		        <input type="text" id="adresseClient" name="adresseClient" maxlength="50" size="20"><br><br>
		        <label for="codePostal">Code Postal : </label>
		        <input type="text" id="codePostal" name="codePostal" maxlength="6" size="6"><br><br>
		        <label for="province">Province : </label>
		            <select name="province"> 
		            	<option value="Ontario">ON</option>
			    		<option value="Quebec">QC</option>
		            </select><br><br>
		        <label for="pays">Pays : </label>
		            <select name="pays" > 
		                <option value="Canada">CAN</option>
		                <option value="EtasUnis">USA</option>
		            </select><br><br>
		        <label for="methode">Paiement : </label><br>
				<input type="radio" id="methode" name="methode" value="mastercard"/> Mastercard <br>
				<input type="radio" id="methode" name="methode" value="visa" /> Visa <br>
				<input type="radio" id="methode" name="methode" value="onlineBank" /> Online Banking <br>
		                <input type="radio" id="methode" name="methode" value="paypal" /> PayPal<br><br>
		        <input type="hidden" value="'.$totalPrix.'" name="totalPrix">
		        <button id="suivant" name="suivant" type="submit">Suivant</button>
	        </form> 
		</div>
   
	   ';
	   include 'basDePage.php';
         
?>
    
    
</body>
</html>