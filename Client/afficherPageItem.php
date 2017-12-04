

<!DOCTYPE html>
<html>

<head>

	<title>Afficher page de l'item sélectionné par le client</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>

<body>
	
	<?php 

	include 'entete.php'; 
        include 'trouverAttributsItem.php';
        
        $img = $_GET['Image'];
	$type = $_GET['Selection'];
	$id = $_GET['ID'];
	$nom = $_GET['Nom'];
	$sexe = $_GET['Sexe'];
	$prix = $_GET['Prix'];
        
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $databaseName = 'parinolas';

        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        
        $query = "show TABLES";
        $result = mysqli_query($connect, $query); // Get table names
            
       
        //Pour Quantite
        $query = "show TABLES";
        $result = mysqli_query($connect, $query);            
                    
        while($row = mysqli_fetch_array($result)):    
            if ($type == "hc"):
                $query1 = "SELECT Quantite FROM `hautsCourt` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "hl"):
                $query1 = "SELECT Quantite FROM `hautsLong` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "sh"):
                $query1 = "SELECT Quantite FROM `shorts` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "pa"):
                $query1 = "SELECT Quantite FROM `pantalons` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ve"):
                $query1 = "SELECT Quantite FROM `vestes` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "fo"):
                $query1 = "SELECT Quantite FROM `foulards` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ch"):
                $query1 = "SELECT Quantite FROM `chapeaux` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ce"):
                $query1 = "SELECT Quantite FROM `ceintures` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";               
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ga"):
                $query1 = "SELECT Quantite FROM `gants` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
        endwhile;
 
        while($row1 = mysqli_fetch_array($result1)): 
             $laQuantite = $row1[0];
		     
        endwhile;   
	
	echo 'L image est : '.$img;
	
	echo "<div class='item'>";
	
	echo '<img src="../Admin/Images/'.$img.'" width="400" height="400" >';
	echo '<br><br>ID : '.$id;
	echo "</div>";
	
	echo '<div class="descr">';
	echo '<p class="nomItem">'.$nom.'</p>';
	echo '<p class="prixItem">'.$prix.'$</p><br>';
	echo '<form class="elements" action="ajouterPanier.php" method="post">';
	echo '<label>Couleurs &nbsp&nbsp&nbsp&nbsp</label>';
	// Changer code pour afficher juste les couleurs disponibles
	echo '
		<select name="couleur"> 
                     <option value="Noir">Noir</option>
			<option value="Rouge">Rouge</option>
			<option value="Bleu">Bleu</option>
			<option value="Jaune">Jaune</option>
			<option value="Blanc">Blanc</option>
			<option value="Rose">Rose</option>
			<option value="Autres">Autres</option>
                </select><br><br>
		';
	echo '<label>Grandeur &nbsp&nbsp</label>';
	echo '
		<select name="grandeur">
                       <option value="Petit">Petit</option>
			<option value="Medium">Medium</option>
			<option value="Large">Large</option>
                </select><br><br>';
	
	echo '<label>Quantité &nbsp&nbsp&nbsp&nbsp</label>';
	echo '
		<select name="quantite">';
        
                        //Affiche la quantite restante
                        if ($laQuantite >= 0 && $laQuantite <= 5)  {
                                for ($i = 1; $i <= $laQuantite; $i++){
                                    echo "<option value='$i'>$i</option>";
                                }
                        } else {
                            
                        //Affiche une quantite maximum de 5
                            for ($i = 1; $i <= 5; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        }
                       
	echo	'</select>';
         
        //Affiche que l'item est en rupture de stock
        if ($laQuantite <= 0)  {
            echo '<a id="rupture"> *En rupture de stock</a>';
        }


        echo '<br><br><br>';
        
	echo '<input type="hidden" value="'.$type.'" name="Type">';
	echo '<input type="hidden" value="'.$sexe.'" name="Sexe">';
	echo '<input type="hidden" value="'.$id.'" name="ID">';
	echo '<input type="hidden" value="'.$nom.'" name="Nom">';
	echo '<input type="hidden" value="'.$prix.'" name="Prix">';
	
	echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<button type="submit">Ajouter
			<img class="panier" src="/PariNolas/Client/images/ajouterPanier.png" style="width: 35px; height: 30px;">
		</button>';
	echo '</form></div>';
	
	
	
	?>

	
</body>

</html>