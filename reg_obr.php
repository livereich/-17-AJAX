<?php
header('Content-Type: text/html; charset=utf-8');

$host = 'localhost';
$db = 'fdkpgjvl_MyBasa';
$user = 'fdkpgjvl_MyBasa';
$password = 'Mariya2015';
 


$mysqli = mysqli_connect($host, $user, $password, $db); 


} else {

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);

/* if ($mysqli == false) {
  print("Ошибка: Невозможно подключится к MySQL");
 */

/*   print("Успешно");  */
$result = $mysqli->query("SELECT * FROM `users` WHERE 'email'='$email'");

if ($result->num_raws != 0) {
  print('exist'); 
} else {
print("оk");
$mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES (?, ?, ?, ?)";)
}
