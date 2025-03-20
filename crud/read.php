<?php

require '../connect.php';

$sql = 'SELECT publisher_id, name 
		FROM publishers';

$statement = $pdo->query($sql);

// get all publishers
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    // show the publishers
    foreach ($publishers as $publisher) {
        echo $publisher['name'] . '<br>';
    }
}
