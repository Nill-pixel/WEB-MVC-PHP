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
        $stm = $this->pdo->prepare("INSERT INTO lists(id, name, idUser) VALUES(uuid(),?,?)");
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
}