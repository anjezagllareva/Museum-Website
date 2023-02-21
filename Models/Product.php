<?php

class Product{
    private $Name;
    private $Author;
    private $Description;
    private $Image;
    private $Price;
    private $InsertedBy;
    private $UpdatedBy;

    function __construct($Name,$Author,$Description,$Image, $Price, $InsertedBy)
    {
        $this->Name = $Name;
        $this->Author = $Author;
        $this->Description = $Description;
        $this->Image = $Image;
        $this->Price = $Price;
        $this->InsertedBy = $InsertedBy;
    }

    function getProductName()
    {
        return $this->Name;
    }
    function getProductAuthor()
    {
        return $this->Author;
    }
    function getProductDescription()
    {
        return $this->Description;
    }
    function getProductImage()
    {
        return $this->Image;
    }
    function getProductPrice()
    {
        return $this->Price;
    }
    function getProductInsertedBy()
    {
        return $this->InsertedBy;
    }
}
?>