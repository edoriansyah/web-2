<?php

require 'connect.php';

$sql = 'insert into authors(first_name, last_name) values(?,?)';

$statement = $pdo->prepare($sql);

$statement->bindValue(':first_name', 'Nick');
$statement->bindValue(':last_name', 'Abadzis');

// $author = [
// 	'first_name' => 'Chris',
// 	'last_name' => 'Abani',
// ];

// $statement->bindValue(':first_name', $author['first_name']);
// $statement->bindValue(':last_name', $author['last_name']);

// // change the author variable
// $author['first_name'] = 'Tom';
// $author['last_name'] = 'Abate';

$statement->execute();
