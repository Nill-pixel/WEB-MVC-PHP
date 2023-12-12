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
    public function addTaskList()
    {
        $this->loadView('addTaskList', ['lists' => $this->list->getList()]);
    }
    public function addTaskListSave()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $this->list->addTaskList($name, $id);
    }
    public function list()
    {
        $id = $_GET['id'];
        $this->loadView('tasks', ['tasks' => $this->list->getTaskByList($id), 'lists' => $this->list->getList()]);
    }
}