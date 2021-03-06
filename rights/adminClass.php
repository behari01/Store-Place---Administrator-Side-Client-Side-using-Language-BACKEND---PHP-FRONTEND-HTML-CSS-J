<?php
require_once 'personClass.php';


class Admin extends Person
{
    public function __construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password, $role); 
    }


    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
    public function getFullname()
    {
        return $this->fullname;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }
}
