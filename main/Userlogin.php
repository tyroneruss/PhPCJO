<!DOCTYPE html>

<!-- Code to add the main components from the template-->
<?php include 'includes/template1.php';?>
<br></br>

<html>
    <head>
      
        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="../css_tm/style.css">
    </head>
        <body>
            
            <!--User login text box and password text box-->
            <form>
                <div class = "login">
                    
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <br></br>

                    <input type="password" placeholder="Enter Password" name="psw" required>
                    
                    <br>
                    <button type="submit">Login</button>
                    <br></br>
                    <!--check box for remember me-->
                    <input type="checkbox" checked="checked">Remember me
                </div>
            </form>
            
        </body>
  
       
</html>


