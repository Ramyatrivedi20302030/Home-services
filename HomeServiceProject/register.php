<?php require 'config.php'; ?>
<form method="POST">
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
Name:<input type="text" name="name"><br>
Email:<input type="email" name="email"><br>
Password:<input type="password" name="password"><br>
<button type="submit">Register</button>
</form>
<?php
if($_POST){
if(!hash_equals($_SESSION['csrf_token'],$_POST['csrf_token'])) die("CSRF error");
$pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
$stmt=$pdo->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
$stmt->execute([$_POST['name'],$_POST['email'],$pass]);
header("Location: login.php");
}
?>