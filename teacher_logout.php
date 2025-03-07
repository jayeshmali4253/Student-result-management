

<?php
session_start();
session_destroy(); // Destroy session

// Redirect with JavaScript alert
echo '<script language="javascript">';
echo 'alert("Logout successful");';
echo 'window.location.href="login_teacher.php";'; 
echo '</script>';
exit();
?>
