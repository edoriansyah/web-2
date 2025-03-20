<?php

// connect to the database to get the PDO instance
require 'connect.php';

// execute a query
$sql = 'SELECT book_id, title FROM books';
$statement = $pdo->query($sql);

// fetch the next row
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $row['title'] . '<br>';
}
