<?php

require_once 'models/Author.php';

use models\Author;


if ($_POST['first_name']) {
    Author::update($_POST);
    header('Location:authors.php');
} else {
    header('Location:author-create.php');
}
