<?php 

    include '../includes/header.php'; 
    
    require_once('../includes/database.php');

    function fetch_data() {
    
        $i = 0;
        $mysqli = db_connect();
        
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 

        $query = 'select * from offer where UserID=2';
        $result = $mysqli->query($query);
                
        $output = '';
        while ($row = mysqli_fetch_array($result)) 
        {
          $i = $i + 1;
          
          $output .= '<tr style="background-color: white">
                        <td align="center" ><input style="height: 20px; width: 20px" type="checkbox" name="offer' . $i . '"/></td>
                        <td align="center" >' . $i . '</td>
                        <td>' . $row["Company"] . '</td>
                        <td>' . $row["Position"] . '</td>
                      </tr>'
                    ;
        }        
        return $output;   
    } 
    
if(isset($_POST["create_pdf"]))
 {   
    require_once("../tcpdf/tcpdf.php");
    
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true,'UTF-8',false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Export HTML table data to PDF using TCPDF in PHP");
    
    $content = "Export HTML table data to PDF using TCPDF in PHP";
    
    $obj_pdf->writeHTML($content);
    
    $obj_pdf->Output('sample1.pdf'.'I');
 } 
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
            <li><a href="./evaloffer.php"><b>Evaluate Offer</b></a></li>
            <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a class="active"><b>View or Print Offer(s)</b></a></li>
        </ul>           

    <table width="1200"> 
        <tr> 
            <td width="20%"> 
                <br><br><br>          
               <?php include '../includes/nav_links.php'; ?>            
            </td>
            <td width="80%" align="left"  valign="top" >    
        <br><br>
            <h1 id="caption_h1">View or Print Offer(s)</h1>
            <table border="0" id="cmpformtable">                
              <tr>
                   <td colspan="4" align="center">            
                        <h1 id="title_h1">Select Offer(s) to View/Print</h1>  
                   </td>
               </tr>
                   <tr>
                        <th width="10%" align="center" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Select</b>
                        </th>
                        <th  width="10%"  align="center" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>&nbsp;&nbsp;Item#</b>
                        </th>
                        <th  width="30%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Company</b>
                        </th>
                        <th  width="50%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Position</b>
                        </th>
                   </tr>               
                   <?php 
                    echo fetch_data();
                   ?>
                <tr>
                <form method="POST">
                    <td colspan='4' height="60" align="center" valign="top" 
                      style="font-family: Times New Roman; font-size: 20px;" >
                       <br>
                       <input type="button" value="BACK" 
                       onclick="window.location.href='javascript:history.back()'"                          
                       style="color: white; height: 32px; width: 125px; 
                       background-color:  DodgerBlue" />

                       <input type="submit" name="create_pdf" class="btn btn-danger" 
                              value="CREATE PDF" 
                       style="color: white; height: 32px; width: 125px; 
                       background-color:  DodgerBlue" />
                       <br><br>
                    </td>
                </form>
            </tr>
            </table>
            </td>
        </tr>
    </table>  
    </div>
</div>
</body>
</html>