<?php
session_start();
class ListController extends RenderViews
{
    private $list;

    public function __construct()
    {
        $this->list = new ListDAO();
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