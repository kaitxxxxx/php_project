<?php
class Book
{
    //本の名前
    private $name;

    public function __construct($name){
        $this->setName($name);
    }

    public function getName():String
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        return $this->name = $name;
    }
}