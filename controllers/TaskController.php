<?php
class TaskController extends RenderViews
{
    private $task;
    public function __construct()
    {
        $this->task = new TaskModel();
    }
    public function create()
    {
        $this->task->name = $_POST['name'];

        $this->task->index();
    }

    public function view()
    {

    }

    public function index()
    {
        $this->loadView('todo', [
            'tasks' => $this->task->all()
        ]);
    }
}
