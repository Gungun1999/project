<?php

session_start();

if(!isset($_SESSION['email'])){

       header('location:index.php');

}



?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard Welcome : <?php echo $_SESSION['email']?></h1>

    <a href="logout.php">logout</a>


</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Sharing</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #f3f2ef;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    padding: 10px 20px;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
}

.navbar input {
    width: 30%;
    padding: 8px;
}

.nav-icons span {
    margin: 0 10px;
    font-size: 20px;
    cursor: pointer;
}

main {
    display: flex;
    padding: 20px;
}

.sidebar, .trending {
    width: 20%;
    background: white;
    padding: 15px;
    border-radius: 10px;
    margin: 10px;
}

.feed {
    width: 55%;
}

.profile-card {
    text-align: center;
}

.profile-card img {
    width: 80px;
    border-radius: 50%;
}

.post-box {
    display: flex;
    align-items: center;
    background: white;
    padding: 10px;
    margin: 10px 0;
    border-radius: 10px;
}

.post-box img {
    width: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.post {
    background: white;
    padding: 15px;
    margin: 10px 0;
    border-radius: 10px;
}

.post img {
    width: 100%;
    border-radius: 10px;
}

     </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">🔗 Skill Sharing</div>
            <input type="text" placeholder="Search">
            <div class="nav-icons">
                <span>🏠</span>
                <span>👥</span>
                <span>💼</span>
                <span>💬</span>
                <span>🔔</span>
                <span><a href="logout.php">logout</a></span>
            </div>
        </div>
    </header>

    <main>
        <aside class="sidebar">
            <div class="profile-card">
                <img src="profile.jpg" alt="Profile">
                <h3>Name</h3>
                <p>Full Stack Developer</p>
                <p>Company Name</p>
                <hr>
                <p>Profile viewers: 27</p>
                <p>Post impressions: 22</p>
            </div>
        </aside>

        <section class="feed">
            <div class="post-box">
                <img src="profile.jpg" alt="Profile">
                <input type="text" placeholder="Start a post">
            </div>

            <div class="post">
                <img src="user.jpg" alt="User">
                <div class="post-content">
                    <h4>Rheanne Razo</h4>
                    <p>The Smartest Teams Build Each Other Up...</p>
                    <img src="post-image.jpg" alt="Post Image">
                </div>
            </div>
        </section>

        <aside class="trending">
            <h3>Trending Now</h3>
            <ul>
                <li>EV makers accelerate hiring</li>
                <li>FMCG stocks take a hit</li>
                <li>Smartwatches decline in sales</li>
                <li>Tech revenue surges</li>
            </ul>
        </aside>
    </main>

    <!-- <script src="script.js"></script> -->
     <script>
        document.querySelector('.post-box input').addEventListener('click', () => {
    alert("Post feature coming soon!");
});

     </script>
</body>
</html>
