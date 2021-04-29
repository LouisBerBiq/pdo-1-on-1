<?php
function all(PDO $connection):array {
	$userRequest = 'SELECT * FROM users';
	$pdoSt = $connection->query($userRequest); 
	//this is a "PDO statement"
 
	return $pdoSt->fetchAll(); //$users
}

function find(PDO $connection, string $id):stdClass {
	$userRequest = 'SELECT * FROM users WHERE id = :id';
	$pdoSt = $connection->prepare($userRequest);
	$pdoSt->execute([':id' => $id]);

	return $pdoSt->fetch(); //$user
}