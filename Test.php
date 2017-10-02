<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>connexion</title>
		<link rel="stylesheet" type="text/css" href="../CSS/connexion.css" />
	</head>
	<body>
		<div id="connexion">
			<h1 style="color: white;text-align: center">Enregistrer ou modifier les informations d'un stade</h1>
			<div id="connexform">
				<form method="post" action="stadeMaj.html"enctype="multipart/form-data">
					<input type="radio" name="stade" value="std1" required="required">Stade1<br>
					<input type="radio" name="stade" value="std2" required="required">Stade2<br>
					<input type="radio" name="stade" value="std3" required="required">Stade3<br>
					<input type="radio" name="stade" value="std4" required="required">Stade4<br>
					<input type="radio" name="stade" value="std5" required="required">Stade5<br>
					<label for="capaciteid">Capacité d'accueil:</label>
			 			<input   name="capacite" type="text" id="capaciteid" pattern="[1-9]{1,}" required="required"><br>
			 		<label for="accesid">Accès:</label>
			 			<input   name="acces" type="text" id="accesid" pattern="[a-zA-Z]{2,}" required="required"><br>
			 		<label for="environnementid">Environnement:</label>
			 			<input   name="environnement" type="text" id="environnementid" pattern="[a-zA-Z]{2,}" required="required"><br>
			 		<input type="reset" value="Annuler"/><input type="submit" value="Ok">
			</form>
			</div>
			<footer class="pagefooter">
		 	 	<iframe id="ifooter" src="footer.html">
					ne supporte pas
        		</iframe>
		 	</footer>
		</div>
	</body>
</html>
