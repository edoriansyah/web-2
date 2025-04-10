<?php

namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class Author
{
    public static function get()
    {
        $pdo = Connection::make();
        $statement = $pdo->query('select * from authors');

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public static function create($data)
    {
        if ($data) {
            $pdo = Connection::make();
            $statement = $pdo->prepare("insert into authors (first_name, middle_name, last_name) values (:first_name, :middle_name, :last_name)");
            $statement->bindParam(':first_name', $data['first_name']);
            $statement->bindParam(':middle_name', $data['middle_name']);
            $statement->bindParam(':last_name', $data['last_name']);
            $statement->execute();
        }
    }

    public static function find($id)
    {
        if ($id) {
            $pdo = Connection::make();
            $statement = $pdo->prepare("select * from authors where author_id = :id");
            $statement->bindParam(':id', $id);
            $statement->execute();

            return $statement->fetch();
        }
    }

    public static function update($data)
    {
        if ($data) {
            $pdo = Connection::make();
            $statement = $pdo->prepare("update authors set first_name=:first_name, middle_name=:middle_name, last_name=:last_name where author_id = :id");
            $statement->bindParam(':first_name', $data['first_name']);
            $statement->bindParam(':middle_name', $data['middle_name']);
            $statement->bindParam(':last_name', $data['last_name']);
            $statement->bindParam(':id', $data['author_id']);
            $statement->execute();
        }
    }

    public static function delete($id)
    {
        if ($id) {
            $data = self::find($id);
            if ($data['author_id']) {
                $pdo = Connection::make();
                $statement = $pdo->prepare("delete from authors where author_id = :id");
                $statement->bindParam(':id', $data['author_id']);
                $statement->execute();
            }
        }
    }
}
