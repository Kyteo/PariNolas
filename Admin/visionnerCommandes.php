<html>
<head>
	<title>Version administrateur: visionnement inventaire</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8">
</head>

<body>
	<pre>
		Bonjour, Administrateur! | <a href="adminDeconnecte.html">Se déconnecter</a>
	</pre><hr>
	<img src="pn-logo-petit.png" alt="PariNolas logo"><br><hr>
	
	<h2><u>Commandes recentes</u></h2><br>
        <?php
        $directory = "../Client/commandes/";
        $dir = opendir($directory);
        
        while (($file = readdir($dir)) !== false) {
        $filename = $directory . $file;
       
        echo '<a>'.$file.'</a>';
        
        $type = filetype($filename);
        if ($type == 'file') {
            
            
            $fichier = fopen($filename, "r");
            $row = 1;
            $count = 1;
            while(!feof($fichier)) {
       
            $ligne = fgets($fichier);
            $tab_ligne_lue = explode(" ", $ligne);
           
            
                
                
                
                if ($row == 1) {
                   echo '<table width="500" border="1" cellpadding="4">';
                   echo '<tr><td>';
                   echo "Nom: ".$ligne;
                   $row = $row + 1;  
                   echo '</td></tr>';
                   
                } else if ($row == 2) {
                   echo '<tr><td>';
                   echo "Email: ".$ligne;
                   $row = $row + 1;
                   echo '</td></tr>';
                   
                } else if ($row == 3) {
                   echo '<tr><td>';
                   echo "Adresse: ".$ligne;
                   $row = $row + 1;
                  
                } else if ($row == 4) {
                   echo " ".$ligne;
                   $row = $row + 1; 
                   echo '</td></tr>';
                   
                } else if ($row == 5) {
                   echo '<tr><td>';
                   echo "Methode de paiement: ".$ligne;
                   $row = $row + 1;   
                   echo '</td></tr>';
                  
                } else if ($row > 5) {
                   echo '<tr><td>';
                   echo "Article #".$count.": <br>";
                   echo "  - ".$tab_ligne_lue[3]."<br>";
                   echo "  - ".$tab_ligne_lue[0]."<br>";
                   echo "  - ".$tab_ligne_lue[1]."<br>";
                   echo "  - ".$tab_ligne_lue[5]."<br>";
                   echo "  - ".$tab_ligne_lue[6]."<br>";
                   echo "  - ".$tab_ligne_lue[7]."<br>";
                   echo "  - ".$tab_ligne_lue[4]."$<br>";
                   
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
</body>
</html>