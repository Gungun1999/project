<?php
$server = "localhost";
$username = "root";
$passward = "";
$dbname = "project";

$con = mysqli_connect($server,$username,$passward,$dbname);


if(!$con)
{
    echo "not connected";
}


?>