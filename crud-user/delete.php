<?php
require_once 'connection.php';

$id = $_GET['id'];
$pdo->query("DELETE FROM users WHERE id = $id");
header('Location: index.php');
