<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
        <script src="../js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <script>
            function sendajax() {
                
                $.ajax({
                    url:'listusers.php',
                    type:'POST',
                    data:"name=Tyrone&email=abc@gmail.com",
                    success: function(response){
                        $("#response").text(response);
                    }               
                });
            };
         
        </script>
               
        <div id="response"> </div>
        <input type="button" onclick="sendajax()" value="Send Ajax Request" />
    </body>
</html>