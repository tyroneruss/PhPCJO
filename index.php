<html>
    <head>
        <title>CompareJobOffers </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/tabstyle.css">
    </head> 
<body>

<div id="container">
   <div id="intro">
       <div id="pageHeader">
               <div id="sitename">
                   <h1>&nbsp;&nbsp;CompareJobOffers</h1>
               </div>          
       </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    
</script>
  
<div align="center">
    <table width="1200"> 
        <tr> 
            <td width="20%" align="left" valign="top" > 
                <br><br><br>          
                <?php include './includes/nav_links.php'; ?>            
            </td>
            <td width="50%" align="left">
                <table width="650"> 
                    <tr>
                        <td>
                            <br><h1 id="caption_h1">Welcome to Compare Job Offers</h1>
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br>
                            <font size="4" color="darkgrey"><b>Comparing Job Offers</b></font>
                            <br>             
                               When comparing job offers, there are so many factors that determine which offer to choose.. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>Evaluating Job Offers</b></font>
                            <br>             
                               When evaluating job offers, there are so many factors that determine whether or not you’ll accept. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>Accepting a Job Offer</b></font>
                            <br>             
                               When accepting a job offer, there are so many factors that determine whether or not you’ll accept. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>Converting Full Time Pay to Hourly Contract Rate</b></font>
                            <br>             
                            To put a <b>value on time</b> for offer comparison, a quick 
                            calculation to convert salary into dollars per hour can be a telling 
                            figure. All else being equal, that 80K offer with a 40 hours work week is 
                            more per hour than the 100K offer at 55 hours. Estimates of work 
                            hours may not be accurate, so multiple data sources can help.  
                        </td>
                    </tr>
                 </table>
            </td>
            <form action="./user/db/checkloginDb.php" method="POST">              
            <td width="30%" align="center" valign="top" style="color: black; font-family: Times New Roman; font-size: 15px">                
                &nbsp;&nbsp;
                <h1 id="caption_h1">
                    <img src="images/LoginLock.gif" width="30" height="30" alt="LoginLock"/> Please login</h1> 
                <br>
                <table>
                    <tr>
                        <td width="10%">
                            <br><br><br>
                        </td>                  
                        <td  width="90%" align="center" style="background-color: white">
                            &nbsp;&nbsp;<label>Username</label>&nbsp;&nbsp;
                            &nbsp;&nbsp;<input type="text" size="25" name='username' Required />&nbsp;
                            <br>
                            &nbsp;&nbsp;<label>Password</label>&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;<input type="password" size="25"  name='password' Required />
                            <br><br>
                            <input id="inputbutton" type="submit" value="Login" />                                  
                            &nbsp;&nbsp;&nbsp;
                            <input id="inputbutton" onclick="window.location.href='./user/register.php'"  
                            type="button" value="Register" />                          
                       </td>
                    </tr>
                </table>
            </td>
            </form>
        </tr>
    </table>
</div>
</body>
</html>