<?php include '../includes/header.php';

    require_once('../includes/database.php');
    session_start();
?>
 
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a href="./home.php" 
                   style="background-color: #f2f2f2; color: black" >
                    <b>Home</b>
                </a>
            </li>
            <li><a href="./createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a class="active"><b>Evaluate Offer</b></a></li>
            <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>           

    <table width="1200"> 
        <tr> 
            <td width="20%"> 
                <br><br><br>          
                <?php include '../includes/nav_links.php'; ?>            
            </td>
            <td width="80%" align="left"  valign="top" >
                <br><br>        
            <table width="650"> 
                <tr>
                    <td width="80%" align="left">
                        <h1 id="caption_h1">Evaluate Job Offer</h1>  
                    </td>
                </tr>
            </table>
            </td>
        </tr>
    </table>
        
    </div>
</div>
</body>
</html>