<?php
phpinfo(); exit();

define('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . '/datas/data.db');
// var_dump(DB_PATH); exit();
$connection = new PDO('sqlite:'.DB_PATH);

if (isset($_GET['id'])) {
	$view = 'user.php';
} else {
	$view = 'users.php';
}



require("./views/{$view}");