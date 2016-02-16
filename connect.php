
<?php
$user = 'root';
$pass = 'root';
$name = 'mydb';
$dbh = null;
try {
$dbh = new PDO('mysql:host=localhost;dbname='.$name, $user, $pass);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>
