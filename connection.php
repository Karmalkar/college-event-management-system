<?php

$server = "localhost";
$username="root";
$password ="";
$database="event";
$con = mysqli_connect($server ,$username ,$password, $database);

if (!$con) {
    die("connection to the database failed due to ". mysqli_connect_error());
    # code...
}else{

    
}
?>