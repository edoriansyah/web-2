<?php

require 'connect.php';

$sql = 'insert into authors(first_name, last_name) values(?,?)';

$statement = $pdo->prepare($sql);

$statement->execute(['Sandra', 'Aamodt']);
