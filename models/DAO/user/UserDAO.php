<?php
class UserDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getConnection();
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

    public function signUp(UserDTO $user)
    {
        $hashPassword = password_hash($user->password, PASSWORD_DEFAULT);
        $stm = $this->pdo->prepare("INSERT INTO users(id, name, email, password) VALUES (uuid(),:name,:email,:password)");
        $stm->bindParam(':name', $user->name);
        $stm->bindParam(':email', $user->email);
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

    public function update(UserDTO $user)
    {
        $userId = $_SESSION['user_id'];
        $stm = $this->pdo->prepare('UPDATE users SET name = :name, password = :password, email = :email WHERE id = :id');
        $stm->bindParam(':name', $user->name);
        $stm->bindParam(':email', $user->email);
        $stm->bindParam(':password', $user->password);
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

    public function login($email, $password)
    {
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stm->bindParam(":email", $email);
        $stm->execute();

        $user = $stm->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: /app/todo");
        } else {
            return false;
        }
    }
}