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
    
</head>

<body>
    <nav class="navegacion">
        <img src="../assets/devchallenges.svg" alt="logo">
        <div class="menu">
        <?php
            $id = $_SESSION["user"]["id"];
            require_once "../config/database.php";
            $res = $mysqli->query("select * from usuarios where id =$id");
            $data = $res->fetch_all(MYSQLI_ASSOC);

            foreach ($data as $usuario) {
                $imgBlob = base64_encode($usuario["foto"])
            ?>
        <li><?php echo "<img src='data:image/*;base64,$imgBlob' height='35'/>" ?><p id="use"><?= $usuario["usuario"] ?></p></a>
        <?php
            }
        ?>
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
        <a id="back" href="/view/info.php">&lt; Back</a>
       <div class="change">
       <p>Change Info</p>
        <p id="subtitulo">Changes will be reflected to every services</p>
        <form action="../edit/edit.php" method="post" enctype="multipart/form-data">
            <div>
                <img src="../assets/user.svg" alt="perfil">
                <input type="file" accept="image/*" name="perfil">
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