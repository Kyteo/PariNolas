<?php include 'entete.php';

echo '

	<div class="menuHomme">

		<nav class="menuHomme">
			<form action="afficherSelection.php" method="get">
				<label id="homme"><h3>HOMMES</h3></label>
				<select name="type">
					<option name="type" value="MhautsCourt">Hauts manches courtes</option><br>
					<option name="type" value="MhautsLong">Hauts manches longues</option><br>
					<option name="type" value="Mpantalons">Pantalons</option><br>
					<option name="type" value="Mshorts">Shorts</option><br>
					<option name="type" value="Mvestes">Vestes</option><br>
					<option name="type" value="Mfoulards">Foulards</option><br>
					<option name="type" value="Mchapeaux">Chapeaux</option><br>
					<option name="type" value="Mceintures">Ceintures</option><br>
					<option name="type" value="Mgants">Gants</option><br>
				</select>
				<input type="submit" value="Montrez-moi!">
			</form>
		</nav>
		
	</div menuHomme>
	
	';
	
?>	