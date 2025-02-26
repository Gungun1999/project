<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $otp=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0)
    {
       echo "<script>window.alert('email already exist')</script>";
    }
    
    else{
        $sql = "INSERT INTO `signup`(`name`, `email`,`phone`,`pass`,`otp`) VALUES ('$username','$email','$phone','$pass','$otp')";

        $result = mysqli_query($con, $sql);
        if($result)
        {
            header('location:otp.php?email='.$email);
        }
        
        else{
            echo "query failed.......";
        }
    
    }


  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
            <h1>Enter Your Details</h1>
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="phone">Phone No:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

                <label for="pass">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" id="otpBtn">SignUp</button>
                 <!-- <input type="submit" value="Signup"> -->

                <p>
                    Already have an account <a href="index.php">Login</a>
                </p>
            </form>
        </div>
</body>
</html>