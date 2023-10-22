<?php
class UserController extends RenderViews
{
    public function index()
    {

    }

    public function show($id)
    {
        $idUser = $id[0];

        $user = new UserModel();

        $this->loadView('users', ['user' => $user->fetchById($idUser)]);
    }
}