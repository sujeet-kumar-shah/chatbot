<?php
$servername ="localhost";
$username="root";
$password ="";
$database ="query"


$conn = new mysqli($servername,$username,$password,$database);
if($conn==connect_error){
    echo("connection failed:".$conn=connect_error)
} else echo ( "connnected");


?>