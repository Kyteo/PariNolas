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

?> 
    

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Version administrateur: visionnement d'item de l'inventaire</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<meta charset="UTF-8">
    </head>
     <body>
         <pre>
		Bonjour, Administrateur! | <a href="adminDeconnecte.html">Se déconnecter</a>
	</pre><hr>
	<img src="pn-logo-petit.png" alt="PariNolas logo"><br><hr>
	
	<h2><u>Inventaire</u></h2><br>
        <ul>
         <table>
                 <tr>  
                    <td>ID</td>     
                    <td>Nom</td>
                    <td>Sexe</td>
                    <td>Grandeur</td>
                    <td>Couleur</td>
                    <td>Prix</td>  
                    <td>Image</td>  
                </tr>
        
                <?php while($row1 = mysqli_fetch_array($result1)): 
                        if ($row1[0] == $ID):?>  
                            <tr>  
                                <td><?php echo $row1[0];?></td>
                                <td><?php echo $row1[1];?></td>
                                <td><?php echo $row1[2];?></td>
                                <td><?php echo $row1[3];?></td>
                                <td><?php echo $row1[4];?></td>
                                <td><?php echo $row1[5];?></td>
                                <td><?php echo $row1[6];?></td>
                            </tr> 
                        <?php endif;
                 endwhile;?> 
            </table> 
         <form action="" method="post">
         <input type="submit" name="submit" value="Retour"/>
         </form>
         </ul>
         <?php        
          if (isset($_POST['submit'])) {
             Header("Location: adminAccueil.html");
          } 
         ?> 
    </body>
</html>