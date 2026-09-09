<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['USER'])) {
    header("Location: login.php");
    exit();
}

$connect = mysqli_connect("localhost", "root", "", "project");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$userId = $_SESSION['USER']['id'];

if (isset($_POST['delete_btn'])) {
    $deleteSql = "DELETE FROM `users` WHERE `id` = '$userId'";

    if (mysqli_query($connect, $deleteSql)) {
        session_destroy();
        
        session_start();
        $_SESSION['msg'] = "Delete Success!";
        $_SESSION['msg_type'] = "delete";

        header("Location: login.php");
        exit();
    } else {
        $_SESSION['msg'] = "Delete failed!";
        $_SESSION['msg_type'] = "error";
        header("Location: profile.php");
        exit();
    }
}
?>