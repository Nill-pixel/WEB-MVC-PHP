<?php
class TaskController extends RenderViews
{
    private $task;
    public function __construct()
    {
        $this->task = new TaskDAO();
    }
    public function create()
    {
        $name = $_POST['name'];
        $this->task->create($name);
    }

    public function update()
    {
        $oldTask = $this->task->fetchById($this->task->task_id = $_POST['id']);
        $name = $_POST['name'];
        $description = $_POST['description'];
        $task_date = $_POST['data'];
        $task_id = $_POST['id'];
        $task_check = $_POST['check'];
        $date = $_POST['data'];
        $dateTime = new DateTime($date);

        if ($dateTime->getTimestamp() < time()) {
            echo "Please enter a date in the future";
            return;
        }

        if (empty($name)) {
            $name = $oldTask['name'];
        }
        if (empty($description)) {
            $description = $oldTask['description'];
        }
        if (empty($task_check)) {
            $task_check = 0;
        }
        if (empty($task_date)) {
            $task_date = $oldTask['data'];
        }

        $updateTask = new TaskDTO($name, $description, $task_check, $task_id, $task_date);
        $this->task->update($updateTask);
    }

    public function planned()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->planned()
        ]);
    }
    public function index()
    {
        $this->loadView('todo', [
            'tasks' => $this->task->today()
        ]);
    }

    public function all()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->all()
        ]);
    }

    public function delete($id)
    {
        $idTask = $id[0];
        $this->task->delete($idTask);
    }

    public function show($id)
    {
        $idTask = $id[0];
        $this->loadView('task', ['task' => $this->task->fetchById($idTask)]);
    }

    public function showImportant()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->allImportant()
        ]);
    }

    public function search()
    {
        $name = $_POST['name'];
        $this->loadView('tasks', ['tasks' => $this->task->search($name)]);

    }
    public function add()
    {
        $this->loadView('addTask', []);
    }

    public function completed()
    {
        $completed = $_POST['completed'];
        $id = $_POST['id'];
        $this->task->completed($completed, $id);
    }

    public function taskCompleted()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->taskCompleted()
        ]);
    }
}
