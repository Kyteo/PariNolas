<!DOCTYPE html>
<html>

<head>

	<title>Accueil version client PariNolas</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	
	<?php include 'entete.php'; ?>
	<?php echo 'TEst'; ?>
	<br><br>
	<div id="pageAccueil">
		<div id="lignes">
			<div id="marquee"><marquee behavior="scroll" width="400px" scrollamount="10" scrolldelay="3"><pre id="titreGauche">Recréez votre style avec notre nouvelle collection signée PariNolas!                                  Livraison gratuite pour les commandes de 50$ et plus!</pre></marquee></div>
			<!--<div id"titreDroite">Livraison gratuite pour les commandes de 50$ et plus!</div>-->
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
		
		<div class="infolettre">
			<h3>Inscrivez-vous à notre infolettre pour recevoir les meilleures promotions!</h3>
			<form method="post">
				<input type="text" placeholder="adresse@example.com" size="40"><br>
				<button class="infolettre">M'inscrire</button>
			</form>
		</div>
	
		<?php include 'basDePage.php'; ?>
	</div>
	
</body>

</html>