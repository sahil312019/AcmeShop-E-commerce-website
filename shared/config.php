<?php

$conn = new mysqli('localhost','root','','acme_june');

if($conn->connect_error)
{
    echo "Error in Connection";
    die;
}


?>