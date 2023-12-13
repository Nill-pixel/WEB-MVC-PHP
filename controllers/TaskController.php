<?php
class TaskController extends RenderViews
{
    private $task;
    private $list;
    private $session;
    public function __construct()
    {
        $this->task = new TaskDAO();
        $this->list = new ListDAO();
        $this->session = new SessionManager();
        $this->session->verify();
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
        $task_date = $_POST['data'];
        $task_id = $_POST['id'];
        $task_check = $_POST['check'];
        $date = $_POST['data'];
        $dateTime = new DateTime($date);

        if ($dateTime->getTimestamp() < time()) {
            echo "<script>alert('Please enter a date in the future!');location.href='./tasks/$task_id';</script>";
        }
        if (empty($name)) {
            $name = $oldTask['name'];
        }

        if (empty($task_check)) {
            $task_check = 0;
        }
        if (empty($task_date)) {
            $task_date = $oldTask['data'];
        }

        $updateTask = new TaskDTO($name, $task_check, $task_id, $task_date);
        $this->task->update($updateTask);
    }

    public function planned()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->planned(),
            'lists' => $this->list->getList()
        ]);
    }
    public function index()
    {
        $this->loadView('todo', [
            'tasks' => $this->task->today(),
            'lists' => $this->list->getList()
        ]);
    }

    public function all()
    {
        $this->loadView('tasks', [
            'tasks' => $this->task->all(),
            'lists' => $this->list->getList()
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
        $this->loadView('task', [
            'task' => $this->task->fetchById($idTask),
            'lists' => $this->list->getList()
        ]);
    }

    public function showImportant()
    {
        echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
        $this->loadView('tasks', [
            'tasks' => $this->task->allImportant(),
            'lists' => $this->list->getList()
        ]);
    }

    public function search()
    {
        $name = $_POST['name'];
        $this->loadView('tasks', [
            'tasks' => $this->task->search($name),
            'lists' => $this->list->getList()
        ]);

    }
    public function add()
    {
        $this->loadView('addTask', ['lists' => $this->list->getList()]);
    }

    public function completed()
    {
        $id = $_GET['id'];
        $this->task->completed($id);
    }

    public function taskCompleted()
    {
        echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
        $this->loadView('tasks', [
            'tasks' => $this->task->taskCompleted(),
            'lists' => $this->list->getList()
        ]);
    }
}
