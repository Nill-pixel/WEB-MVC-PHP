<?php
class UserDTO
{
    /**
     * Summary of name
     * @var 
     */
    public $name;
    /**
     * Summary of password
     * @var 
     */
    public $password;
    /**
     * Summary of email
     * @var 
     */
    public $email;

    public function __construct($name, $password, $email)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }
}

?>