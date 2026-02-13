<?php require 'config.php'; ?>
<h2>Services</h2>
<?php
$stmt=$pdo->query("SELECT * FROM services");
while($s=$stmt->fetch()){
echo "<div><h3>".$s['name']."</h3><p>".$s['description']."</p><p>₹".$s['price']."</p></div>";
}
?>