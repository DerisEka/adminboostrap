<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registerName']) && isset($_POST['registerEmail']) && isset($_POST['registerPassword']) && isset($_POST['registerConfirmPassword'])) {
    $name = $_POST['registerName'];
    $email = $_POST['registerEmail'];
    $password = $_POST['registerPassword'];
    $confirmPassword = $_POST['registerConfirmPassword'];


    if ($password === $confirmPassword) {

        header("Location:login_regist.php");
        exit();
    } else {
        echo "Passwords do not match.";
    }
}
?>

