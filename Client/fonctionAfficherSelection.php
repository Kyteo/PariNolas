<?php

function afficherSelection($selection, $sexe) {
           
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';
echo "Dans affi";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);


    $Type = $selection;
  
    $query = "show TABLES";
    $result = mysqli_query($connect, $query); // Get table names
    
    while($row = mysqli_fetch_array($result)):    
    if ($Type == "hc"):
       $query = "SELECT * FROM `hautsCourt` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "hl"):
       $query = "SELECT * FROM `hautsLong` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "sh"):
       $query = "SELECT * FROM `shorts` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pa"):
       $query = "SELECT * FROM `pantalons` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ve"):
       $query = "SELECT * FROM `vestes` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "fo"):
       $query = "SELECT * FROM `foulards` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ch"):
       $query = "SELECT * FROM `chapeaux` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ce"):
       $query = "SELECT * FROM `ceintures` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ga"):
       $query = "SELECT * FROM `gants` WHERE SEXE LIKE '$sexe'"; 
       $result1 = mysqli_query($connect, $query);
    endif;   
endwhile;
        
return $result1;
                
}
         

?>