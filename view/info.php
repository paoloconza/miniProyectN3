<?php
session_start();
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
            <?php
            $id = $_SESSION["user"]["id"];
            require_once "../config/database.php";
            $res = $mysqli->query("select * from usuarios where id =$id");
            $data = $res->fetch_all(MYSQLI_ASSOC);

            foreach ($data as $usuario) {
                $imgBlob = base64_encode($usuario["foto"])
            ?>
                <li><?php echo "<img src='data:image/*;base64,$imgBlob' height='35'/>" ?><p id="use"><?= $usuario["usuario"] ?></p></a>
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
        <h1>Personal info</h1>
        <p>Basic info, like your name and photo</p>

        <div class="perfil">
            <div class="edit">
                <div>
                    <p style="font-size: 20px;">Profile</p>
                    <p style="font-size: 11px;">Some info may be visible to other people</p>
                </div>
                <a href="../view/change.php?id=<?= $_SESSION["user"]["id"] ?>">Edit</a>
            </div>
            <table>

                <tr>
                    <td id="foto">PHOTO</td>
                    <td id="imag"><?php echo "<img src='data:image/*;base64,$imgBlob' height='72'/> " ?></td>
                </tr>
                <hr >
                <tr>
                    <td class="encabezado">NAME</td>
                    <td class="result"><?= $usuario["usuario"] ?></td>
                </tr>
                <tr>
                    <td class="encabezado">BIO</td>
                    <td class="result"><?= $usuario["bio"] ?></td>
                </tr>
                <tr>
                    <td class="encabezado">PHONE</td>
                    <td class="result"><?= $usuario["telefono"] ?></td>
                </tr>
                <tr>
                    <td class="encabezado">EMAIL</td>
                    <td class="result"><?= $usuario["email"] ?></td>
                </tr>
                <tr>
                    <td class="encabezado">PASSWORD</td>
                    <td class="result"><?= $usuario["password"] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>

</html>