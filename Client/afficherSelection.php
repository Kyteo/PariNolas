<?php


function afficherSelection($selection, $sexe) {
          
	$hostname = 'localhost';
	$username = 'root';
	$password = 'root';
	$databaseName = 'parinolas';

	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
  
	$query = "show TABLES";
	$result = mysqli_query($connect, $query); // Get table names

	while($row = mysqli_fetch_array($result)):    

	   $query = "SELECT * FROM $selection WHERE SEXE LIKE '$sexe'"; 
	   $result1 = mysqli_query($connect, $query);

	endwhile;
        
	return $result1;
                
}

?>


<!DOCTYPE html>
<html>

<head>

	<title>Affichage de la sélection, version client PariNolas</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	<?php 
	
		include "trouverAttributsItem.php";
		
		$type = $_GET['type'];
		$sexe = $type[0];
		$selection = substr($type, 1);
				
		if($sexe == 'F') {
			include 'femmeMenu.php';
                       
		} else if($sexe == 'M') {
			include 'hommeMenu.php';
                        
		}
		echo '<div id="touteSelection"><br>';
		echo '<h2 id="nomSelection">Catégorie ';

		$selection_complet = trouverSelection($selection);
		echo $selection_complet;
		
		echo '</h2><br>';
		
		$result2 = afficherSelection($selection, $sexe);
	
		
                while($row = mysqli_fetch_array($result2)):
                  
                  ?><div class="main"><?php
                       ?><div class="photo"><?php
                            echo '
								<form action="afficherPageItem.php" method="get" enctype="multipart/form-data">
									<input type="hidden" value="' .$selection.'" name="Selection">
									<input type="hidden" value="'.$row['ID'].'" name="ID">
									<input type="hidden" value="'.$row['Nom'].'" name="Nom">
									<input type="hidden" value="'.$row['Sexe'].'" name="Sexe">
									<input type="hidden" value="'.$row['Prix'].'" name="Prix">
									<input type="hidden" value="'.$row['Image'].'" name="Image">
						
	                            	<input type="image" src="../Admin/Images/'.$row['Image'].'" name="Image" width="175" height="175" alt=" '.$row['Nom']. '">
								</form>
								'; 
                       ?></div><?php
                       if($sexe == 'F') {
						   ?><div class="nomPrixFemme"><?php
                       } else {
						   ?><div class="nomPrixHomme"><?php
                       }

                            echo "<p>".$row['Nom']."</p>";
                            echo "<p>".$row['Prix']."$</p>";
                       ?></div><?php
                  ?></div><?php
                  
                endwhile;
		echo '<div>';
				
	?>
	
</body>

</html>
