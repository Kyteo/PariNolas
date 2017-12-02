<?php

        $to = "nicolasbreant@hotmail.com";
        $subject = "Parinolas - Recu commande";
        $txt = "Recu...";
        $headers = "From: nicolasbreant@hotmail.com";


        $test = mail($to,$subject,$txt,$headers); 
        
         if( $test == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }