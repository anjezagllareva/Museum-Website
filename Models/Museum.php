<?php

class Museum{
    private $Name;
    private $Description;
    private $Url;
    private $FirstWorkName;
    private $FirstWorkImage;
    private $SecondWorkName;
    private $SecondWorkImage;
    private $ThirdWorkName;
    private $ThirdWorkImage;

    function __construct($Name,$Description, $Url, $FirstWorkName, $FirstWorkImage,
    $SecondWorkName,$SecondWorkImage, $ThirdWorkName, $ThirdWorkImage)
    {
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Url = $Url;
        $this->FirstWorkName = $FirstWorkName;
        $this->FirstWorkImage = $FirstWorkImage;
        $this->SecondWorkName = $SecondWorkName;
        $this->SecondWorkImage = $SecondWorkImage;
        $this->ThirdWorkName = $ThirdWorkName;
        $this->ThirdWorkImage = $ThirdWorkImage;
    }
}
?>