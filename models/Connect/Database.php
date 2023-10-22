<?php

class Database
{

    public function getConnection()
    {
        try {
            $pdo = new PDO("mysql:dbname=task;host=localhost", "root", "");
            return $pdo;
        } catch (PDOException $err) {

        }
    }

}