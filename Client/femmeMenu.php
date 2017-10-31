<?php include 'entete.php';

echo '

	<div class="menuFemme">

		<nav class="menuFemme">
			<form action="afficherSelection.php" method="get">
				<label id="femme"><h3>FEMMES</h3></label>
				<select name="type">
					<option value="Fhc">Hauts manches courtes</option><br>
					<option value="Fhl">Hauts manches longues</option><br>
					<option value="Fpa">Pantalons</option><br>
					<option value="Fsh">Shorts</option><br>
					<option value="Fve">Vestes</option><br>
					<option value="Ffo">Foulards</option><br>
					<option value="Fch">Chapeaux</option><br>
					<option value="Fce">Ceintures</option><br>
					<option value="Fga">Gants</option><br>
				</select>
				<input type="submit" value="Montrez-moi!">
			</form>
		</nav>
		
	</div menuFemme>
	
	';
	
?>	