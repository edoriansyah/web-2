<?php

// connect to the bookdb database
require_once '../connect.php';

$publisher = [
    'publisher_id' => 1,
    'name' => 'McGraw-Hill Education'
];

$sql = 'UPDATE publishers
        SET name = :name
        WHERE publisher_id = :publisher_id';

// prepare statement
$statement = $pdo->prepare($sql);

// bind params
$statement->bindParam(':publisher_id', $publisher['publisher_id'], PDO::PARAM_INT);
$statement->bindParam(':name', $publisher['name']);

// execute the UPDATE statment
if ($statement->execute()) {
    echo 'The publisher has been updated successfully!';
}
