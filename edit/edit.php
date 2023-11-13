<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $usuario = $_POST["name"];
    $bio = $_POST["bio"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tmp_name = $_FILES["perfil"]["tmp_name"];
    // $perfil = $_POST["perfil"];
    // extract($_POST);
    $perfil = addslashes(file_get_contents($tmp_name));

    session_start();
    $id = $_SESSION["user"]["id"];
    var_dump($id);

    require_once "../config/database.php";
    $mysqli->query("update usuarios set foto = '$perfil', usuario = '$usuario', bio = '$bio', telefono = '$phone', email = '$email', password = '$password' where id = $id");
    // $mysqli->query("insert into usuarios (email, password) values($email, $password)");
    header("Location: /view/info.php");
}