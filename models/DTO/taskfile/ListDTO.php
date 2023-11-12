<?php
class ListDTO
{
    /**
     * Summary of name
     * @var 
     */
    public $name;
    /**
     * Summary of idTask
     * @var 
     */
    public $idTask;

    public function __construct($name, $idTask)
    {
        $this->name = $name;
        $this->idTask = $idTask;
    }
}