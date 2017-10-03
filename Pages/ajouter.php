<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$ID = $_POST['ID'];
$Sexe = $_POST['Sexe'];
$Marque = $_POST['Marque'];
$Grandeur = $_POST['Grandeur'];
$Couleur = $_POST['Couleur'];
$Saison = $_POST['Saison'];
$Prix = $_POST['Prix'];


$sql = "INSERT INTO `t-shirts`(`ID`, `Sexe`, `Marque`, `Grandeur`, `Couleur`, `Saison`, `Prix`) VALUES ('$ID','$Sexe ','$Marque','$Grandeur','$Couleur','$Saison','$Prix')";

if(!mysqli_query($connect, $sql)){
    echo 'Not Inserted';
}else{
    echo 'Inserted';
}

header("refresh:2; url= View.php");        
?> 