<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $email = $_POST["Email"];
    $password = $_POST["contraseña"];
    // $encriptado = password_hash($password, PASSWORD_DEFAULT);

    require_once "../config/database.php";
   
    $mysqli->query("insert into usuarios (email, password) values('$email', '$password')");
    session_start();
    header("Location: /view/info.php");
}