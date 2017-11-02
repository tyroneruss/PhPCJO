    <?php include '../includes/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/userstyle.css">

    <form action="./db/checkloginDb.php" method="POST">              
        <div id="wrapper"> 
            
            <div id="userform_bg" align="center">
                <h1 id="user_h1">Please Login</h1>
                <span> 
                       <div id="login_input" >
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                            <?php
                                if(!empty($_GET['message'])) {
                                    $message = $_GET['message'];
                                    echo '<br><font color="red" size="4">' . $message . '</font>';
                                }                       
                            ?>
                            <br><br><label>Username</label>&nbsp;&nbsp;
                            <input id="user_input" type="text" name='username' Required />&nbsp;
                            <br><br><label>Password</label>&nbsp;&nbsp;
                            <input id="user_input" type="password" name='password' Required />
                            <br>
                            <a href="login.php"></a>
                       </div>
  
                </span>
                <div id="inputwrapper">  
                    <br>
                   <input id="inputbutton" type="submit" value="LOGIN" />
                   &nbsp;&nbsp;&nbsp;
                   <input id="inputbutton" onclick="window.location.href='register.php'"  
                          type="button" value="REGISTER" />
                    
                </div>
            </div>
            
        </div>
    </form>  
   <?php    
        include '../includes/footer.php'; 
       
   ?>  

    </body>
</html>

