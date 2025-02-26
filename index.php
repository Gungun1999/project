<?php
include "conn.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM `signup` WHERE email = '$email' AND pass = '$pass';";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        
        $row = mysqli_fetch_assoc($result);
        if($row['verify']==0){
            
               header('location:otp.php?email='.$email);
            }else{
                $_SESSION['email']=$email;
                header('location:dashboard.php');
        }
        //    $_SESSION['email']=$email;
    

    //    header('location:dashboard.php');


    }else{
        
        echo "<script>window.alert('Please Check email or Password!')</script>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
<div class="container">

        <h1>Welcome to Skill Sharing Platform</h1>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Enter Email id">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Enter Password">
        </div>
        
        <button type="submit" id="loginBtn">Login</button>
        <p>
            Create an account <a href="signup.php" id="signInBtn">Sign up</a>
        </p>
        <p id="message"></p>
    </div>
</form>

</body>
</html>