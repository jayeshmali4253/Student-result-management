<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include('init.php');

if (isset($_SESSION['login_user'])) {
    $user_check = $_SESSION['login_user'];
    $ses_sql = mysqli_query($conn, "SELECT userid FROM admin_login WHERE userid = '$user_check'");
    $row = mysqli_fetch_array($ses_sql);
    $login_session = $row['userid'];

    if (!isset($_SESSION['login_user'])) {
        header("Location: login.php"); 
        exit();
    }
} elseif (isset($_SESSION['teacher_id'])) {
    $teacher_check = $_SESSION['teacher_id'];
    $ses_sql = mysqli_query($conn, "SELECT tid FROM teachers WHERE tid = '$teacher_check'");
    $row = mysqli_fetch_array($ses_sql);
    $login_session = $row['tid'];

    if (!isset($_SESSION['teacher_id'])) {
        header("Location: login_teacher.php"); 
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
