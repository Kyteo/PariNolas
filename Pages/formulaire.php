<?php   
        
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'parinolas';

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `t-shirts`";
$result1 = mysqli_query($connect, $query);
        
?>  

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
        <form action="ajouter.php" method="post">
         <select name="Type">
            <option name="Type" value="0" selected="selected">Choississez un type</option> 
            <option name="Type" value="chemises">chemises</option>
            <option name="Type" value="pantalons">pantalons</option>
            <option name="Type" value="pull-over">pull-over</option>
            <option name="Type" value="t-shirts">t-shirts</option>
        </select>
            <br>
            ID : <input type="text" name="ID"/> 
           <br> 
        <select name="Sexe" id="SexeID">
            <option name="Sexe" value="0" selected="selected">Choississez un sexe</option> 
            <option name="Sexe" value="H">H</option>
            <option name="Sexe" value="F">F</option>
        </select>
        <br>
        <select name="Marque" id="MarqueID">
            <option name="Marque" value="0" selected="selected">Choississez une marque</option> 
            <option name="Marque" value="Guess">Guess</option>
            <option name="Marque" value="Adidas">Adidas</option>  
            <option name="Marque" value="Nike">Nike</option>
            <option name="Marque" value="Levis">Levi's</option>  
            <option name="Marque" value="Obey">Obey</option> 
            <option name="Marque" value="Puma">Puma</option>  
            <option name="Marque" value="Reebok">Reebok</option> 
        </select>
        <br>
        <select name="Grandeur" id="GrandeurID">
            <option name="Grandeur" value="0" selected="selected">Choississez une grandeur</option> 
            <option name="Grandeur" value="S">S</option>
            <option name="Grandeur" value="M">M</option>  
            <option name="Grandeur" value="L">L</option>  
        </select>
        <br>
        <select name="Couleur" id="CouleurID">
            <option name="Couleur" value="0" selected="selected">Choississez une couleur</option> 
            <option name="Couleur" value="Rouge">Rouge</option>
            <option name="Couleur" value="Bleu">Bleu</option>
            <option name="Couleur" value="Vert">Vert</option>
            <option name="Couleur" value="Noir">Noir</option>
            <option name="Couleur" value="Blanc">Blanc</option>
        </select>
        <br>
        <select name="Saison" id="SaisonID">
            <option name="Saison" value="0" selected="selected">Choississez une saison</option> 
            <option name="Saison" value="Aut">Aut</option>
            <option name="Saison" value="Hiv">Hiv</option> 
            <option name="Saison" value="Pri">Pri</option>
            <option name="Saison" value="Ete">Ete</option>  
        </select>
        <br>
        Prix : <input type="text" name="Prix"/> 
        <br>
        <br>
                 
        <input type="submit" name="submit2" value="Suivant"/>
        </form>
        <?php
        if (isset($_POST['submit1'])) {
             Header("Location: Type.php");
             
        }else if (isset($_POST['submit2'])) {
            Header("Location: ajouter.php");
               
        } 
        ?>
    </body>
</html>
