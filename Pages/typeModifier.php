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
        <form action="formulaireModif.php" method="post">
          <select name="Type">
            <option name="Type" value="0" selected="selected">Choississez table a modifier</option> 
            <option name="Type" value="chemises">chemises</option>
            <option name="Type" value="pantalons">pantalons</option>
            <option name="Type" value="pull-over">pull-over</option>
            <option name="Type" value="t-shirts">t-shirts</option>
           </select>
            <br> 
            ID : <input type="text" name="ID">Entrez 4 a 10 characters</input> 
           <br> 
           <select name="colonne">
            <option name="colonne" value="0" selected="selected">Choississez colonne a modifier</option> 
            <option name="colonne" value="ID">ID</option>
            <option name="colonne" value="Sexe">Sexe</option>
            <option name="colonne" value="Marque">Marque</option>
            <option name="colonne" value="Grandeur">Grandeur</option>
            <option name="colonne" value="Couleur">Couleur</option>
            <option name="colonne" value="Saison">Saison</option>
            <option name="colonne" value="Prix">Prix</option>
           </select>
            <input type="submit" name="submit" formaction="index.php" value="Retour"/>
            <input type="submit" name="submit1"value="Modifier"/>
        </form> 
    </body>
</html>
