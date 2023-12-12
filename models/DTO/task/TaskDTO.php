<?php
class TaskDTO
{
    /**
     * Summary of name
     * @var 
     */
    public $name;
    /**
     * Summary of description
     * @var 
     */
    /**
     * Summary of task_check
     * @var 
     */
    public $task_check;
    /**
     * Summary of task_id
     * @var 
     */
    public $task_id;
    /**
     * Summary of task_date
     * @var 
     */
    public $task_date;

    /**
     * Summary of task_completed
     * @var 
     */
    public $task_completed;

    public function __construct($name, $task_check, $task_id, $task_date)
    {
        $this->name = $name;
        $this->task_check = $task_check;
        $this->task_id = $task_id;
        $this->task_date = $task_date;
    }
}