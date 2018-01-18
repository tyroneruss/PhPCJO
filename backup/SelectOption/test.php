  <?php

    require_once('../includes/database.php');

    $mysqli = db_connect();
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 

    $state = 'CA'; // $_POST['get_option'];
    
    $query   = "select City from col where State='$state'";             
    $result  = $mysqli->query($query);
    
    while($row = mysqli_fetch_array($result))
    {
     echo "<option>".$row['City']."</option>";
    }

 ?>


