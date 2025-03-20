<?php

require 'connect.php';

$sql = 'insert into authors(first_name, last_name) values(:first_name, :last_name)';

$statement = $pdo->prepare($sql);

$statement->execute([
    'first_name' => 'Henry',
    'last_name' => 'Aaron'
]);
