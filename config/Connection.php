<?php

namespace config;

require __DIR__ . '/../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Connection
{
    public static function make()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
        $dotenv->safeLoad();
        $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

        $host = $_ENV['DB_HOST'];
        $db = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            return new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
