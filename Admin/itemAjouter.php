<?php
    $msg = "";
    if(isset($_POST["upload"])){

        $target = "../Admin/Images/".basename($_FILES["image"]["name"]);

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = 'root';
        $dbName     = 'parinolas';
    
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        $Type = $_POST['type'];
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $sexe = $_POST['sexe'];
        $prix = $_POST['prix'];
        $image = $_FILES["image"]["name"];
        $quantite = $_POST['quantite'];

        $query = "show TABLES";
        $result = mysqli_query($db, $query); // Get table names

        while($row = mysqli_fetch_array($result)):    
            
            $sql = "INSERT INTO `$Type`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
            mysqli_query($db, $sql);
            
        endwhile;

       
		if(mysqli_query($db, $sql)){
			echo 'Non Ajouter';
		}else{
			echo 'Ajouter';     
		}
         
	     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
	                $msg = "Image uploaded successfully";
	     }else{
	                $msg = "There was a problem uploading image";
        
	     }                       
       
	 }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Version administrateur: ajout d'item à l'inventaire</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8">
</head>
<body>
	<pre>
		Bonjour, Administrateur! | <a href="adminDeconnecte.html">Se déconnecter</a>
	</pre><hr>
	<img src="pn-logo-petit.png" alt="PariNolas logo"><br><hr>
	
	<h2><u>Ajout d'un item</u></h2><br>
	
        <form action="itemAjouter.php" method="post" enctype="multipart/form-data">        
		<label for="nom">Nom d'item : </label>
                <input type="text" id="nom" name="nom"  maxlength="25" size="27" required="required"><br><br>
		<label for="id">ID : </label>
		<input type="text" id="id" name="id" maxlength="4" size="8" required="required"><br><br>
		<label for="sexe">Sexe : </label>
		<input type="radio" id="sexe" name="sexe" value="F" checked="checked"/> Femme
		<input type="radio" id="sexe" name="sexe" value="M" /> Homme<br><br>
		
		<label for="type">Type : </label>
		<select name="type" id="type">
			
			<option value="hautslong">Haut &agrave manches longues</option>
			<option value="hautscourt">Haut &agrave manches courtes</option>
			<option value="shorts">Shorts</option>
			<option value="pantalons">Pantalons</option>
			<option value="vestes">Vestes</option>
			<option value="foulards">Foulards</option>
                        <option value="chapeaux">Chapeaux</option>
                        <option value="ceintures">Ceintures</option>
                        <option value="gants">Gants</option>
		</select><br><br>
		<label for="prix">Prix : </label>
		<input type="text" id="prix" name="prix" maxlength="8" size="8" required="required"> $<br><br>
		               
                <label for="quantite">Quantité : </label>
                <input type="text" id="quantite" name="quantite" maxlength="4" size="8" min="1" value="1" required="required"><br><br>
                
		<label for="image">Image : </label>
		<input type="file" name="image" accept="image/gif, image/jpeg, image/png" required="required"><br><br><br>

		<input type="submit" name="upload" value="Upload">
        </form>
        <a  href="adminAccueil.html"><button>Retour accueil</button></a>
</body>
</html>