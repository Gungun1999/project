<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Sharing Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
        <div class="container">
            <h1>Enter Your Details</h1>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="phone">Phone No:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
    
                <button type="button" id="otpBtn">Generate OTP</button>
                <p id="otpDisplay"></p>
    
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" name="otp" pattern="[0-9]{6}" required>
    
                <button type="button" id="verifyOtpBtn">Verify OTP</button>
            </form>
        </div>


    <div class="container">
        <h1>Welcome to Our Service</h1>
        <button id="openModal">View Terms and Conditions</button>
    </div>

    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Terms and Conditions</h2>
            <p>
                Please read these terms and conditions carefully before using our service.
                By accessing or using the service, you agree to be bound by these terms.
            </p>
            <p>
                [Add more terms and conditions here...]
            </p>
            <div class="modal-buttons">
                <button id="acceptBtn">Accept</button>
                <button id="declineBtn">Decline</button>
                <button id="backBtn">Back</button>
            </div>
        </div>
    </div>


    

    <h2>Enter Your Details</h2>
    <form action="save.php" method="POST">
        <label for="profession">Profession:</label>
        <input type="text" id="profession" name="profession" required><br><br>

        <label for="experience">Experience (Years):</label>
        <input type="number" id="experience" name="experience" required><br><br>

        <label for="skills">Skills:</label>
        <textarea id="skills" name="skills" rows="3" required></textarea><br><br>

        <label for="timing">Timing:</label>
        <input type="text" id="timing" name="timing" placeholder="e.g., 9 AM - 5 PM" required><br><br>

        <label for="duration">Duration (Months):</label>
        <input type="number" id="duration" name="duration" required><br><br>

        <label for="fees">Fees (USD):</label>
        <input type="number" id="fees" name="fees" required><br><br>

        <button type="submit">Submit</button>
    </form>


    <div class="container">
        <h2>Skill Sharing Platform - Follow Page</h2>
        <div id="users-list">
            <!-- Users will be loaded here dynamically -->
        </div>
    </div>

    

</body>
</html>