<?php

?>


<html>

<head>

	<title>Confirmation de la commande</title>
	<meta charset="UTF-8">
	<link href="designClient.css" type="text/css" rel="stylesheet" />


</head>
<body>
<?php
        
	include 'entete.php'; 
        include 'trouverAttributsItem.php';
	$fichier = fopen("panier.txt", "r");
        
        echo '
		<br>
		<h1 class="confirmation">Confirmation de l achat</h1>
		<br>';
        
        $nom = $_POST['nomClient'];
        $prenom = $_POST['prenomClient'];
        $adresse = $_POST['adresseClient'];
        $codePostal = $_POST['codePostal'];
        $province = $_POST['province'];
        $pays = $_POST['pays'];
        $methode = $_POST['methode'];
        
        echo $nom.', '.$prenom.'</br>';
        echo $adresse.', '.$province.'</br>';
        echo $pays.'</br>';
        echo '---------------- </br></br></br>';
        echo 'Methode de paiement: '.$methode.'</br>';
        
        
        while(!feof($fichier)) {
            
            $ligne = fgets($fichier);
	    $tab_ligne_lue = explode(" ", $ligne);
            
            echo 'Nom: '.$tab_ligne_lue[3].' </br>
            Sexe: '.$tab_ligne_lue[1].' </br>
            Grandeur: '.$tab_ligne_lue[6].' </br>
            Couleur: '.$tab_ligne_lue[5].' </br>
            Prix: '.$tab_ligne_lue[4].' </br>
            ------------ </br>';
            
       
        }
        
        header("refresh:12; url=afficherPanier.php");
?>      
</body>
</html>