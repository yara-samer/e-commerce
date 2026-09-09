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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_update'])) {
    
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $email    = mysqli_real_escape_string($connect, $_POST['email']);
    $phone    = mysqli_real_escape_string($connect, $_POST['phone']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $updateFields = array();

    if (!empty($fullname)) {
        $updateFields[] = "`username` = '$fullname'";
    }
    if (!empty($email)) {
        $updateFields[] = "`email` = '$email'";
    }
    if (!empty($phone)) {
        $updateFields[] = "`phone` = '$phone'";
    }
    if (!empty($password)) {
        $updateFields[] = "`password` = '$password'";
    }

    if (isset($_FILES['profile_img']) && $_FILES['profile_img']['error'] == 0) {
        $ext = pathinfo($_FILES['profile_img']['name'], PATHINFO_EXTENSION);
        $image_name = time() . '_' . $userId . '.' . $ext;
        $target = "uploads/" . $image_name;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['profile_img']['tmp_name'], $target)) {
            $updateFields[] = "`image` = '$target'";
        }
    }

    if (count($updateFields) > 0) {
        $updateSql = "UPDATE `users` SET " . implode(', ', $updateFields) . " WHERE `id` = '$userId'";

        if (mysqli_query($connect, $updateSql)) {
            if (!empty($fullname)) $_SESSION['USER']['username'] = $fullname;
            if (!empty($email)) $_SESSION['USER']['email'] = $email;

            // رسالة النجاح عند التحديث
            $_SESSION['msg'] = "Update Success!";
            $_SESSION['msg_type'] = "success";

            header("Location: profile.php");
            exit();
        } else {
            $_SESSION['msg'] = "Database Error: " . mysqli_error($connect);
            $_SESSION['msg_type'] = "error";
            header("Location: profile.php");
            exit();
        }
    } else {
        header("Location: profile.php");
        exit();
    }
} else {
    header("Location: profile.php");
    exit();
}
