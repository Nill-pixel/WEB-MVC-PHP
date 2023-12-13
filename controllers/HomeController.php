<?php

class HomeController extends RenderViews
{
    private $session;
    public function index()
    {
        $users = new UserDAO();
        $this->session = new SessionManager();

        $this->loadView('home', [
            'title' => 'Home Page',
            'users' => $users->fetch()
        ]);
    }

    public function todo()
    {
        $this->session->verify();
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
}