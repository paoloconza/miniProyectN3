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
            ?>
                <li><img src="#" alt="perfil"><a href="#"><?= $usuario["usuario"] ?></a>
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
            <div>
                <h2>Profile</h2>
                <p>Some info may be visible to other people</p>
            </div>
            <a href="../view/change.php?id=<?= $_SESSION["user"]["id"] ?>">Edit</a>
            <table>

                <tr>
                    <th>PHOTO</th>
                    <td><?= $usuario["foto"] ?></td>
                </tr>
                <tr>
                    <th>NAME</th>
                    <td><?= $usuario["usuario"] ?></td>
                </tr>
                <tr>
                    <th>BIO</th>
                    <td><?= $usuario["bio"] ?></td>
                </tr>
                <tr>
                    <th>PHONE</th>
                    <td><?= $usuario["telefono"] ?></td>
                </tr>
                <tr>
                    <th>EMAIL</th>
                    <td><?= $usuario["email"] ?></td>
                </tr>
                <tr>
                    <th>PASSWORD</th>
                    <td><?= $usuario["password"] ?></td>
                </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>

</html>