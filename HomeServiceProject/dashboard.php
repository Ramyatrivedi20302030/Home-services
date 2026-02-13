<?php require 'config.php';
if(!isset($_SESSION['user_id'])) header("Location: login.php");
echo "<h2>Welcome User</h2>";
echo "<a href='logout.php'>Logout</a>";
?>