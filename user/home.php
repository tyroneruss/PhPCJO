<!-- Header end from BasicPageHeader.tpl -->

<html>
    <head>
        <title>CJO </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/tabstyle.css">
        <link rel="stylesheet" type="text/css" href="./css/userstyle.css">
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
    $(document).ready(function(){
        $(".tabbable").find(".tabs li").first().find("a").addClass("active");
        $(".tabbable").find(".tabs").find("a").click(function(){
        tab = $(this).attr("href");
        $(".tabbable").find(".tab").hide();
        $(".tabbable").find(".tabs").find("a").removeClass("active");
        $(tab).show();
        $(this).addClass("active");
      return false;
      });
  });     
</script>
  
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a class="active" href=""><b>Home</b></a></li>
            <li><a href="./offer/createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a href="./offer/compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./offer/evaloffer.php"><b>Evaluate an Offer</b></a></li>
            <li><a href="./offer/convertoffers.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./offer/viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>           
    
    <table width="1200"> 
        <tr> 
            <td width="20%" align="left" valign="top" > 
                <br><br><br>          
                <?php include './includes/nav_links.php'; ?>            
            </td>
            <td width="80%" align="left">
                <table width="650"> 
                    <tr>
                        <td><br><br><h1 id="caption_h1">Welcome to Compare Job Offers</h1></td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
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
                               When evaluating job offers, there are so many factors that determine whether or not you’ll accept. Just think about it. Culture. Benefits. Work-life balance. Salary. Salary. Did I mention salary? 
                               While it might sound like I’m repeating myself, I find that most people are hyper focused on a number without looking at the full picture.                         
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>Converting Full Time Pay to Hourly Contract Rate</b></font>
                            <br>             
                            Multiple people asked me this week how much they should charge for an hourly 
                            development engagement, trying to figure out what’s fair. They all know their 
                            full time salary range, but didn’t know how to translate that into self-employed 
                            hourly rate.   
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