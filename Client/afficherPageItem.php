

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
        
        $img = $_GET['Image'];
	$type = $_GET['Selection'];
	$id = $_GET['ID'];
	$nom = $_GET['Nom'];
	$sexe = $_GET['Sexe'];
	$grandeur = $_GET['Grandeur'];
	$prix = $_GET['Prix'];
        
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $databaseName = 'parinolas';

        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        
        $query = "show TABLES";
        $result = mysqli_query($connect, $query); // Get table names
            
        //Pour Couleurs
        while($row = mysqli_fetch_array($result)):    
            if ($type == "hc"):
                $query1 = "SELECT Couleur FROM `hautsCourt` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "hl"):
                $query1 = "SELECT Couleur FROM `hautsLong` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "sh"):
                $query1 = "SELECT Couleur FROM `shorts` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "pa"):
                $query1 = "SELECT Couleur FROM `pantalons` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ve"):
                $query1 = "SELECT Couleur FROM `vestes` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "fo"):
                $query1 = "SELECT Couleur FROM `foulards` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ch"):
                $query1 = "SELECT Couleur FROM `chapeaux` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ce"):
                $query1 = "SELECT Couleur FROM `ceintures` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";               
                $result1 = mysqli_query($connect, $query1);
            endif;
            if ($type == "ga"):
                $query1 = "SELECT Couleur FROM `gants` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query1);
            endif;
        endwhile;
        
        
        
        //Pour Grandeur
        $query = "show TABLES";
        $result = mysqli_query($connect, $query);
        
        while($row2 = mysqli_fetch_array($result)):    
            if ($type == "hc"):
                $query2 = "SELECT Grandeur FROM `hautsCourt` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "hl"):
                $query2 = "SELECT Grandeur FROM `hautsLong` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "sh"):
                $query2 = "SELECT Grandeur FROM `shorts` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "pa"):
                $query2 = "SELECT Grandeur FROM `pantalons` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "ve"):
                $query2 = "SELECT Grandeur FROM `vestes` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "fo"):
                $query2 = "SELECT Grandeur FROM `foulards` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "ch"):
                $query2 = "SELECT Grandeur FROM `chapeaux` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "ce"):
                $query2 = "SELECT Grandeur FROM `ceintures` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";               
                $result2 = mysqli_query($connect, $query2);
            endif;
            if ($type == "ga"):
                $query2 = "SELECT Grandeur FROM `gants` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result2 = mysqli_query($connect, $query2);
            endif;
        endwhile;
        
        $compte2 = 0;
        
        while($row3 = mysqli_fetch_array($result2)): 
            $laGrandeur = $row3[0];
            $compte2 = $compte2 + 1;
        endwhile; 
        
        //Pour Quantite
        $query = "show TABLES";
        $result = mysqli_query($connect, $query);            
                    
        while($row4 = mysqli_fetch_array($result)):    
            if ($type == "hc"):
                $query3 = "SELECT Quantite FROM `hautsCourt` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "hl"):
                $query3 = "SELECT Quantite FROM `hautsLong` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "sh"):
                $query3 = "SELECT Quantite FROM `shorts` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "pa"):
                $query3 = "SELECT Quantite FROM `pantalons` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "ve"):
                $query3 = "SELECT Quantite FROM `vestes` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "fo"):
                $query3 = "SELECT Quantite FROM `foulards` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "ch"):
                $query3 = "SELECT Quantite FROM `chapeaux` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "ce"):
                $query3 = "SELECT Quantite FROM `ceintures` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";               
                $result3 = mysqli_query($connect, $query3);
            endif;
            if ($type == "ga"):
                $query3 = "SELECT Quantite FROM `gants` WHERE ID LIKE '$id' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result3 = mysqli_query($connect, $query3);
            endif;
        endwhile;
 
        while($row5 = mysqli_fetch_array($result3)): 
             $laQuantite = $row5[0];
		     
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
                     <option value="nr">Noir</option>
			<option value="rg">Rouge</option>
			<option value="be">Bleu</option>
			<option value="jn">Jaune</option>
			<option value="ba">Blanc</option>
			<option value="rs">Rose</option>
			<option value="au">Autre</option>
                </select><br><br>
		';
	echo '<label>Grandeur &nbsp&nbsp</label>';
	echo '
		<select name="grandeur">
			<option value="S">Petit</option>
			<option value="M">Medium</option>
			<option value="L">Large</option>
	</select><br><br>
	';
	echo '<label>Quantité &nbsp&nbsp&nbsp&nbsp</label>';
	echo '
		<select name="quantite">';
                        for ($i = 1; $i <= $laQuantite; $i++){
                            echo "<option value='$i'>$i</option>";
                        }
                       
	echo	'</select>';
         
        if ($laQuantite == 0)  {
         
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