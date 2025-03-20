<?php
session_start();
if (!isset($_SESSION['teacher_id'])) {
    header("Location: login_teacher.php");
    exit();
}
echo "Welcome, " . $_SESSION['teacher_name'];
?>
    <?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
    </style>
</head>
<body>
        
    <div class="title">
        <span class="heading">Dashboard</span>
        <a href="login_teacher.php" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
<<<<<<< HEAD
                    <a href="add_classes_bt.php">Add Class</a>
                    <a href="manage_classes_bt.php">Manage Class</a>
=======
                    <a href="add_classes.php">Add Class</a>
                    <a href="manage_classes.php">Manage Class</a>
>>>>>>> 1dd96387fdafe7563486877c31fa7fa4a4f52cbe
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
<<<<<<< HEAD
                    <a href="add_students_bt.php">Add Students</a>
                    <a href="manage_students_bt.php">Manage Students</a>
=======
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
>>>>>>> 1dd96387fdafe7563486877c31fa7fa4a4f52cbe
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
<<<<<<< HEAD
                    <a href="add_results_bt.php">Add Results</a>
                    <a href="manage_results_bt.php">Manage Results</a>
=======
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
>>>>>>> 1dd96387fdafe7563486877c31fa7fa4a4f52cbe
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
        <?php
            echo '<p>Number of classes:'.$no_of_classes[0].'</p>';
            echo '<p>Number of students:'.$no_of_students[0].'</p>';
            echo '<p>Number of results:'.$no_of_result[0].'</p>';
        ?>
    </div>

</body>
</html>
