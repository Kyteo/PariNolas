<!DOCTYPE html>
<html>

<head>

	<title>Page de coordonnées et retour d'item</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
		
	<?php include 'entete.php';?> 
	
	<div class="haut">
		<!-- Adresse et coordonnées -->
		<div class="contact">
			<br>
	
			<div class="marge">
				<address id="adresse">
					<h4>Adresse du bureau-chef</h4>
					123 boulevard Maisonneuve<br>
					Montréal, QC (H3E 1L6)<br><br>

					Par téléphone : <a class="lien" href = "tel:(514) 221-5464">(514) 221-PANO</a><br>
					Par courriel : <a class="lien" href = "mailto:info@parinolas.ca">info@parinolas.ca</a><br><br>
			
					<h4>Heures d'ouverture du service à la clientèle</h4>
					Lundi au vendredi : 9h - 17h<br>
					Samedi : 10h-15h<br>
					Dimanche : Fermé<br>	
				</address>
			</div>
		</div>
	
		<!-- Formulaire pour demande de retour d'item -->
		<div class="retour">
			<h2>Retourner un item</h2>
			<p>Pour retourner un item, veuillez d'abord nous envoyer un message décrivant les circonstances du retour ainsi qu'une image
				accompagnant votre explication.<br> Nous vous contacterons ensuite pour faire le suivi.</p><br>
		
			<form id="retour" action="" method="post">
				<label for="nom">Votre nom </label><br>
				<input type="text" id="nom" name="nom" size="40"><br><br>
			
				<label for="courriel">Adresse électronique </label><br>
				<input type="text" id="courriel" name="courriel" size="50"><br><br>
			
				<textarea id="explication" name="explication" cols="68" rows="10" placeholder="Explication du retour"></textarea><br><br>
				<input type="file" name="image" accept="image/gif, image/jpeg, image/png"><br><br><br>
			
				<input type="submit" name="envoyerRetour" value="Envoyer">
			</form>
		</div>
	</div>
	
	<?php include 'basDePage.php'; ?>
	
</body>

</html>