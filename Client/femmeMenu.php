<?php include 'entete.php';

echo '

	<div class="menuFemme">

		<nav class="menuFemme">
			<form action="afficherSelection.php" method="get">
				<label id="femme"><h3>FEMMES</h3></label>
				<select name="type">
				<option name="type" value="Fhautscourt">Hauts manches courtes</option><br>
				<option name="type" value="Fhautslong">Hauts manches longues</option><br>
				<option name="type" value="Fpantalons">Pantalons</option><br>
				<option name="type" value="Fshorts">Shorts</option><br>
				<option name="type" value="Fvestes">Vestes</option><br>
				<option name="type" value="Ffoulards">Foulards</option><br>
				<option name="type" value="Fchapeaux">Chapeaux</option><br>
				<option name="type" value="Fceintures">Ceintures</option><br>
				<option name="type" value="Fgants">Gants</option><br>
				</select>
				<input type="submit" value="Montrez-moi!">
			</form>
		</nav>
		
	</div menuFemme>
	

	';
	
?>	