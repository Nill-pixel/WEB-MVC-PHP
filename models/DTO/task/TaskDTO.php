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
    public $description;
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

    public function __construct($name, $description, $task_check, $task_id, $task_date)
    {
        $this->name = $name;
        $this->description = $description;
        $this->task_check = $task_check;
        $this->task_id = $task_id;
        $this->task_date = $task_date;
    }
}