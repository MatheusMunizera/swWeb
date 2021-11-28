<?php
class User
{
    private $id_user;
    private $username;
    private $email;
    private $password;

    function __construct( $id_user, $username, $email, $password)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}