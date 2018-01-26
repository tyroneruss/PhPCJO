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
                            <br><br>
                            <input type="radio" name="gender" value="Male" />
                            <label>Male</label>
                            <input type="radio" name="gender" value="Female" />
                            <label>Female</label>
                            <br><br>
                            
                            <label>First name<font color="red">*</font></label>
                            <input id="user_input" type="text" name='firstname' Required />
                                
                            <br><br><label>Last name<font color="red">*</font></label>&nbsp;
                            <input id="user_input" type="text" name='lastname' Required />
                            
                            <br><br><label>Education <font color="red">*</font></label>
                            <select id="user_input" name="education" style="width: 150px; margin-right: 115px" >
                                <option value="Diploma/GED">Diploma/GED</option>
                                <option value="BA/BS Degree">BA/BS Degree</option>
                                <option value="MA/MS/MBA">MA/MS/MBA</option>              
                                <option value="PhD">PhD</option>
                                <option value="JD">JD</option>
                            </select>
                            
                            <br><br><label>IT Field</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="user_input" name="infield" style="width: 250px; margin-right: 15px">
                                <option value='0'>Choose one</option>
                                <option value='1'>Telecommunications</option>
                                <option value='2'>Universities and Academy</option>
                                <option value='3'>Technology Companies</option>
                                <option value='4'>Health IT</option>
                                <option value='5'>Management & Project Management</option>
                                <option value='6'>Mobile Development</option>
                                <option value='7'>Network/System Design & Administration</option>
                                <option value='8'>Programming/Software Engineering</option>
                                <option value='9'>Security</option>
                            </select>
                            <br><br>
                            <label>Years in field</label>&nbsp;&nbsp;&nbsp;                        
                            <input type="text" name='yearsinfield'  style="width: 50px; margin-right: 195px" />
                            
                            <br><br><label>Employed<font color="red">*</font></label>&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            <select id="user_input" name="employed" style="width: 100px; margin-right: 150px" >
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                       </div>
                       <br>
                </span>
                <div id="inputwrapper">  
                    <br>
                   <input id="inputbutton"  type="button" onclick="window.location.href='javascript:history.back()'"value="BACK" />
                   &nbsp;&nbsp;&nbsp;<input id="inputbutton" type="submit" value="CONTINUE" />                    
                </div>
                <br><br> 
    </form>        
    </body>
</html>