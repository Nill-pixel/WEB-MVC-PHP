<?php
class UserController extends RenderViews
{
    private $userDao;
    public function __construct()
    {
        $this->userDao = new UserDAO();
    }
    public function index()
    {

    }

    public function show($id)
    {
        $idUser = $id[0];

        $this->loadView('users', ['user' => $this->userDao->fetchById($idUser)]);
    }

    public function signUp()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userDTO = new UserDTO($name, $password, $email);
        $this->userDao->signUp($userDTO);

        if (isset($_SESSION['user_id'])) {
            header('Location: /app/todo');
        }
    }

    public function profile()
    {
        $this->loadView('profile', ['user' => $this->userDao->getUser()]);
    }

    public function update()
    {
        $oldUser = $this->userDao->getUser();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($name = $_POST['name'])) {
            $name = $oldUser['name'];
        }
        if (empty($email = $_POST['email'])) {
            $email = $oldUser['email'];
        }
        if (empty($password = $_POST['password'])) {
            $password = $oldUser['password'];
        }

        $userDTO = new UserDTO($name, $password, $email);
        $this->userDao->update($userDTO);
        header('Location: /app/profile');
    }

    public function delete($id)
    {
        $idUser = $id[0];
        $this->userDao->delete($idUser);

    }

    public function logout()
    {
        $this->userDao->logout();
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->userDao->login($email, $password);
    }
}
