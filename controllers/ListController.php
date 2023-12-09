<?php
session_start();
class ListController extends RenderViews
{
    private $list;
    private $session;

    public function __construct()
    {
        $this->list = new ListDAO();
        $this->session = new SessionManager();
        $this->session->verify();

    }

    public function create()
    {
        $name = $_POST['name'];
        $this->list->create($name);
    }
    public function AddList()
    {
        $this->loadView('addList', ['lists' => $this->list->getList()]);
    }

    public function getList()
    {
        $this->list->getList();
    }
}