<?php
	setcookie('user', $user['login'], time() - 7200, "/");
	header('Location:../me.php');