<?php
include "conn.php";

// // start

$profession = $_POST['profession'];
$experience = $_POST['experience'];
$skills = $_POST['skills'];
$timing = $_POST['timing'];
$duration = $_POST['duration'];
$fees = $_POST['fees'];




$sql = "INSERT INTO `skilltable`(`profession`, `experience`,`skills`, `timing`, `duration`,`fees`) VALUES ('$profession','$experience','$skills','$timing','$duration','$fees')";

$result = mysqli_query($con, $sql);
if($result)
{
    // echo "data submited";
    header('location:index.php');
}

else{
    echo "query failed.......";
}



?>


