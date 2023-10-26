<?php

class UserModel extends Database
{
    public $name;
    public $password;
    public $email;
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection();
    }

    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM users");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }

    public function signUp()
    {
        $hashPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $stm = $this->pdo->prepare("INSERT INTO users(id, name, email, password) VALUES (uuid(),:name,:email,:password)");
        $stm->bindParam(':name', $this->name);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':password', $hashPassword);

        $userId = $this->pdo->lastInsertId();
        $_SESSION['user_id'] = $userId;

        $stm->execute();
    }

    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}