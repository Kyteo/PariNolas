<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$target = "../Admin/Images";

$Type = $_POST['type'];
$ID = $_POST['id'];
$sql = '';

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
     if ($Type == "hautsCourt"):
       $query = "SELECT Image FROM `hautsCourt` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "hautsLong"):
       $query = "SELECT Image FROM `hautsLong` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "shorts"):
       $query = "SELECT Image FROM `shorts` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pantalons"):
       $query = "SELECT Image FROM `pantalons` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "vestes"):
       $query = "SELECT Image FROM `vestes` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "foulards"):
       $query = "SELECT Image FROM `foulards` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "chapeaux"):
       $query = "SELECT Image FROM `chapeaux` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "ceintures"):
       $query = "SELECT Image FROM `ceintures` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "gants"):
       $query = "SELECT Image FROM `gants` WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query);
    endif;
endwhile;

while($row3 = mysqli_fetch_array($result1)):
          unlink($target.'/'.$row3[0]);
endwhile;
                               
$query = "show TABLES";
$result = mysqli_query($connect, $query);

while($row1 = mysqli_fetch_array($result)):  
     if ($Type == "hautsCourt"):
       $query2 = "SELECT * FROM `hautsCourt`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "hautsLong"):
       $query2 = "SELECT * FROM `hautsLong`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "shorts"):
       $query2 = "SELECT * FROM `shorts`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "pantalons"):
       $query2 = "SELECT * FROM `pantalons`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "vestes"):
       $query2 = "SELECT * FROM `vestes`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "foulards"):
       $query2 = "SELECT * FROM `foulards`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "chapeaux"):
       $query2 = "SELECT * FROM `chapeaux`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "ceintures"):
       $query2 = "SELECT * FROM `ceintures`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
    if ($Type == "gants"):
       $query2 = "SELECT * FROM `gants`"; 
       $result2 = mysqli_query($connect, $query2);
    endif;
endwhile;


while($row2 = mysqli_fetch_array($result2)): 
    if ($row2[0] == $ID):
        if ($Type == "hautsCourt"):
            $sql = "DELETE FROM `hautsCourt` WHERE ID LIKE '$ID'";
        endif;
        if ($Type == "hautsLong"):
            $sql = "DELETE FROM `hautsLong` WHERE ID LIKE '$ID'";
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
        <hr><img src="pn-logo-petit.png" alt="PariNolas logo"><br><hr>
	
	<h2><u>
            <?php if(!$sql == ''){
    
                        if(!mysqli_query($connect, $sql)){
                                echo 'Non supprimer';
                        }else{
                                echo 'Supprimer';
                                
                                while($row3 = mysqli_fetch_array($result1)):
                                    echo $row3[0];
                                    unlink($target.'/'.$row3[0]);
                                    endwhile;
                        }
                   }else{    
                                echo 'Usager non trouvé, rien de supprimer';
                   }
            ?> 
        </u></h2><br>
        
    </body>
</html>

<?php       
header("refresh:5; url= adminAccueil.html");        
?> 