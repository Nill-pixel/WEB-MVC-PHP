<?php
class ListDAO extends Database
{
    private $pdo;
    private $userId;
    public function __construct()
    {
        $this->pdo = Database::getConnection();
        $this->userId = $_SESSION['user_id'];
    }

    public function create($name)
    {
        $stm = $this->pdo->prepare("INSERT INTO lists(name, idUser) VALUES(?,?)");
        $stm->execute([$name, $this->userId]);
    }
    public function getList()
    {
        $stm = $this->pdo->query("SELECT * FROM lists WHERE idUser = $this->userId");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
    public function addTaskList($name, $id)
    {
        $stm = $this->pdo->prepare("INSERT INTO tasks (name, data, idUser, idList) VALUES (?,NOW(),?,?)");
        $stm->execute([$name, $this->userId, $id]);

        header('Location: /app/planned');
    }
}