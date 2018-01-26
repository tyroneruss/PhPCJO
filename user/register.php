    <?php include '../includes/header.php'; ?>
    <link rel="stylesheet" type="text/css" href="../css/userstyle.css">

    <form action="./db/verifyuserDb.php" method="POST">
        <div id="wrapper"> 
            
            <div id="regform_bg" align="center">
                <h1 id="user_h1">Register User</h1>
                <span> 
                       <div id="login_input" >
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                            <?php
                                if(!empty($_GET['message'])) {
                                    $message = $_GET['message'];
                                    echo '<br><font color="red" size="4">' . $message . '</font>';
                                }                       
                            ?>
                            <br><br><label>Username<font color="red">*</font></label>&nbsp;&nbsp;
                            <input id="user_input" type="text" name='username' Required />&nbsp;
                            <br><br><label>Email<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="user_input" type="text" name='email' Required />
                            <br><br><label>Password<font color="red">*</font></label>&nbsp;&nbsp;
                            <input id="user_input" type="password" name='password' Required />
                            <br><br><label>Confirm-Password<font color="red">*</font></label>&nbsp;&nbsp;
                            <input id="user_input" type="password" name='password1' Required />  
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       </div>
  
                </span>
                <div id="inputwrapper">  
                    <br>
                   <input id="inputbutton" onclick="window.location.href='javascript:history.back()'" type="submit" value="CANCEL" />
                   &nbsp;&nbsp;&nbsp;<input id="inputbutton" type="submit" value="CONTINUE" />
                    
                </div>
            </div>
            
        </div>
    </form>     
    <div height="200">
        <br><br><br><br>
        <?php    
             include '../includes/footer.php';       
        ?>  
    </div>

    </body>
</html>

