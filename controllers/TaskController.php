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

    public function update()
    {
        $oldTask = $this->task->fetchById($this->task->task_id = $_POST['id']);
        $this->task->name = $_POST['name'];
        $this->task->description = $_POST['description'];
        $this->task->task_date = $_POST['data'];
        $this->task->task_id = $_POST['id'];
        $this->task->task_check = $_POST['check'];
        $date = $_POST['data'];
        $dateTime = new DateTime($date);

        if ($dateTime->getTimestamp() < time()) {
            echo "Please enter a date in the future";
            return;
        }

        if (empty($this->task->name = $_POST['name'])) {
            $this->task->name = $oldTask['name'];
        }
        if (empty($this->task->description = $_POST['description'])) {
            $this->task->description = $oldTask['description'];
        }
        if (empty($this->task->task_check = $_POST['check'])) {
            $this->task->task_check = 0;
        }
        if (empty($this->task->task_date = $_POST['data'])) {
            $this->task->task_date = $oldTask['data'];
        }

        $this->task->update();
    }

    public function index()
    {
        $this->loadView('todo', [
            'tasks' => $this->task->today()
        ]);
    }
    public function today()
    {
        $this->loadView('planned', [
            'tasks' => $this->task->all()
        ]);
    }

    public function show($id)
    {
        $idTask = $id[0];
        $task = new TaskModel();
        $this->loadView('task', ['task' => $task->fetchById($idTask)]);
    }

    public function showImportant()
    {
        $this->loadView('important', [
            'tasks' => $this->task->allImportant()
        ]);
    }
}
