<?php session_start();
if (!isset($_SESSION["user"])) {
    header("Location: /index.php");
}
?>

<?php 
$id = $_GET["id"];
require_once "../config/database.php";
$res = $mysqli->query("select * from usuarios where id = $id");
$usuario = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./change.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
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
    <div class="centrar">
        <a href="/view/info.php">&lt; Back</a>
       <div class="change">
       <p>Change Info</p>
        <p id="subtitulo">Changes will be reflected to every services</p>
        <form action="../edit/edit.php" method="post">
            <div>
                <img src="../assets/user.svg" alt="perfil">
                <input type="file" name="perfil" placeholder="CHANGE PHOTO">
            </div>
            <div class="grupinput">
                <label for="">Name</label>
                <input type="text" value="<?= $usuario["usuario"] ?>" name="name" placeholder="Enter your name...">
            </div>
            <div class="grupinput">
                <label for="">Bio</label>
                <textarea type="text" value="<?= $usuario["bio"] ?>" id="bio" name="bio" rows="4" cols="50" placeholder="Enter your bio..."></textarea>
            </div>
            <div class="grupinput">
                <label for="">Phone</label>
                <input type="text" value="<?= $usuario["telefono"] ?>" name="phone" placeholder="Enter your phone...">
            </div>
            <div class="grupinput">
                <label for="">Email</label>
                <input type="email" value="<?= $usuario["email"] ?>" name="email" placeholder="Enter your email...">
            </div>
            <div class="grupinput">
                <label for="">Password</label>
                <input type="password" value="<?= $usuario["password"] ?>" name="password" placeholder="Enter your password...">
            </div>
            <button type="submit">Save</button>
        </form>
       </div>
    </div>
</body>

</html>