<?php
class ListDAO extends Database
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function create($name)
    {
        $stm = $this->pdo->prepare("INSERT INTO lists(id, name) VALUES(uuid(),?)");
        $stm->execute([$name]);
    }
}