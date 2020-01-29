<!DOCTYPE html>
    <?php
        session_start();

        // $login_status = $_SESSION["login"];

        // echo $login_status . '<a style="color:blue;" href="https://m.me/asifulmamun">@asifulmamun</a><br>';

        // // if not logged
        // if($_SESSION['login'] !== 'Logged'){
            
        //     echo '<script>alert("Your have not logged in yet.");</script>';
        //     echo $_SESSION['login_status'] . '<br><h1 style="color:red;">For Login <a href="login/">click here</a>.</h1>';
        //     // header('location:login/');
        // }
        // else{
    ?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrat css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <!-- custom or MAIN css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- PHP included file or some global variable -->
    <?php
        require "configuration/connection.php"; // include db connection
        require "configuration/init.php"; // include db connection
    ?>
</head>
<body>
<br><br><br><br><br>
    <!-- NAV form w3 school -->
    <?php require_once 'nav.php';?>