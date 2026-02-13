<?php require 'config.php'; ?>
<form method="POST">
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
Email:<input type="email" name="email"><br>
Password:<input type="password" name="password"><br>
<button type="submit">Login</button>
</form>
<?php
if($_POST){
if(!hash_equals($_SESSION['csrf_token'],$_POST['csrf_token'])) die("CSRF error");
$stmt=$pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$_POST['email']]);
$user=$stmt->fetch();
if($user && password_verify($_POST['password'],$user['password'])){
$_SESSION['user_id']=$user['id'];
$_SESSION['role']=$user['role'];
header("Location: dashboard.php");
}
}
?>