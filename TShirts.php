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
        <select name="Sexe" id="SexeID">
            <option name="Sexe" value="0" selected="selected">Choississez un sexe</option> 
            <option name="Sexe" value="H">H</option>
            <option name="Sexe" value="F">F</option>
        </select>
        <br>
        <select name="Marque" id="MarqueID">
            <option value="0" selected="selected">Choississez une marque</option> 
            <option value="Guess">Guess</option>
            <option value="Adidas">Adidas</option>  
            <option value="Nike">Nike</option>
            <option value="Levis">Levi's</option>  
            <option value="Obey">Obey</option> 
            <option value="Puma">Puma</option>  
            <option value="Reebok">Reebok</option> 
        </select>
        <br>
        <select name="Grandeur" id="GrandeurID">
            <option value="0" selected="selected">Choississez une grandeur</option> 
            <option value="S">S</option>
            <option value="M">M</option>  
            <option value="L">L</option>  
        </select>
        <br>
        <select name="Couleur" id="CouleurID">
            <option value="0" selected="selected">Choississez une couleur</option> 
            <option value="Rouge">Rouge</option>
            <option value="Bleu">Bleu</option>
            <option value="Vert">Vert</option>
            <option value="Noir">Noir</option>
            <option value="Blanc">Blanc</option>
        </select>
        <br>
        <select name="Saison" id="SaisonID">
            <option value="0" selected="selected">Choississez une saison</option> 
            <option value="Aut">Aut</option>
            <option value="Hiv">Hiv</option> 
            <option value="Pri">Pri</option>
            <option value="Ete">Ete</option>  
        </select>
        <br>
        <br>
        <form action="" method="post">
        <input type="submit" name="submit1" value="Retour"/>    
        <input type="submit" name="submit2" value="Suivant"/>
        </form>
        <?php
        if (isset($_POST['submit1'])) {
             Header("Location: Type.php");
             
        }else if (isset($_POST['submit2'])) {
            Header("Location: Ajouter.php");
               
        } 
        ?>
    </body>
</html>
