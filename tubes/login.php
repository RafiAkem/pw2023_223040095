<?php
session_start();

require('functions.php');
$title = 'Login Page';
// Cek cookie login
if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash("sha256", $row["username"])) {
        $_SESSION["id"] = $id;
        $_SESSION["login"] = true;
    }
}

// Cek cookie
if (isset($_SESSION["login"])) {
    header("location: admin.php");
    exit;
}

// Login
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];

            if (isset($_POST["remember"])) {
                setcookie("id", $row["id"], time() + 120);
                setcookie("key", hash("sha256", $row["username"]), time() + 120);
            }

            header("Location: admin.php");
            exit;
        }
    }
    $error = true;
}
require('views/login.views.php');
