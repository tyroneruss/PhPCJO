<?php 

    include '../includes/header.php'; 
    require_once('../includes/database.php');
      
    session_start();

    $mysqli = db_connect();
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
    
    $query_user  = "SELECT UserID FROM user WHERE Username='" . $_SESSION["users_username"] ."'";            
    $result = $mysqli->query($query_user);
    $getID = mysqli_fetch_assoc($result);
    $_SESSION["userID"] = $getID['UserID'];

    $free_results = mysqli_free_result($result);
    
    $query  = "SELECT * FROM location ";             
    $result = $mysqli->query($query);

?>
    <link rel="stylesheet" type="text/css" href="../css/userstyle.css">   
    <form action="./db/insertprofileDb.php" method="POST">
        <div id="wrapper"> 
            
            <div id="profileform_bg" align="center">
                <h1 id="user_h1">Create profile</h1>
                <span> 
                       <div id="login_input" >
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                            <br><br><input type="radio" name="gender" value="Male" />
                            <label>Male</label>
                            <input type="radio" name="gender" value="Female" style="height: 15px; width: 15px"/>
                            <label>Female</label>
                            
                            <br><br><label>First name<font color="red">*</font></label>
                            <input id="user_input" type="text" name='firstname' Required />
                            <br><br><label>Last name<font color="red">*</font></label>&nbsp;&nbsp;
                            <input id="user_input" type="text" name='lastname' Required />
                            <br><br><label>Education <font color="red">*</font></label>
                            <select id="user_input" name="education" style="width: 150px; margin-right: 105px" >
                                <option value="1">Diploma/GED</option>
                                <option value="2">BA/BS Degree</option>
                                <option value="3">MA/MS/MBA</option>              
                                <option value="4">PhD</option>
                                <option value="4">JD</option>
                            </select><br><br>
                            <label>Location<font color="red">*</font></label>
                            <select id="user_input" name="citystateID" style="width: 150px; margin-right: 95px" >
                                <?php while($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['LocationID']; ?>"><?php echo $row['Name']; ?>  </option>
                                <?php } ?>
                            </select><br><br>
                            <label>Employed<font color="red">*</font>&nbsp;</label>
                            <select id="user_input" name="employed" style="width: 100px; margin-right: 155px" >
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>     
                       </div>
                </span>
                <div id="inputwrapper">  
                    <br>
                   <input id="inputbutton"  type="button" onclick="window.location.href='javascript:history.back()'"value="CANCEL" />
                   &nbsp;&nbsp;&nbsp;<input id="inputbutton" type="submit" value="SUBMIT" />                    
                </div>
    </form>        
    </body>
</html>