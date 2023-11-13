<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);
    $usuario = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $perfil = $_POST["perfil"];
    // extract($_POST);

    session_start();
    $id = $_SESSION["user"]["id"];
    var_dump($id);

    require_once "../config/database.php";
    $mysqli->query("update usuarios set foto = '$perfil', usuario = '$usuario', bio = '$bio', telefono = '$phone', email = '$email', password = '$password' where id = $id");
    header("Location: /view/info.php");
}