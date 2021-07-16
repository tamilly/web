<?php
    include('config.php');
    session_start();

    $user_check = $_SESSION['login_user'];

    $qry = "SELECT username from users WHERE username = '$user_check' ";

    $ses_sql = mysqli_query($db, $qry);

    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

    $login_session = $row['nickname'];

    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
    }
?>