<?php

require 'connect.php';

$sql = 'insert into authors(first_name, last_name)
        values(:first_name,:last_name)';

$statement = $pdo->prepare($sql);

$author = [
    'first_name' => 'Chris',
    'last_name' => 'Abani',
];

$statement->bindParam(':first_name', $author['first_name']);
$statement->bindParam(':last_name', $author['last_name']);

// change the author variable
$author['first_name'] = 'Tom';
$author['last_name'] = 'Abate';

// execute the query with value Tom Abate
$statement->execute();
