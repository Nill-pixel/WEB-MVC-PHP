<?php
class UserController extends RenderViews
{
    private $user;
    public function __construct()
    {
        $this->user = new UserModel();
    }
    public function index()
    {

    }

    public function show($id)
    {
        $idUser = $id[0];

        $this->loadView('users', ['user' => $this->user->fetchById($idUser)]);
    }

    public function signUp()
    {
        $this->user->name = $_POST['name'];
        $this->user->email = $_POST['email'];
        $this->user->password = $_POST['password'];

        $this->user->signUp();

        if (isset($_SESSION['user_id'])) {
            header('Location: /app/todo');
        }

    }

    public function profile()
    {
        $this->loadView('profile', ['user' => $this->user->getUser()]);
    }

    public function update()
    {
        $oldUser = $this->user->getUser();
        $this->user->name = $_POST['name'];
        $this->user->email = $_POST['email'];
        $this->user->password = $_POST['password'];

        if (empty($this->user->name = $_POST['name'])) {
            $this->user->name = $oldUser['name'];
        }
        if (empty($this->user->email = $_POST['email'])) {
            $this->user->email = $oldUser['email'];
        }
        if (empty($this->user->password = $_POST['password'])) {
            $this->user->password = $oldUser['password'];
        }

        $this->user->update();
        header('Location: /app/profile');
    }

    public function delete()
    {

    }

    public function logout()
    {
        $this->user->logout();
    }
}
