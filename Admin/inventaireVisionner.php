<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$Type = $_POST['type'];

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
    
       $query = "SELECT * FROM $Type"; 
       $result1 = mysqli_query($connect, $query);
    
endwhile;?>

    

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Version administrateur: inventaire</title>
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
                    <td>Prix</td>  
                    <td>Image</td>  
                    <td>Stock</td> 
                </tr>
        
                <?php while($row1 = mysqli_fetch_array($result1)): 
                $photo = $row1['Image'];?> 
                <tr>  
                    <td><?php echo $row1[0];?></td>
                    <td><?php echo $row1[1];?></td>
                    <td><?php echo $row1[2];?></td>
                    <td><?php echo $row1[3];?></td>
                    <td><?php echo '<img  width="50px" src="../Admin/Images/'.$row1['Image'].'">';?></td>
                    <td><?php echo $row1[5];?></td>
                </tr> 
                <?php endwhile;?> 
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