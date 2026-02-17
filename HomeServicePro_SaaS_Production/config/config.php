
<?php
$host = 'localhost';
$db   = 'homeservice';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>
