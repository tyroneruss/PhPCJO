<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home - CJO</title>
    <meta name="description" content="Compare Jobs Offers" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
    
<body>
<!-- Header start from basicPageHeader.tpl -->



<table border="0" width='1200' align='left' style="background-color: #990000">
<div id="container">
    <div id="intro">
        <div id="pageHeader">
                <div id="sitename">
                    <h1>&nbsp;&nbsp;CompareJobOffers</h1>
                </div>
        </div>
    </div>
</div>
</table>

<!-- Header end from BasicPageHeader.tpl -->
<table border="0" width='1200' style="background-color: white">
    <tr>
        <td  width="300" align="top" align="left">
        </td>
        <td height="30" align="center" width="1000" 
            style="font-family: Times New Roman; color: darkblue; font-size: 22px;">
             &nbsp;&nbsp;
            <a href="" >Home&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Compare Offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="" >Convert offers&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >About&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Contact Us
        </td>
    </tr>  
</table>

<?php
    $_SESSION['userID']=1000;
?>

    <form name="DebtorForm1-1" METHOD=POST ACTION="reviewcase1-1.jsp">          
    <table border="0" style="background-color: white">
        <tr>
          <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

          </td>
          <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
              Address 1<font color="red">*</font>
          </td>
          <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
              <input type="text" name="address1" value="" size="45" Required />
          </td> <!-- End first TD col -->  
        </tr>                             
        <tr>
          <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

          </td>
          <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
              Address 2:
          </td>
          <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
              <input type="text" name="address2" value=""  size="45" />
          </td> <!-- End first TD col -->  
        </tr>                             
        <tr>
          <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

          </td>
          <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
              City<font color="red">*</font>
          </td>
          <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
              <input type="text" name="city" value="" size="25"  Required />
          </td>
        </tr>                             
        <tr>
          <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

          </td>
          <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
              State<font color="red">*</font>
          </td>
          <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
              <select name="state" style="width: 150px">
                  <option value='unknown'>--- Select One ---</option>
                  <option value="Alabama" >Alabama</option><option value="Alaska" >Alaska</option>
                  <option value="Arizona" >Arizona</option><option value="Arkansas" >Arkansas</option>
                  <option value="California" >California</option><option value="Colorado" >Colorado</option>
                  <option value="Connecticut" >Connecticut</option><option value="Delaware" >Delaware</option>
                  <option value="District of Columbia" >District of Columbia</option><option value="Florida" >Florida</option>
                  <option value="GA" >Georgia</option><option value="Hawaii" >Hawaii</option>
                  <option value="Idaho" >Idaho</option><option value="Illinois" >Illinois</option>
                  <option value="Indiana" >Indiana</option><option value="Iowa" >Iowa</option>
                  <option value="Kansas" >Kansas</option><option value="Kentucky" >Kentucky</option>
                  <option value="Louisiana" >Louisiana</option><option value="Maine" >Maine</option>
                  <option value="Maryland" >Maryland</option><option value="Massachusetts" >Massachusetts</option>
                  <option value="Michigan" >Michigan</option><option value="Minnesota" >Minnesota</option>
                  <option value="Mississippi" >Mississippi</option><option value="Missouri" >Missouri</option>
                  <option value="Montana" >Montana</option><option value="Nebraska" >Nebraska</option>
                  <option value="Nevada" >Nevada</option><option value="New Hampshire" >New Hampshire</option>
                  <option value="New Jersey" >New Jersey</option><option value="New Mexico" >New Mexico</option>
                  <option value="New York" >New York</option><option value="North Carolina" >North Carolina</option>
                  <option value="North Dakota" >North Dakota</option><option value="Ohio" >Ohio</option>
                  <option value="Oklahoma" >Oklahoma</option><option value="Oregon" >Oregon</option>
                  <option value="Pennsylvania" >Pennsylvania</option><option value="Puerto Rico" >Puerto Rico</option>      
                  <option value="Rhode Island" >Rhode Island</option><option value="South Carolina" >South Carolina</option>
                  <option value="South Dakota" >South Dakota</option><option value="Tennessee" >Tennessee</option>
                  <option value="Texas" >Texas</option><option value="UT" >Utah</option>      
                  <option value="Vermont" >Vermont</option><option value="Virginia" >Virginia</option>
                  <option value="Wisconsin" >Wisconsin</option><option value="Wyoming" >Wyoming</option>		  
              </select> 
              &nbsp;&nbsp;&nbsp;Zip code:<font color="red">*</font>&nbsp;
              <input type="text" name="zipcode" value="" size="10" Required />
          </td> <!-- End first TD col -->
        </tr>                             
   <% if (Joint.equals("Yes")) { %>                       
         <tr>
          <td width="10%" height="30" style="font-family: Times New Roman; font-size: 15px">

          </td>
          <td colspan="2" width="90%" height="25" style="font-family: Times New Roman; font-size: 15px">
              &nbsp;&nbsp;&nbsp;&nbsp;Does Debtor 2 live at a different address<font color="red">*</font>                             
              <select name="diff_address" style="width: 60px">
                  <option value='No' >No</option>
                  <option value='Yes'>Yes</option>
              </select>
          </td>
        </tr> 

    <% } %>
     <tr>
        <td width="5%" height="25">

        </td>
         <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
             Position
         </td>
         <td width="65%" height="25">
             <input type="text" name="Position" value="" size="11" />
         </td>
     </tr>
     <tr>
         <td width="5%" height="25" style="font-family: Times New Roman; font-size: 14px">
         </td>
         <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
            Mobile Phone<font color="red">*</font>
         </td>
         <td width="65%" height="25">
             <input type="text" name="mmobilephone" value="" size="11" />
         </td>
     </tr>
     <tr>
        <td width="5%" height="25" style="font-family: Times New Roman; font-size: 17px">

        </td>
         <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
             Home Phone:
         </td>
         <td width="65%" height="25">
             <input type="text" name="homephone" value="" size="11" />
         </td>
     </tr>
     <tr>
        <td width="5%" height="25" style="font-family: Times New Roman; font-size: 17px">

        </td>
         <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
            Birthday<font color="red">*</font>
         </td>
         <td width="65%" height="25">
             <input type="text" name="birthdate" value="" size="12"  />&nbsp;(mm/dd/yyyy)
         </td>
     </tr>
     <tr>
        <td width="5%" height="25" style="font-family: Times New Roman; font-size: 17px">

        </td>
           <td width="30%" height="30" style="font-family: Times New Roman; font-size: 15px">
             Social Security#<font color="red">*</font>
           <td width="65%" height="25">
             <input type="text" name="socialsecurityno" value="" size="12" />
           </td> <!-- End first TD col -->  
       </tr>
  </table>

<form action="script.php" method="post">
    <input type="text" value="<?php echo $Firstnam?>" name="Firstname" />
    <input type="submit" value="Send" />
</form>



  </body>
</html>
