<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Register - CJO</title>
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="./css/style.css">

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
                style="font-family: Times New Roman; color: #990000; font-size: 22px;">
                 &nbsp;&nbsp;
                <a href="" >Home&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" >Compare Offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="" >Convert offers&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" >About&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="" >Contact Us
            </td>
        </tr>  
    </table>

   <form action="./db/InsertUser.php" method="POST">
    <table border="0" width="1200" style="background-color: #ffffff;">
        <tr>
        <td width='290'  valign="top">
            <table border="0" width='290' height='500' valign="top">
                <tr>
                     <td style="font-family: Times New Roman; font-size: 20px;" > 
    <!--                     <a id="right_pane_a" href="http://www.indeed.com">Employment - Indeed Search</a>  
                         <br>
                         <br>
                         <a id="right_pane_a" href="" >Add Link Employment/Career </a>  -->
                     </td>
                </tr>   
             </table>
        </td>  
        <td align="left" valign='top' style="background-color: white;" >
            <br><br>

            <table border="0" id="loginformtable">
               <tbody>
               <tr>
                   <td colspan="2">
                       <bean:write name="LoginForm" property="error" filter="false"/>
                       &nbsp;
                   </td>
               </tr>                    
               <tr>
                   <td colspan="2" align="center">            
                       <h1 id="login_h1">Register - User</h1>
                   </td>
               </tr>
               <tr>
                   <td colspan="2" align="center" height="40" valign="center" style="font-family: Times New Roman; font-size: 20px;"  >
                       <font color="black">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                       </font>
                   </td>
                   </tr>
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>First name:&nbsp;
                       </td>
                       <td><input type="text" name="Fistname" size="30" /></td>
                   </tr>
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Last name:&nbsp;
                       </td>
                       <td><input type="text" name="Lastanme" size="30" /></td>
                   </tr>
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Email:&nbsp;
                       </td>
                       <td><input type="text" name="Email" size="30"  /></td>
                   </tr>                    
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Password:&nbsp;
                       </td>
                       <td><input  type="password" name="Password1"  size="30"  /></td>
                   </tr>                    
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Confirm password:&nbsp;
                       </td>
                       <td><input  type="password" name="Password2"  size="30"  /></td>
                   </tr>                    
           </tbody>
           <br>
           <tr>
                 <td colspan='2' height="60" align="center" valign="top" 
                   style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="CANCEL"  
                       onclick="window.location.href='javascript:history.back()'" 
                       style="color: white; 
                       height: 35px; width: 125px; 
                       background-color:  DodgerBlue" />

                   <input type="submit" value="SAVE" 
                       onclick="window.location.href='db/InsertUser.php'"                         
                       style="color: white; 
                       height: 35px; width: 125px; 
                       background-color:  DodgerBlue" />
                 <br>
                 <br>
                 <br>
                 </td>
            </tr>
        </table>
        </form>
       <br><br><br>
    </td>
    </tr>
    </table> 
    &nbsp;&nbsp;
    <table border="0" width='1200' align='left' style="background-color: #990000">
        <div id="container">
            <div id="intro">
                <div id="pageHeader">
                        <div id="sitename">
                                <font color="white" >
                                      <br>
                                      &nbsp;&nbsp;In Business since 2009  
                                      <br>
                                      &nbsp;&nbsp;Created by NewWare,Inc 
                                      <br>
                                </font>                            
                        </div>
                </div>
            </div>
        </div>
    </table>
    </body>
</html>
