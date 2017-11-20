<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$ID = $_POST['id'];

$query = "SELECT * FROM `usagers`";
$result = mysqli_query($connect, $query); 

?> 
    

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Version administrateur: visionnement d'un compte client</title>
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
                    <td>Prénom</td>
                    <td>Email</td>        
                </tr>
        
                <?php while($row1 = mysqli_fetch_array($result)): 
                        if ($row1[0] == $ID):?>  
                            <tr>  
                                <td><?php echo $row1[0];?></td>
                                <td><?php echo $row1[1];?></td>
                                <td><?php echo $row1[2];?></td>
                                <td><?php echo $row1[3];?></td>
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