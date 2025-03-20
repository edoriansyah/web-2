<?php

require_once 'connect.php';

try {
    $pdo->beginTransaction();

    $sql = 'INSERT INTO books(title, isbn, published_date, publisher_id) 
    VALUES(:title, :isbn, :published_date, :publisher_id)';

    $statement = $pdo->prepare($sql);

    $book = [
        'title' => 'Eternal',
        'isbn' => '9780525539766',
        'published_date' => '2025-03-20',
        'publisher_id' => 2,
    ];

    $statement->bindParam(':title', $book['title'], PDO::PARAM_STR);
    $statement->bindParam(':isbn', $book['isbn'], PDO::PARAM_STR);
    $statement->bindParam(':published_date', $book['published_date'], PDO::PARAM_STR);
    $statement->bindParam(':publisher_id', $book['publisher_id'], PDO::PARAM_INT);

    $statement->execute();
    // commit the transaction
    $pdo->commit();
} catch (\PDOException $e) {
    // rollback the transaction
    $pdo->rollback();

    // show the error message
    die($e->getMessage());
}
