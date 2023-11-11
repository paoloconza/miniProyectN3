<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    require_once "../config/database.php";

    $res = $mysqli->query("select * from usuarios where email = '$email' and password = '$password'");

    if ($res->num_rows === 1) {
        $userData = $res->fetch_assoc();

        session_start();
        $_SESSION["user"] = $userData;
        header("Location: /view/info.php");
    }else {
        echo "porfavor verifique si el email o la contraseña son las correctas";
    }
}

?>
