<?php
    $msg = "";
    if(isset($_POST["upload"])){

        $target = "../Admin/Images/".basename($_FILES["image"]["name"]);

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
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
            if ($Type == "hautsCourt"):
                $sql = "INSERT INTO `hautsCourt`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "hautsLong"):
                $sql = "INSERT INTO `hautsLong`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "shorts"):
                $sql = "INSERT INTO `shorts`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')";
                mysqli_query($db, $sql);
            endif;
            if ($Type == "pantalons"):
                $sql = "INSERT INTO `pantalons`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "vestes"):
                $sql = "INSERT INTO `vestes`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "foulards"):
                $sql = "INSERT INTO `foulards`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "chapeaux"):
                $sql = "INSERT INTO `chapeaux`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "ceintures"):
                $sql = "INSERT INTO `ceintures`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')"; 
                mysqli_query($db, $sql);
            endif;
            if ($Type == "gants"):
                $sql = "INSERT INTO `gants`(ID,Nom,Sexe,Prix,Image,Quantite) VALUES ('$id','$nom','$sexe','$prix','$image','$quantite')";
                mysqli_query($db, $sql);
            endif;
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
                <input type="text" id="nom" name="nom"  maxlength="40" size="20"><br><br>
		<label for="id">ID : </label>
		<input type="text" id="id" name="id" maxlength="50" size="20"><br><br>
		<label for="sexe">Sexe : </label>
		<input type="radio" id="sexe" name="sexe" value="F" checked="checked" /> Femme
		<input type="radio" id="sexe" name="sexe" value="M" /> Homme<br><br>
		
		<label for="type">Type : </label>
		<select name="type" id="type">
			<option value="hautsLong">Haut &agrave manches longues</option>
			<option value="hautsCourt">Haut &agrave manches courtes</option>
			<option value="shorts">Shorts</option>
			<option value="pantalons">Pantalons</option>
			<option value="vestes">Vestes</option>
			<option value="foulards">Foulards</option>
                        <option value="chapeaux">Chapeaux</option>
                        <option value="ceintures">Ceintures</option>
                        <option value="gants">Gants</option>
		</select><br><br>
		<label for="prix">Prix : </label>
		<input type="text" id="prix" name="prix" maxlength="8" size="8"><br><br>
		               
                <label for="quantite">Quantité : </label>
                <input type="text" id="quantite" name="quantite" maxlength="50" size="20" min="1" value="1"><br><br>
                
		<label for="image">Image : </label>
		<input type="file" name="image" accept="image/gif, image/jpeg, image/png"><br><br><br>

		<input type="submit" name="upload" value="Upload">
        </form>
        <a  href="adminAccueil.html"><button>Retour accueil</button></a>
</body>
</html>