<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">

    <!-- CDN font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="registro">
            <img src="./assets/devchallenges.svg" alt="logo">
            <p><strong>Join thousands of learners from<br> around the world</strong></p>
            <p id="parrafo">Master web development by making real-life<br> projects. There are multiple paths for you to<br> choose</p>
            <form action="/login_db.php" method="post">
                <div class="grupInput">
                    <i class="fa-solid fa-envelope" style="color: #828282;"></i>
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="grupInput">
                    <i class="fa-solid fa-lock" style="color: #828282;"></i>
                    <input type="password" name="contraseña" placeholder="Password">
                </div>
                <button type="submit">Start coding now</button>
            </form>
        </div>
        <div class="conect">
            <p>or continue with these social profile</p>
            <img src="./assets/Google.svg" alt="google">
            <img src="./assets/Facebook.svg" alt="facebook">
            <img src="./assets/Twitter.svg" alt="twitter">
            <img src="./assets/Gihub.svg" alt="gihub">
            <p id="enlace">Adready a member? <a href="./index.php">Login</a></p>
        </div>
    </div>
</body>

</html>