<?php 
$host = 'http://localhost:8080';
$dbname = '3190209_mgun';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

];
try { //Veri tabanı bağlantısını kontrol ediyor.
	$connection = new PDO ($dsn, $user, $pass, $options);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { 
	echo 'Bağlantı hatası: ' . $e->getMessage(); //Bağlantı sağlanamzsa uyarı mesajı gösteriyor.
	exit;
}
 ?>
