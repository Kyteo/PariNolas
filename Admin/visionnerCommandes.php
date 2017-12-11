<?php ?>

<html>
<head>
	<title>Version administrateur: visionnement inventaire</title>
	<meta charset="UTF-8">
	<link href="design.css" type="text/css" rel="stylesheet" />
	
</head>

<body>
	<hr><span class="voirCommandes"><img src="pn-logo-petit.png" alt="PariNolas logo"><br></span><hr>
	
	<div class="voirCommandes">
		<h2>Commandes récentes</h2>
	        <?php
	        $directory = "../Client/commandes/";
	        $dir = opendir($directory);
    
                
                
	        while (($file = readdir($dir)) !== false) {
	        $filename = $directory.$file;
                
                
                if ($file != '.' && $file != '..'){
                    echo '<h3>'.$file.'</h3>';
                }
	        
    
	        $type = filetype($filename);
	        if ($type == 'file') {
        
        
	            $fichier = fopen($filename, "r");
	            $row = 1;
	            $count = 1;
	            while(!feof($fichier)) {
   
	            $ligne = fgets($fichier);
	            $tab_ligne_lue = explode(" ", $ligne);
       
        
            
            
            
	                if ($row == 1) {
	                   echo '<table class="voirCommandes">';
	                   echo '<tr><td class="blanc"><br>';
	                   echo "NOM: ".$ligne;
	                   $row = $row + 1;  
	                   echo '</td></tr>';
					   
					} else if ($row == 2) {
	                   echo '<tr><td class="gris">';
	                   echo "TÉLÉPHONE: ".$ligne;
	                   $row = $row + 1;   
	                   echo '</td></tr>';
					   
               
	                } else if ($row == 3) {
	                   echo '<tr><td class="blanc">';
	                   echo "EMAIL: ".$ligne;
	                   $row = $row + 1;
	                   echo '</td></tr>';
               
	                } else if ($row == 4) {
	                   echo '<tr><td class="gris">';
	                   echo "ADRESSE: ".$ligne;
	                   $row = $row + 1;
              
	                } else if ($row == 5) {
	                   echo " ".$ligne;
	                   $row = $row + 1; 
	                   echo '</td></tr>';
					   
	          
	                } else if ($row == 6) {
	                   echo '<tr><td class="blanc">';
	                   echo "MÉTHODE DE PAIEMENT: ".$ligne;
	                   $row = $row + 1;   
					   
	                } else if ($row == 7) {
	                   echo " ".$ligne;
	                   $row = $row + 1;   
	                   echo '</td></tr>';
              
	                } else if ($row > 7) {
						
					   echo '<tr"><td class="gris">';

	                   echo "ARTICLE #".$count.": <br><br>";
					   echo "
						   <table class='articles'>
					   		<tr>
								<th>Item</th>
								<th>Catégorie</th>
								<th>Sexe</th>
								<th>Couleur</th>
								<th>Grandeur</th>
								<th>Quantité</th>
								<th>Prix</th>
							</tr>";

					   echo "<tr>";
	                   echo "<td>".$tab_ligne_lue[3]."</td>";
	                   echo "<td>".$tab_ligne_lue[0]."</td>";
	                   echo "<td>".$tab_ligne_lue[1]."</td>";
	                   echo "<td>".$tab_ligne_lue[5]."</td>";
	                   echo "<td>".$tab_ligne_lue[6]."</td>";
	                   echo "<td>".$tab_ligne_lue[7]."</td>";
	                   echo "<td>".$tab_ligne_lue[4]."$</td>";
					   echo "</tr>";
					   echo "</table>";
						  
               
	                   $row = $row + 1;  
	                   $count = $count + 1;
	                   echo '</td></tr>';
	                }       

          
	           }     
	        echo '</table>';
    
	        }
	    }
	closedir($dir);
        ?>
	</div>
        </br>
        <a  href="adminAccueil.html"><button>Retour accueil</button></a>
</body>
</html>
