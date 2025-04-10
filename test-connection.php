<?php

// require_once 'models/Author.php';

$pdo = require 'Connection.php';
$statement = $pdo->query('select * from authors');
print_r($statement->fetchAll());

// use models\Author;

// print_r(Author::get());
