<?php

class HomeController extends RenderViews
{
    public function index()
    {
        $users = new UserModel();

        $this->loadView('home', [
            'title' => 'Home Page',
            'users' => $users->fetch()
        ]);
    }

    public function todo()
    {
        $this->loadView('todo', [
            'title' => 'Todo List'
        ]);
    }

    public function signIn()
    {
        $this->loadView('signIn', []);
    }

    public function signUp()
    {
        $this->loadView('signUp', []);
    }

    public function add()
    {
        $this->loadView('addTask', []);
    }
}