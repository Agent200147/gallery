<?php
$ini = parse_ini_file('ini/config.ini');

$host = $ini['host'];     
$login_db = $ini['login'];    
$password = $ini['password']; 
$name = $ini['name'];  


try {
   $mysql = new PDO("mysql:host=$host;dbname=$name;charset=utf8", "$login_db", "$password");

	$mysqll = new PDO("mysql:host=$host;dbname=$name;charset=utf8", "$login_db", "$password");
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}


//exec('mysqldump -u root -p DBName gallery > /ini/fileDBName.sql');

?>
