<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$Type = $_POST['type'];
$ID = $_POST['id'];
$sql = '';

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
     if ($Type == "hautCourt"):
       $query = "SELECT * FROM `hauts à manches courtes`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "hautsLong"):
       $query = "SELECT * FROM `hauts à manches longues`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "shorts"):
       $query = "SELECT * FROM `shorts`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pantalons"):
       $query = "SELECT * FROM `pantalons`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "vestes"):
       $query = "SELECT * FROM `vestes`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "foulards"):
       $query = "SELECT * FROM `foulards`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "chapeaux"):
       $query = "SELECT * FROM `chapeaux`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ceintures"):
       $query = "SELECT * FROM `ceintures`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "gants"):
       $query = "SELECT * FROM `gants`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
endwhile;

while($row1 = mysqli_fetch_array($result1)):  
    if ($row1[0] == $ID):
        if ($Type == "hautCourt"):
            $sql = "DELETE FROM `hauts à manches courtes` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "hautsLong"):
            $sql = "DELETE FROM `hauts à manches longues` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "shorts"):
            $sql = "DELETE FROM `shorts` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "pantalons"):
            $sql = "DELETE FROM `pantalons` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "vestes"):
            $sql = "DELETE FROM `vestes` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "foulards"):
            $sql = "DELETE FROM `foulards` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "chapeaux"):
            $sql = "DELETE FROM `chapeaux` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "ceintures"):
            $sql = "DELETE FROM `ceintures` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "gants"):
            $sql = "DELETE FROM `gants` WHERE ID LIKE '$ID'";
        endif;
    endif;              
endwhile;


?> 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Version administrateur: suppression d'item de l'inventaire</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8">
    </head>
     <body>
         <pre>
		Bonjour, Administrateur! | <a href="adminDeconnecte.html">Se déconnecter</a>
	</pre><hr>
	<img src="pn-logo-petit.png" alt="PariNolas logo"><br><hr>
	
	<h2><u>
            <?php if(!$sql == ''){
    
                        if(!mysqli_query($connect, $sql)){
                                echo 'Not Deleted';
                        }else{
                                echo 'Deleted';
                        }
                   }else{    
                                echo 'Item not found, nothing was deleted';
                   }
            ?> 
        </u></h2><br>
        
    </body>
</html>

<?php       
header("refresh:5; url= adminAccueil.html");        
?> 