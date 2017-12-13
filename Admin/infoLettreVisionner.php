<?php ?>

<html>
<head>
	<title>Version administrateur: visionnement infolettre</title>
	<meta charset="UTF-8">
	<link href="design.css" type="text/css" rel="stylesheet" />
	
</head>

<body>
	<hr><span class="voirInfoLettres"><img src="pn-logo-petit.png" alt="PariNolas logo"><br></span><hr>
	
	<div class="voirInfoLettres">
		<h2>Commandes récentes</h2>
	        <?php
	        $filename = "../Client/infolettre.txt";
	       
    
	        
    
	        $type = filetype($filename);
	        if ($type == 'file') {
        
        
	            $fichier = fopen($filename, "r");
	            $row = 0;
	            
                    
	            while(!feof($fichier)) {
   
	            $ligne = fgets($fichier);
	            $tab_ligne_lue = explode(" ", $ligne);
      
                    
                    echo "".$tab_ligne_lue[0]."</br>";
                 
    
	        }
	    }
	
        ?>
	</div>
        </br>
        <a  href="adminAccueil.html"><button>Retour accueil</button></a>
</body>
</html>
