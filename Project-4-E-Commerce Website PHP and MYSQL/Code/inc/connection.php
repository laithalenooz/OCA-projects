<?php
//make database connection
    $conn = new mysqli("localhost","root","","loading");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>