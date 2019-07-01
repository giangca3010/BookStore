<?php
namespace App\Common;

class User
{
    private $username;
    private $name;

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getUsername()
    {
        return $this->name;
    }
}