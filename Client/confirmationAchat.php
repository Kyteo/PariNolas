<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 ?>
<html>

<head>

	<title>Confirmation de l achat</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>
<body>
<?php
        
	include 'entete.php'; 
        include 'trouverAttributsItem.php';
        
        $fichier = fopen("panier.txt", "r");
        
        while(!feof($fichier)) {
            
            $ligne = fgets($fichier);
	    $tab_ligne_lue = explode(" ", $ligne);
            
            echo 'ID: '.$tab_ligne_lue[2].' </br>
            Sexe: '.$tab_ligne_lue[1].' </br>
            Quantite: '.$tab_ligne_lue[7].' </br>'
                    .'----------------';
            
            
            
            
            
        }
        
        
        
        
        ?>      
</body>
</html>