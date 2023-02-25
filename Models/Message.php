<?php

class Message{
    private $Id;
    private $Name;
    private $Email;
    private $PhoneNumber;
    private $Message;

    function __construct($Name,$Email,$PhoneNumber,$Message)
    {
        $this->Name = $Name;
        $this->Email = $Email;
        $this->PhoneNumber = $PhoneNumber;
        $this->Message = $Message;
    }

    function getMessageName()
    {
        return $this->Name;
    }
    function getMessageEmail()
    {
        return $this->Email;
    }
    function getMessagePhoneNumber()
    {
        return $this->PhoneNumber;
    }
    function getMessage()
    {
        return $this->Message;
    }
}
?>