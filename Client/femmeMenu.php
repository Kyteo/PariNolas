<?php include 'entete.php';

echo '

	<div class="menuFemme">

		<nav class="menuFemme">
			<form action="afficherSelection.php" method="get">
				<label id="femme"><h3>FEMMES</h3></label>
				<select name="type">
					<option name="type" value="Fhc">Hauts manches courtes</option><br>
					<option name="type" value="Fhl">Hauts manches longues</option><br>
					<option name="type" value="Fpa">Pantalons</option><br>
					<option name="type" value="Fsh">Shorts</option><br>
					<option name="type" value="Fve">Vestes</option><br>
					<option name="type" value="Ffo">Foulards</option><br>
					<option name="type" value="Fch">Chapeaux</option><br>
					<option name="type" value="Fce">Ceintures</option><br>
					<option name="type" value="Fga">Gants</option><br>
				</select>
				<input type="submit" value="Montrez-moi!">
			</form>
		</nav>
		
	</div menuFemme>
	

	';
	
?>	