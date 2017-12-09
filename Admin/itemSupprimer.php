<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$target = "../Admin/Images";

$Type = $_POST['type'];
$ID = $_POST['id'];
$sql = '';

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
       $query = "SELECT Image FROM $Type WHERE ID LIKE '$ID'"; 
       $result1 = mysqli_query($connect, $query); 
endwhile;


while($row3 = mysqli_fetch_array($result1)):
          unlink($target.'/'.$row3[0]);
endwhile;
        
		                       
$query = "show TABLES";
$result = mysqli_query($connect, $query);

while($row1 = mysqli_fetch_array($result)):  
       $query2 = "SELECT * FROM $Type"; 
       $result2 = mysqli_query($connect, $query2);
endwhile;


while($row2 = mysqli_fetch_array($result2)): 
    if ($row2[0] == $ID):

        $sql = "DELETE FROM $Type WHERE ID LIKE '$ID'";
        
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
                                echo '<h2>Erreur! Non supprimé</h2>';
                        }else{
                                echo '<h2>Item supprimé</h2>';
                                
                                while($row3 = mysqli_fetch_array($result1)):
                                    echo $row3[0];
                                    unlink($target.'/'.$row3[0]);
                                    endwhile;
                        }
                   }else{    
                                echo 'Usager non trouvé, rien de supprimé';
                   }
            ?> 
        </u></h2><br>
        
    </body>
</html>

<?php       
header("refresh:5; url= adminAccueil.html");        
?> 