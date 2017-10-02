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
       
          <input type="radio" name="type" value="T-shirts">T-shirts<br>
          <input type="radio" name="type" value="Chemises">Chemises<br>
          <input type="radio" name="type" value="Pullover">Pull-over<br>
          <input type="radio" name="type" value="Pantalons">Pantalons<br>
          <input type="submit" name="submit1" value="Retour"/>  
          <input type="submit" name="submit2" value="Suivant"/>
        </form>  
        <?PHP
        if (isset($_POST['submit1'])) {
             Header("Location: index.php");
        }
        if (isset($_POST['submit2'])) {
            $selected_radio = $_POST['type'];
            if ($selected_radio == 'T-shirts'){
                Header("Location: TShirts.php");
                
            
            }else if ($selected_radio == 'Chemises'){
                print $selected_radio;
           
            }else if ($selected_radio == 'Pullover'){
                print $selected_radio;    
            
            }else if ($selected_radio == 'Pantalons'){
                print $selected_radio;
            }
        } 
         
        ?>
        
       
    </body>
</html>
