<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$Type = $_POST['Type'];

$query = "show TABLES";
$result = mysqli_query($connect, $query); // Get table names

while($row = mysqli_fetch_array($result)):    
    if ($Type == "t-shirts"):
       $query = "SELECT * FROM `t-shirts`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "chemises"):
       $query = "SELECT * FROM `chemises`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pantalons"):
       $query = "SELECT * FROM `pantalons`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
    if ($Type == "pull-over"):
       $query = "SELECT * FROM `pull-over`"; 
       $result1 = mysqli_query($connect, $query);
    endif;
endwhile;?> 

    

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PariNolas</title>
        
    </head>
     <body>
         <table>
                <tr>  
                    <td>ID</td>
                    <td>Sexe</td>
                    <td>Marque</td>
                    <td>Grandeur</td>
                    <td>Couleur</td>
                    <td>Saison</td>
                    <td>Prix</td>
                </tr>
        
                <?php while($row1 = mysqli_fetch_array($result1)): ?>  
                <tr>  
                    <td><?php echo $row1[0];?></td>
                    <td><?php echo $row1[1];?></td>
                    <td><?php echo $row1[2];?></td>
                    <td><?php echo $row1[3];?></td>
                    <td><?php echo $row1[4];?></td>
                    <td><?php echo $row1[5];?></td>
                    <td><?php echo $row1[6];?></td>
                </tr> 
                <?php endwhile;?> 
            </table> 
         <form action="" method="post">
         <input type="submit" name="submit" value="Retour"/>
         </form>
         <?php        
          if (isset($_POST['submit'])) {
             Header("Location: type.php");
          } 
         ?> 
    </body>
</html>