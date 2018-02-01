<?php include '../includes/header.php'; ?>            

    <?php
    session_start();
    $firstname = $_SESSION["Firstname"];
?>   
                

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a class="active"><b>Home</b></a></li>
            <li><a href="./createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate an Offer</b></a></li>
            <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>           
   
    <table width="1200"> 
        <tr> 
            <td width="20%" align="left" valign="top" > 
                <br><br><br>          
                <?php include '../includes/nav_links.php'; ?>            
            </td>
            <td width="50%" align="left">
                <table width="650"> 
                    <tr>
                        <td>
                            <br><h1 id="caption_h1">Get Started Comparing Offers</h1>
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br>
                            <font size="5" color="darkgrey"><b>Comparing Job Offers</b></font>
                            <br>             
                               Many candidates make the mistake of basing their decisions with too much 
                               weight placed on base salary. This may be attributed to our emotional 
                               attachment to numbers and compensation “milestones” (usually round numbers), 
                               the perception of status that results from salary, and the inability of 
                               candidates to accurately gather and calculate the details of a 
                               comprehensive package.
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="5" color="darkgrey"><b>Evaluating Job Offers</b></font>
                            <br>             
                               When evaluating job offers, there are so many factors that determine whether or not you’ll accept. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="5" color="darkgrey"><b>Accepting a Job Offer</b></font>
                            <br>             
                               When accepting a job offer, there are so many factors that determine whether or not you’ll accept. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="5" color="darkgrey"><b>Converting Full Time Pay to Hourly Rate</b></font>
                            <br>             
                            To put a value on time for offer comparison, a quick 
                            calculation to convert salary into dollars per hour can be a telling 
                            figure. All else being equal, that 80K offer with a 40 hours work week is 
                            more per hour than the 100K offer at 55 hours. Estimates of work 
                            hours may not be accurate, so multiple data sources can help.  
                        </td>
                    </tr>
                </table>
            </td>
            <form action="../index.php" method="POST">              
            <td width="30%" align="center" valign="top" style="color: black; font-family: Times New Roman; font-size: 15px">                
                <table>
                    <tr>
                        <td>
                            <br><br><br>
                            <b>Welcome, 
                            <?php
                                echo $firstname;
                            ?>
                            </b>
                            <br>
                            <input id="inputbutton" onclick="window.location.href='../index.php'"  
                            type="button" value="Logout" />                          
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