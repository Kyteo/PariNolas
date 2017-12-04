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
	 		<h5>*Livraison uniquement au Québec et en Ontario</h5>
                        <h5>**Paiement uniquement par carte de crédit</h5><br>
	 		';
	
	 	echo '
	 		<h4>Total avec taxes : '.$totalPrix.' $</h4>
	 		<h3>Adresse d&apos;expédition</h3><br>
                       

	        <form action="confirmationPanier.php" method="post" enctype="multipart/form-data">
		        <label for="nomClient">Nom : </label>
		        <input type="text" id="nomClient" name="nomClient" maxlength="50" size="20"><br><br>
		        <label for="prenomClient">Prenom : </label>
		        <input type="text" id="prenomClient" name="prenomClient" maxlength="50" size="20"><br><br>
                        <label for="telephone">Numero de téléphone : </label>
		        <input type="text" id="telephone" name="telephone" maxlength="50" size="20"><br><br>
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
		        <label for="methode">Paiement : </label><br>
				<input type="radio" id="methode" name="methode" value="Mastercard"/> Mastercard <br>
				<input type="radio" id="methode" name="methode" value="Visa" /> Visa <br><br>
                        <label for="carte">No Carte : </label>
		        <input type="text" id="carte" name="carte" size="21" value="XXXX-XXXX-XXXX-XXXX"><br><br> 
		        <input type="hidden" value="'.$totalPrix.'" name="totalPrix">
		        <button id="suivant" name="suivant" type="submit">Suivant</button>
	        </form> 
		</div>
   
	   ';
	   include 'basDePage.php';
         
?>
    
    
</body>
</html>
