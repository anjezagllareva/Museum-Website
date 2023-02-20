<?php

class RegisterUser{
    private $Name;
    private $Surname;
    private $Email;
    private $Password;

    function __construct($Name,$Surname,$Email,$Password)
    {
        $this->Name = $Name;
        $this->Surname = $Surname;
        $this->Email = $Email;
        $this->Password = $Password;
    }

    function getUserName()
    {
        return $this->Name;
    }
    function getUserSurname()
    {
        return $this->Surname;
    }
    function getUserEmail()
    {
        return $this->Email;
    }
    function getUserPassword()
    {
        return $this->Password;
    }
}
?>