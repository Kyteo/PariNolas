
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
        
        echo '
            <br>
            <div id="confirmCommande">
		<h1 class="confirmation">Confirmation de l achat</h1>
            <br>
	';
        
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $databaseName = 'parinolas';

        $connect = mysqli_connect($hostname, $username, $password, $databaseName);

        $nomClient = $_POST['nom'];
        $prenomClient = $_POST['prenom'];
        $emailClient = $_POST['email'];
        $adresseClient = $_POST['adresse'];
        $codePostal = $_POST['codePostal'];
        $province = $_POST['province'];
        $pays = $_POST['pays'];
        $methode = $_POST['methode'];
        
        $fichier = fopen("panier.txt", "r");
       
        echo '<div id="adresseExpedition">';
	echo '<h2 class="titreConfirmation">Adresse d&apos;expédition</h2>';
        echo $nomClient.', '.$prenomClient.'</br>';
        echo $emailClient.'</br>';
        echo $adresseClient.', '.$codePostal.'</br>';
        echo $province.', '.$pays.'</br>';
        echo '---------------- </br>';
        echo 'Methode de paiement: '.$methode.'</br>';
        echo '---------------- </br>';
        echo '</div';
        
        echo '<h2 class="titreConfirmation">Vos items choisis:</h2></br></br>';
    
        echo '<div id="itemsCommande">';
        
        while(!feof($fichier)) {
            $query = "show TABLES";
            $result = mysqli_query($connect, $query); // Get table names
        
            $ligne = fgets($fichier);
	    $tab_ligne_lue = explode(" ", $ligne);
            
            if ($tab_ligne_lue[0] != ""){
                           
            $type = $tab_ligne_lue[0];
            $ID = $tab_ligne_lue[2];
            $nom = $tab_ligne_lue[3];
            $sexe = $tab_ligne_lue[1];
            $quantite = $tab_ligne_lue[7];          
            
            echo 'Nom: '.$nom.' <br>
                    Sélection: '.$sexe.' <br>
                    Grandeur: '.$tab_ligne_lue[6].' <br>
                    Couleur: '.$tab_ligne_lue[5].' <br>
                    Prix unitaire: '.$tab_ligne_lue[4].' <br>
                    Quantité: '.$quantite.' <br>
                    ------------ </br>';
            
        echo '</div>';
        echo '</div>';
        
        while($row = mysqli_fetch_array($result)):    
            if ($type == "hc"):
                $query = "SELECT Quantite FROM `hautsCourt` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "hl"):
                $query = "SELECT Quantite FROM `hautsLong` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "sh"):
                $query = "SELECT Quantite FROM `shorts` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "pa"):
                $query = "SELECT Quantite FROM `pantalons` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "ve"):
                $query = "SELECT Quantite FROM `vestes` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "fo"):
                $query = "SELECT Quantite FROM `foulards` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "ch"):
                $query = "SELECT Quantite FROM `chapeaux` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";  
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "ce"):
                $query = "SELECT Quantite FROM `ceintures` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'";               
                $result1 = mysqli_query($connect, $query);
            endif;
            if ($type == "ga"):
                $query = "SELECT Quantite FROM `gants` WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result1 = mysqli_query($connect, $query);
            endif;
        endwhile;    

        
        
        
        
        while($row1 = mysqli_fetch_array($result1)):  
                
        
                
                $quantite2 = $row1[0] - (int)$quantite;
                
                
                
                $type2 = trouverSelection2($type);
                
                $query2 = "UPDATE $type2 SET  Quantite = $quantite2 WHERE ID LIKE '$ID' AND NOM LIKE '$nom' AND SEXE LIKE '$sexe'"; 
                $result2 = mysqli_query($connect, $query2);
        endwhile;
        
        
        
            }
        }
        
        
        
        
        date_default_timezone_set('America/Montreal');
        $date = date('Y-m-d_H-i-s');
       
        if(!file_exists("../Client/commandes/Commandes-'.$date.'.txt")) {
		$fichier = fopen("../Client/commandes/Commandes-'.$date.'.txt", "w");
	}
	
        
        $fichier2 = "../Client/commandes/Commandes-'.$date.'.txt";
        
        $courant = file_get_contents($fichier2);
	
        $courant .= $nomClient;
	$courant .= " ".$prenomClient;
        $courant .= "\n";
        $courant .= $emailClient;
        $courant .= "\n";
	$courant .= $adresseClient;
        $courant .= "\n";
	$courant .= $codePostal;
	$courant .= " ".$province;
        $courant .= " ".$pays;
        $courant .= "\n";
        
        $courant .= $methode;
        $courant .= "\n";
        
        $fichier = fopen("panier.txt", "r");
        $row = 1;
        while(!feof($fichier)) {
        
            
        $ligne = fgets($fichier);
	$tab_ligne_lue = explode(" ", $ligne);
        if ($tab_ligne_lue[0] != ""){
            
        
	$courant .= $tab_ligne_lue[0];
	$courant .= " ".$tab_ligne_lue[1];
	$courant .= " ".$tab_ligne_lue[2];
	$courant .= " ".$tab_ligne_lue[3];
	$courant .= " ".$tab_ligne_lue[4];
	$courant .= " ".$tab_ligne_lue[5];
	$courant .= " ".$tab_ligne_lue[6];
	$courant .= " ".$tab_ligne_lue[7];
        
        
	file_put_contents($fichier2, $courant);
        
        
        
        $row = $row + 1;
            }
         }
        
        while ($row != -1) {
            
           $file_out = file("panier.txt");
            unset($file_out[$row]);
            file_put_contents("panier.txt", implode("", $file_out)); 
            $row = $row - 1;
        }
         
        $to = "nicolasbreant@hotmail.com";
        $subject = "Parinolas - Recu commande";
        $txt = "Recu...";
        $headers = "From: nicolasbreant@hotmail.com";


        mail($to,$subject,$txt,$headers); 
        
        include 'basDePage.php';  
        ?>      
</body>
</html>