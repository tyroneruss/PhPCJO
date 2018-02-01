<?php include '../includes/header.php'; ?>            

        <script type="text/javascript">
            function fetch_area_select(val)
                {
                    $.ajax({
                        type: 'post',
                        url: 'fetch_area_data.php',

                        data: {
                            get_option: val
                        },

                        success: function (response) {
                            document.getElementById("area_select").innerHTML = response;
                        }
                    });
                }

            function fetch_city_select(val)
                {
                    $.ajax({
                        type: 'post',
                        url: 'fetch_city_data.php',

                        data: {
                            get_option: val
                        },

                        success: function (response) {
                            document.getElementById("city_select").innerHTML = response;
                        }
                    });
                }
        </script>
        <?php
            require_once('../includes/database.php');

            $mysqli = db_connect();

            /* check connection */
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
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
                    <li><a class="active" ><b>Create Job Offers</b></a></li>
                    <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
                    <li><a href="./evaloffer.php"><b>Evaluate an Offer</b></a></li>
                    <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
                    <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
                </ul>           

                <table width="1200"> 
                    <td width="20%">                 
                        <br><br><br>          
                        <?php include '../includes/nav_links.php'; ?>                          
                    </td>
                    <td width="80%" align="left"  valign="top" >
                        <br><br>
                        <h1 id="caption_h1">Create Job Offers</h1>
                        <table border="0" id="cojformtable">                  
                            <tr>                       
                                <td colspan="2" align="center">  
                                    <h1 id="title_h1">Enter Job Infomation</h1>
                                    <form action="./createoffers_ft.php" method="POST" >
                                        <table border="0" width="600" style="background-color: white">
                                            <tr >
                                                <td colspan="3" height="20">
                                                </td>
                                            </tr>                             
                                            <tr height="30">
                                                <td width="10%" >
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    Offer type<font color="red">*</font> 
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <select name="offertype" style="width: 100px; height: 25px">
                                                        <option value="FT">Fulltime</option>
                                                        <option value="CT">Contract</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr  height='35'>
                                                <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    Company<font color="red">*</font>
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <input type="text" name="company" value="" size="41" />
                                                </td>
                                            </tr>
                                            <tr  height='35'>
                                                <td width="10%" >
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    Tech Area<font color="red">*</font> 
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <select name="area" onchange="fetch_area_select(this.value);" style="width: 285x; height: 25px" >
                                                        <option>Select</option>
                                                    <?php

                                                        $query = "select Distinct(Area) from areaposition order by Area";
                                                        $result = $mysqli->query($query);

                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo "<option value'"  . $row['Area'] .  "' >" . $row['Area'] . "</option>";
                                                        }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr  height='35'>
                                                <td width="10%" >
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    Job Position<font color="red">*</font> 
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <select id="area_select" name="position" style="width: 180px; height: 25px"  required>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr  height='35'>
                                                <td width="10%" >
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    State<font color="red">*</font> 
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <select name="state" onchange="fetch_city_select(this.value);" style="width: 100px; height: 25px" >
                                                        <option>Select</option>
                                                    <?php
                                                        $query = "select Distinct(State) from col order by State";
                                                        $result = $mysqli->query($query);

                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo "<option value'"  . $row['State'] .  "' >" . $row['State'] . "</option>";
                                                        }
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr  height='35'>
                                                <td width="10%" >
                                                </td>
                                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                    City<font color="red">*</font> 
                                                </td>
                                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                                    <select id="city_select" name="city" style="width: 180px; height: 25px"  required>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr height="20">
                                                <td colspan="3" >
                                                </td>
                                            </tr>
                                        </table>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' height="40" align="left" valign="top" 
                                    style="font-family: Times New Roman; font-size: 20px;" >
                                    &nbsp;&nbsp;&nbsp;
                                    <input type="button" value="BACK" 
                                           onclick="window.location.href = 'javascript:history.back()'"                          
                                           style="color: white; height: 32px; width: 135px; 
                                           background-color:  DodgerBlue" />

                                    <input type="submit" value="CONTINUE"  
                                           style="color: white; height: 32px; width: 135px; 
                                           background-color:  DodgerBlue" />
                                    <br><br>
                                </td>
                            </tr>
                            </form>
                        </table>
                    </td>
                    </tr>
                </table>
            </div>

        </div>
    </body>
</html>