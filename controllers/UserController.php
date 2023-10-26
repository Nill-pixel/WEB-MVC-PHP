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
}