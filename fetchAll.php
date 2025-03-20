<?php

// connect to the database to get the PDO instance
require 'connect.php';

$sql = 'SELECT publisher_id, name 
        FROM publishers';

// execute a query
$statement = $pdo->query($sql);

// fetch all rows
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

// display the publisher name
foreach ($publishers as $publisher) {
    echo $publisher['name'] . '<br>';
}
