<?php

class Pc extends Product
{
    private $owner;
    public function __construct(String $owner)
    {
        echo $owner.'にパソコンを配布します'."<br>";
        $this->owner = $owner;
    }

    public function use()
    {
        echo $this->owner.'はパソコンを使用します'."<br>";
    }

    public function getOwner()
    {
        return $this->owner;
    }
}