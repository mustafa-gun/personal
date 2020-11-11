<?php 
$host = '94.102.1.198';
$dbname = 'mgun_sql';
$user = 'mustafagun';
$pass = '13Ar1997';

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