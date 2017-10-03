<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

$Type = $_POST['Type'];
$ID = $_POST['ID'];
$Sexe = $_POST['Sexe'];
$Marque = $_POST['Marque'];
$Grandeur = $_POST['Grandeur'];
$Couleur = $_POST['Couleur'];
$Saison = $_POST['Saison'];
$Prix = $_POST['Prix'];
$sql = "";

while($row = mysqli_fetch_array($result)): 
    
    if ($row[0] == $Type):
        
        if ($Type == "t-shirts"):
            $sql = "INSERT INTO `t-shirts`(ID,Sexe,Marque,Grandeur,Couleur,Saison,Prix) VALUES ('$ID','$Sexe ','$Marque','$Grandeur','$Couleur','$Saison','$Prix')";
   
        endif;
        if ($Type == "chemises"):
            $sql = "INSERT INTO `chemises`(ID,Sexe,Marque,Grandeur,Couleur,Saison,Prix) VALUES ('$ID','$Sexe ','$Marque','$Grandeur','$Couleur','$Saison','$Prix')";

        endif;
        if ($Type == "pantalons"):
            $sql = "INSERT INTO `pantalons`(ID,Sexe,Marque,Grandeur,Couleur,Saison,Prix) VALUES ('$ID','$Sexe ','$Marque','$Grandeur','$Couleur','$Saison','$Prix')";

        endif;
        if ($Type == "pull-over"):
            $sql = "INSERT INTO `pull-over`(ID,Sexe,Marque,Grandeur,Couleur,Saison,Prix) VALUES ('$ID','$Sexe ','$Marque','$Grandeur','$Couleur','$Saison','$Prix')";

        endif;
    endif;
endwhile;

if(!mysqli_query($connect, $sql)){
    echo 'Not Inserted';
}else{
    echo 'Inserted';
}

header("refresh:5; url= index.php");        
?> 