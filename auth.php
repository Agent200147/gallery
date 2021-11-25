<?php
	include 'db_connection.php';

	$login = filter_var(trim($_POST['usernamev']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['userpassv']), FILTER_SANITIZE_STRING);
	// if(mb_strlen($login) < 6 || mb_strlen($login) > 90)

	$pass = md5($pass."ggez@ok");



	$stmt = $mysql->prepare("SELECT * FROM `userr` WHERE `login` = :login and `pass` = :pass");

	$stmt->bindParam(':login', $login);
	$stmt->bindParam(':pass', $pass);
	$stmt->execute();

	$user = $stmt->fetch();
	if(count($user) == 1){
		echo "Такой пользователь не найден!";
		// echo $login;
		// $t = count($user);
		// echo $t;
		exit();

	}

	setcookie('user', $user['login'], time() + 7200, "/");

	$stmt = $mysql->prepare("UPDATE userr SET date_last_visit = CURRENT_TIMESTAMP WHERE `login` = :login;");
	$stmt->bindParam(':login', $login);
	$stmt->execute();
	
	header('Location:../me_auth.php');