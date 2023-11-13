<?php
class ListController
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

    public function getList()
    {
        $this->list->getList();
    }
}