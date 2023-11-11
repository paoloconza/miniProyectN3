<?php session_start();	
if (!isset($_SESSION["user"])) {
    header("Location: /index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./info.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</head>

<body>
    <nav class="navegacion">
        <img src="../assets/devchallenges.svg" alt="logo">
        <div class="menu">
            <li><img src="#" alt="perfil"><a href="#"><?php echo $_SESSION["user"]["usuario"] ?></a>
                <ul class="submenu">
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Group Chat</a></li>
                    <li>
                        <hr>
                    </li>
                    <li><a href="../handledb/logout.php">Logout</a></li>
                </ul>
            </li>
        </div>
    </nav>
    <div>
        <h1>hola, </h1>
    </div>
</body>

</html>