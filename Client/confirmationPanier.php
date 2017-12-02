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
            <div id="confirmCommande">
		<h1 class="confirmation">Confirmation de la commande</h1>
            <br>
	';
        
        $nom = $_POST['nomClient'];
        $prenom = $_POST['prenomClient'];
        $email = $_POST['emailClient'];
        $adresse = $_POST['adresseClient'];
        $codePostal = $_POST['codePostal'];
        $province = $_POST['province'];
        $pays = $_POST['pays'];
        $methode = $_POST['methode'];
        
        echo '<div id="adresseExpedition">';
	echo '<h2 class="titreConfirmation">Adresse d&apos;expédition</h2>';
        echo $nom.', '.$prenom.'</br>';
        echo $email.'</br>';
        echo $adresse.', '.$codePostal.'</br>';
        echo $province.', '.$pays.'</br>';
        echo '---------------- </br></br>';
        echo 'Methode de paiement: '.$methode.'</br></br>';
        echo '---------------- </br></br>';
        echo '</div';
        
        echo '<h2 class="titreConfirmation">Vos items choisis</h2>';
    
        echo '<div id="itemsCommande">';
        
        while(!feof($fichier)) {
            
            $ligne = fgets($fichier);
	    $tab_ligne_lue = explode(" ", $ligne);
            
            if($tab_ligne_lue[1] == 'M' || $tab_ligne_lue[1] == 'm') {
		$selection = 'Hommes';
            } else {
		$selection = 'Femmes';
            }
            
            if ($tab_ligne_lue[0] != ""){
                echo 'Nom: '.$tab_ligne_lue[3].' <br>
                    Sélection: '.$selection.' <br>
                    Grandeur: '.$tab_ligne_lue[6].' <br>
                    Couleur: '.$tab_ligne_lue[5].' <br>
                    Prix unitaire: '.$tab_ligne_lue[4].' <br>
                    Quantité: '.$tab_ligne_lue[7].' <br>
                    ------------ </br>';
            }
       
        }
        
        echo '</div>';
        echo '</div>';
        
       echo '<form action="confirmationAchat.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="'.$nom.'" name="nom">
		<input type="hidden" value="'.$prenom.'" name="prenom">
                <input type="hidden" value="'.$email.'" name="email">
		<input type="hidden" value="'.$adresse.'" name="adresse">
		<input type="hidden" value="'.$codePostal.'" name="codePostal">
		<input type="hidden" value="'.$province.'" name="province">
		<input type="hidden" value="'.$pays.'" name="pays">
		<input type="hidden" value="'.$methode.'" name="methode">
	              
                <button id="placerCommande" name="delete" type="submit">Placer ma commande</button>
                </form>';
               
	
	 include 'basDePage.php';      
?>      
</body>
</html>