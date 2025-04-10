<?php

require_once 'models/Author.php';

use models\Author;

if ($_GET) {
    Author::delete($_GET['id']);
}

header('Location:authors.php');
