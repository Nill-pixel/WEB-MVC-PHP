<?php
session_start();
class TaskDAO
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }
    public function create($name)
    {
        $stm = $this->pdo->prepare("INSERT INTO tasks (id, name, data) VALUES (uuid(),?,NULL)");
        $stm->execute([$name]);

        header('Location: /app/planned');
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
        $currentDate = date('Y-m-d');
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE data LIKE '$currentDate%' AND completed IS NULL");
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

    public function planned()
    {
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE data IS NOT NULL");
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

    public function update(TaskDTO $task)
    {
        $stm = $this->pdo->prepare("UPDATE tasks SET name = :name, data = :data, description = :description, important = :important WHERE id = :id ");
        $stm->bindParam(':name', $task->name);
        $stm->bindParam(':description', $task->description);
        $stm->bindParam(':id', $task->task_id);
        $stm->bindParam(':important', $task->task_check);
        $stm->bindParam(':data', $task->task_date);
        $stm->execute();

        header('Location: /app/tasks/' . $task->task_id);
    }

    public function delete($id)
    {
        $stm = $this->pdo->prepare('DELETE FROM tasks WHERE id = ?');
        $stm->execute([$id]);
        header('Location: /app/planned');
    }

    public function completed($completed, $id)
    {
        $stm = $this->pdo->prepare('UPDATE tasks SET completed = :completed WHERE id = :id');
        $stm->bindParam(':completed', $completed);
        $stm->bindParam(':id', $id);
        $stm->execute();

        header('Location: /app/todo');
    }

    public function taskCompleted()
    {
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE completed IS NOT NULL");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function search($name)
    {
        $stm = $this->pdo->query("SELECT * FROM tasks WHERE name LIKE '$name%'");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
}