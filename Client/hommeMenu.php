<?php include 'entete.php';

echo '

	<div class="menuHomme">

		<nav class="menuHomme">
			<form action="afficherSelection.php" method="get">
				<label id="homme"><h3>HOMMES</h3></label>
				<select name="type">
					<option value="Mhc">Hauts manches courtes</option><br>
					<option value="Mhl">Hauts manches longues</option><br>
					<option value="Mpa">Pantalons</option><br>
					<option value="Msh">Shorts</option><br>
					<option value="Mve">Vestes</option><br>
					<option value="Mfo">Foulards</option><br>
					<option value="Mch">Chapeaux</option><br>
					<option value="Mce">Ceintures</option><br>
					<option value="Mga">Gants</option><br>
				</select>
				<input type="submit" value="Montrez-moi!">
			</form>
		</nav>
		
	</div menuHomme>
	
	';
	
?>	