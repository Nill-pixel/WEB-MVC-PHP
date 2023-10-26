<?php
session_start();
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
        $stm->execute();

        $userId = $this->pdo->lastInsertId();
        $_SESSION['user_id'] = $userId;
    }

    public function getUser()
    {
        $userId = $_SESSION['user_id'];
        $stm = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $stm->bindParam(':id', $userId);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function update()
    {
        $userId = $_SESSION['user_id'];
        $stm = $this->pdo->prepare('UPDATE users SET name = :name, password = :password, email = :email WHERE id = :id');
        $stm->bindParam(':name', $this->name);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':password', $this->password);
        $stm->bindParam(':id', $userId);

        $stm->execute();
    }

    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function logout()
    {
        session_destroy();
        header("Location: /app");
    }

    public function delete($id)
    {
        $stm = $this->pdo->prepare('DELETE FROM users WHERE id = ?');
        $stm->execute([$id]);
        header('Location: /app');
    }

    public function login()
    {
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stm->bindParam(":email", $this->email);
        $stm->execute();

        $user = $stm->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($this->password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: /app/todo");
        } else {
            return false;
        }
    }
}