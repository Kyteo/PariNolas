<?php
	include 'validationInfolettre.php';
?>

<!DOCTYPE html>
<html>

<head>

	<title>Accueil version client PariNolas</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	
	<?php include 'entete.php'; ?>
	
	<br><br>
	<div id="pageAccueil">
		<div id="lignes">
			<div id="marquee"><marquee behavior="scroll" width="800px" scrollamount="5" scrolldelay="3"><pre id="banniere">Recréez votre style avec notre nouvelle collection signée PariNolas!                                  Livraison gratuite pour les commandes de 50$ et plus!</pre></marquee></div>

		</div><br><br><br>
	
		<div class="accueil">
			<img src="images/couple3.png" alt="Couple">
			<img src="images/couple5.png" alt="Couple">
			<img src="images/couple7.png" alt="Couple"><br>
		</div>
		
		<h2 id="inspire">Soyez inspirés</h2><br>
		
		<div id="party" class="accueil">
			<h3>Et prêts pour faire la fête!</h3>
		</div>

		<div class="accueil">
		
		</div><br>
		
		<!-- Infolettre -->
		<div class="infolettre">
			<h3>Inscrivez-vous à notre infolettre pour recevoir les meilleures promotions!</h3>
			<form method="post" action="accueilClient.php">
				<?php 
					echo "<input type='text' value='{$courriel}' placeholder='adresse@example.com' name='courriel' size='40'><br><br>";
				 
					if ($message != "") {
				    	echo "<p>{$message}</p>";
					}
				?>
				<input type="submit" id ="infolettre" name="infolettre" value="M'inscrire!">
			</form>
		</div>
	
		<?php include 'basDePage.php'; ?>
	</div>
	
</body>

</html>