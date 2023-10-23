<?php

class TaskModel extends Database
{
    public $name;
    public $description;
    public $task_id;
    public $task_date;
    public $task_check;
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
    public function today()
    {
        $time = new DateM;
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE data =");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function allImportant()
    {
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE important = 1");
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

    public function update()
    {
        $stm = $this->pdo->prepare("UPDATE tasks SET name = :name, data = :data, description = :description, important = :important WHERE id = :id ");
        $stm->bindParam(':name', $this->name);
        $stm->bindParam(':description', $this->description);
        $stm->bindParam(':id', $this->task_id);
        $stm->bindParam(':important', $this->task_check);
        $stm->bindParam(':data', $this->task_date);
        $stm->execute();

        header('Location: /app/tasks/' . $this->task_id);
    }
}