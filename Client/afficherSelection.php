<?php


function afficherSelection($selection, $sexe) {
       
		   
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $Type = $selection;
  
    $query = "show TABLES";
    $result = mysqli_query($connect, $query); // Get table names
    
    while($row = mysqli_fetch_array($result)):    
    if ($Type == "hc"):
       $query = "SELECT * FROM `hautsCourt` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "hl"):
       $query = "SELECT * FROM `hautsLong` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "sh"):
       $query = "SELECT * FROM `shorts` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pa"):
       $query = "SELECT * FROM `pantalons` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ve"):
       $query = "SELECT * FROM `vestes` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "fo"):
       $query = "SELECT * FROM `foulards` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ch"):
       $query = "SELECT * FROM `chapeaux` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ce"):
       $query = "SELECT * FROM `ceintures` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ga"):
       $query = "SELECT * FROM `gants` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;   
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
		echo '<h2>';

		$selection_complet = trouverSelection($selection);
		echo $selection_complet;
		
		echo '</h2>';
		
		$result2 = afficherSelection($selection, $sexe);
	
                while($row = mysqli_fetch_array($result2)):
                   
                  ?><div class="main"><?php
                       ?><div class="photo"><?php
                            echo '
								<form action="afficherPageItem.php" method="get" enctype="multipart/form-data">
									<input type="hidden" value=" '.$row.' " name="Row">
									<input type="hidden" value="' .$selection. '" name="Selection">
									<input type="hidden" value=" '.$row['ID'].' " name="ID">
									<input type="hidden" value=" '.$row['Nom'].' " name="Nom">
									<input type="hidden" value=" '.$row['Sexe'].' " name="Sexe">
									<input type="hidden" value=" '.$row['Grandeur'].' " name="Grandeur">
									<input type="hidden" value=" '.$row['Couleur'].' " name="Couleur">
									<input type="hidden" value=" '.$row['Prix'].' " name="Prix">
									<input type="hidden" value=" '.$row['Image'].' " name="Img">
						
	                            	<input type="image" src="../Images/'.$row['Image'].'" name="Image" width="175" height="175" alt=" '.$row['Nom']. '">
								</form>
								'; 
                       ?></div><?php
                       ?><div class="nomPrix"><?php
                            echo "<p>".$row['Nom']."</p>";
                            echo "<p>".$row['Prix']."</p>";
							echo "<p>".$row['Image']."</p>";
                       ?></div><?php
                  ?></div><?php
                  
                endwhile;
				
	?>
	
</body>

</html>
