<?php
session_start();
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


    /**
     * Summary of name
     * @return 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Summary of name
     * @param  $name Summary of name
     * @return self
     */
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Summary of password
     * @return 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Summary of password
     * @param  $password Summary of password
     * @return self
     */
    public function setPassword($password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Summary of email
     * @return 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Summary of email
     * @param  $email Summary of email
     * @return self
     */
    public function setEmail($email): self
    {
        $this->email = $email;
        return $this;
    }
}

?>