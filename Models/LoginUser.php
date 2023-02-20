<?php

class LoginUser{
    private $Email;
    private $Password;

    function __construct($Email,$Password)
    {

        $this->Email = $Email;
        $this->Password = $Password;
    }

    function getLoginUserEmail()
    {
        return $this->Email;
    }
    function getLoginUserPassword()
    {
        return $this->Password;
    }
}
?>