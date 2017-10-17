<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

$Nom = $_POST['nom'];
$ID = $_POST['id'];
$Sexe = $_POST['sexe'];
$Type = $_POST['type'];
$Prix = $_POST['prix'];
$Couleur = $_POST['couleur'];
$Grandeur = $_POST['grandeur'];
$Image = $_POST['filename'];
$sql = "";

while($row = mysqli_fetch_array($result)): 
    
    if ($row[0] == $Type):
        
        if ($Type == "hautCourt"):
            $sql = "INSERT INTO `hauts à manches courtes`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";
   
        endif;
        if ($Type == "hautsLong"):
            $sql = "INSERT INTO `hauts à manches longues`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "shorts"):
            $sql = "INSERT INTO `shorts`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "pantalons"):
            $sql = "INSERT INTO `pantalons`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "vestes"):
            $sql = "INSERT INTO `vestes`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";
   
        endif;
        if ($Type == "foulards"):
            $sql = "INSERT INTO `foulards`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "chapeaux"):
            $sql = "INSERT INTO `chapeaux`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "ceintures"):
            $sql = "INSERT INTO `ceintures`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
        if ($Type == "gants"):
            $sql = "INSERT INTO `gants`(ID,Nom,Sexe,Grandeur,Couleur,Prix,Image) VALUES ('$ID','$Nom','$Sexe','$Grandeur','$Couleur','$Prix','$Image')";

        endif;
    endif;
endwhile;

if(!mysqli_query($connect, $sql)){
    echo 'Non ajouter!';
}else{
    echo 'Ajouter!';
}

header("refresh:5; url= adminAccueil.html");        
?> 