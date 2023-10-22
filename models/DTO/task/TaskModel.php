<?php

class TaskModel extends Database
{
    public $name;
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
    }
    public function index()
    {
        $stm = $this->pdo->prepare("INSERT INTO tasks (id, name, data) VALUES (uuid(),?,NOW())");
        $stm->execute([$this->name]);

        header('Location: /app/todo');
        echo json_encode(["msg" => "Created"]);
    }

    public function all()
    {
        $stm = $this->pdo->query("SELECT * FROM tasks");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM tasks WHERE id = ?");
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}