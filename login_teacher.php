<?php
session_start();
include("init.php");

if (isset($_POST["tid"], $_POST["password"])) {
    $teacher_id = mysqli_real_escape_string($conn, $_POST["tid"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // SQL Query
    $sql = "SELECT tid, name FROM teachers WHERE tid='$teacher_id' AND pass='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if query ran successfully
    if (!$result) {
        die("Query Failed: " . mysqli_error($conn)); 
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['teacher_id'] = $row['tid']; 
        $_SESSION['teacher_name'] = $row['name']; 
        $_SESSION['role']='teacher';
        header("Location: dashboard_teacher.php"); 
        exit();
    } else {
        $error = "Invalid Teacher ID or Password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class="title">
        <span>Student Result Management System</span>
    </div>

    <div class="main">
        <div class="login">
            <form action="" method="post">
                <fieldset>
                    <legend class="heading">Teacher Login</legend>
                    <input type="text" name="tid" placeholder="Teacher ID" autocomplete="off" required>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    <input type="submit" value="Login">
                    <?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
                </fieldset>
            </form>    
        </div>
        <div class="search">
            <form action="./student.php" method="get">
                <fieldset>
                    <legend class="heading">For Students</legend>

                    <?php
                        include('init.php');

                        $class_result=mysqli_query($conn,"SELECT `name` FROM `class`");
                            echo '<select name="class">';
                            echo '<option selected disabled>Select Class</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>

                    <input type="text" name="rn" placeholder="Roll No">
                    <input type="submit" value="Get Result">
                </fieldset>
            </form>
        </div>
        <footer id="footer" style="text-align: right;">
        <a href="index.html" style="font-size: 24px; color: red; padding-right:10%">Go Back</a>
    </footer>