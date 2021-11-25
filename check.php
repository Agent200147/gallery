<?php
	include 'db_connection.php';
	
	$login = filter_var(trim($_POST['usernamer']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$tel = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['userpassr']), FILTER_SANITIZE_STRING);
	// if(mb_strlen($login) < 6 || mb_strlen($login) > 90)

	$pass = md5($pass."ggez@ok");


	// if(mb_strlen($login) < 6 || mb_strlen($login) > 90)

	




	// $mysql = new mysqli('localhost', 'root', '', 'gallery');

	$mysql = new PDO("mysql:host=localhost;dbname=gallery;charset=utf8", "root", "");

	$stmt = $mysql->prepare("INSERT INTO `userr` (`login`, `e-mail`, `tel`, `pass`) VALUES(:login, :email, :tel, :pass)");

	$stmt->bindParam(':login', $login);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':tel', $tel);
	$stmt->bindParam(':pass', $pass);


	// $stmt = $mysql->prepare("INSERT INTO `userr` (`login`, `e-mail`, `tel`, `pass`) VALUES(?, ?, ?, ?)");

	// $stmt->bind_param('is', $login, $email, $tel, $pass);
	// // $stmt->bind_param(2, $email);
	// // $stmt->bind_param(3, $tel);
	// // $stmt->bind_param(4, $pass);



	$stmt->execute();

	// $mysql->query("INSERT INTO `userr` (`login`, `e-mail`, `tel`, `pass`) VALUES('$login','$email','$tel','$pass')");

	//$mysql->close();
	header('Location:../me.php');
?>

