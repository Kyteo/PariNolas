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
        <form action="" method="post">
          <select name="Type">
            <option name="Type" value="0" selected="selected">Choississez un type</option> 
            <option name="Type" value="chemises">chemises</option>
            <option name="Type" value="pantalons">pantalons</option>
            <option name="Type" value="pull-over">pull-over</option>
            <option name="Type" value="t-shirts">t-shirts</option>
           </select>
            <input type="submit" name="submit" value="Retour"/>
            <input type="submit" name="submit1" value="Effacer"/>
            <input type="submit" name="submit2" value="Ajouter"/>
        </form>
 
        <?PHP
        if (isset($_POST['submit'])) {
             Header("Location: index.php");
             
        }else if (isset($_POST['submit1'])) { 
                Header("Location: effacer.php");          
   
        }else if (isset($_POST['submit2'])) { 
                Header("Location: view.php");          
        } 
        
        ?>
             
    </body>
</html>
