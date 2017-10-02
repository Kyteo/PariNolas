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
       
          <input type="radio" name="type" value="Ajouter">Ajouter<br>
          <input type="radio" name="type" value="Visionner">Visionner<br>
          <input type="radio" name="type" value="Supprimer">Supprimer<br>
          <input type="radio" name="type" value="ContactezNous">ContactezNous<br>
          <input type="submit" name="submit" value="Suivant"/>
          
        </form>  
        <?PHP
        if (isset($_POST['submit'])) {
            $selected_radio = $_POST['type'];
            if ($selected_radio == 'Ajouter'){
                Header("Location: Type.php");
                
            
            }else if ($selected_radio == 'Visionner'){
                Header("Location: View.php");
           
            }else if ($selected_radio == 'Supprimer'){
                print $selected_radio;    
            
            }else if ($selected_radio == 'ContactezNous'){
                print $selected_radio;
            }
   
        }    
        ?>
        
       
    </body>
</html>
