<?php
$host = "mysql.hostinger.es";
$db_name = "u787097667_db";
$username = "u787097667_user";
$password = "bVuhtkuL4r";

try {
	$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// to handle connection error
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
?>