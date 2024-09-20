<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    if (true /* ganti dengan kondisi otentikasi */) {
        header("Location: index.php");
        exit();
    } else {
        echo "Login failed. Please try again.";
    }
}
?>
