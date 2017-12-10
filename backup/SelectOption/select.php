<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/select_style.css">
<script src="../js/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    
    function fetch_select(val)
    {
     $.ajax({
     type: 'post',
     url: 'fetch_data.php',

     data: {
      get_option:val
     },

     success: function (response) {
      document.getElementById("new_select").innerHTML=response; 
     }
     });
    }
</script>

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
    
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>Select state</option>
  <?php

    require_once('../includes/database.php');
  
    $mysqli = db_connect();

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 

    $query   = "select Distinct(State) from col order by State";             
    $result  = $mysqli->query($query);
  
    while($row = mysqli_fetch_array($result))
    {
     echo "<option>".$row['State']."</option>";
    }
 ?>
 </select>

 <select id="new_select">
 </select>
	  
</div>     
</center>
</body>
</html>