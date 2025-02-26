<?php
include "conn.php";
session_start();
$email = $_GET['email'];
$sql = "SELECT * FROM `signup` WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$otp=0;
if(mysqli_num_rows($result) > 0)
{
    
    $row = mysqli_fetch_assoc($result);
    if($row){
        $otp=$row['otp'];
    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $otp = $_POST['otp'];

    if($row['otp']==$otp){
        $sql = "UPDATE signup SET verify = 1 WHERE email='$email'";

        $result = mysqli_query($con, $sql);
        if($result)
        {
            
            header('location:index.php');
        }
        
        else{
            echo "query failed.......";
        }
    }else{
       echo "<script>window.alert('Wrong OTP Try Again!')</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
    <div class="container">

        <h1>Verify OTP</h1>
        <label for="otp">Enter OTP: <?php echo $otp?></label>
        <input type="text" id="otp" name="otp" pattern="[0-9]{6}" required>
        <button type="submit" id="verifyOtpBtn">Verify OTP</button>
        
    </div>
</form>
</body>
</html>