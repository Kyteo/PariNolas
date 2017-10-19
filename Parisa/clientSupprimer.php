<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$ID = $_POST['id'];
$sql = '';

$query = "SELECT * FROM `usagers`";
$result = mysqli_query($connect, $query); 

while($row = mysqli_fetch_array($result)):  
    if ($row[0] == $ID):    
            $sql = "DELETE FROM `usagers` WHERE ID LIKE '$ID'";
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
        <title>Version administrateur: suppression de compte client</title>
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
                                echo 'Non supprimer';
                        }else{
                                echo 'Supprimer';
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