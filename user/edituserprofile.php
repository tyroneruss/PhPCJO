<?php 

    include '../includes/header.php'; 
    require_once('../includes/database.php');
      
    session_start();

    $mysqli = db_connect();
    
    $userID = $_GET['valueID'];
    echo $userID;
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
    
    $query_user  = "select * from user u, profile p, location l";
    $query_user .= " Where u.UserID = p.UserID and ";
    $query_user .= " p.LocationID=l.LocationID and u.UserID=" . $userID;    
    $result = $mysqli->query($query_user);
    
    $row = mysqli_fetch_assoc($result);
    $locationID = $row['LocationID'];
    $loc_name   = $row['Name'];
    $fname      = $row['Firstname'];
    $lname      = $row['Lastname'];
    $email      = $row['Email'];
    $gender     = $row['Gender'];
    $employed   = $row['Employed'];
    $edulevel   = $row['EduLevel'];

    $var = mysqli_free_result($result);
    
    $query  = "SELECT * FROM location ";             
    $result = $mysqli->query($query);

?>
    <link rel="stylesheet" type="text/css" href="../css/userstyle.css">   
    <form action="./db/TestDb.php" method="POST">
        <div id="wrapper"> 
            
            <div id="profileform_bg" align="center">
                <h1 id="user_h1">Edit Profile</h1>
                <span> 
                       <div id="login_input" align="left">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                            <br><br><label>First name<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>Last name<font color="red">*</font></label>&nbsp;&nbsp;<br>
                            <input id="user_input" style="width: 120px;margin-left: 45px" type="text" name='firstname' value="<?php echo $fname;?>" Required />
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <input id="user_input" style="width: 120px" type="text" name='lastname'  value="<?php echo $lname;?>" Required />
                            <br><br><label>Email<font color="red">*</font></label>&nbsp;&nbsp;
                            <input id="user_input" type="text" style="margin-right: 45px" name='email'  value="<?php echo $email;?>" Required />
                            <br><br>
                            <label>Location<font color="red">*</font></label>&nbsp;
                            <select id="user_input" name="citystateID" style="width: 200px; margin-right: 45px" >
                                <option value="<?php echo $locationID; ?>"><?php echo $loc_name; ?> </option>
                                <?php while($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['LocationID']; ?>"><?php echo $row['Name']; ?>  </option>
                                <?php } ?>
                            </select>
                            <br><br>
                            <label>Employed<font color="red">*</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>Education <font color="red">*</font></label><br>
                            <select id="user_input" name="employed"  style="width: 100px; margin-right: 0px" >
                                <option value="<?php echo $employed;?>"><?php echo $employed;?></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>     
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <select id="user_input" name="education" style="width: 250px; margin-right: 0px" >
                                <option value="Diploma/GED">Diploma/GED</option>
                                <option value="BA/BS Degree">BA/BS Degree</option>
                                <option value="MA/MS">MA/MS</option>              
                                <option value="MBA">MBA</option>              
                                <option value="PhD - Doctor of Philosophy">PhD - Doctor of Philosophy </option>
                                <option value="J.D. - Juris Doctorate">J.D. - Juris Doctorate</option>
                            </select><br><br>
                       </div>
                </span>
                <div id="inputwrapper">  
                    <br>
                   <input id="inputbutton"  type="button" onclick="window.location.href='javascript:history.back()'"value="CANCEL" />
                   &nbsp;&nbsp;&nbsp;<input id="inputbutton" type="submit" value="SAVE" />                    
                </div>
    </form>        
    </body>
</html>