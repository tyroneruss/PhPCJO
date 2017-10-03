<?php

$name  = $_POST["Name"];
$email = $_POST["Email"];

?>
<span style="color: blue;"> 
    <b>This is the new content <?php echo $name . ' ' . $email ?> which has been loaded by Ajax.</b>
</span>