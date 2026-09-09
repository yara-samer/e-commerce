<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentia</title>
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="css/libs/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="left">
            <img src="Studentia.png" alt="Studentia Logo"><br>
            <h1>Studentia</h1>
        </div>
        <form  class="bar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="Properities.php">Housing</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </form>
        <div class="right">
            <a href="login.php"><button type="button">Log In</button></a>
            <a href="signup.php"><button type="button">Sign Up</button></a>
        </div>
    </div>
